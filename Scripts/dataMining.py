import nltk
import MySQLdb
import requests
from pygeocoder import Geocoder
from twython import Twython, TwythonError

twitter = Twython('FtZZaNguERiYnpVdrIAJDw', 'XDFbwmey7VF726IS14ky5WzNXiQEcyvioS5YXHwDY',
                  '2290813705-JQITp9HBdIEFx1qO208j3kY5RW4JpmS63mcV3Av', '4zRQCnRm5J4eTgZY2kfVg9nCPEqULZvZXxSoZMu5O1YUr')
db = MySQLdb.connect('127.0.0.1', 'peter', 'ndesh0140', 'vigil')

def res():
    res = requests.get('http://localhost/vigil/notificationTextEmail.php')
    return res


def main():
    cursor = db.cursor()
    #accounts = ["@KenyaRedCross", "@StJohnsKenya", "@CodeBlackMobAlt"]
    accounts = ["@CodeBlackMobAlt"]
    for a in accounts:
        try:
            sql = "SELECT * FROM configs WHERE account = '%s'" % (a)
            cursor.execute(sql)
            results = cursor.fetchall()


            user_timeline = twitter.get_user_timeline(screen_name=a, count=5, since_id=results[0][1])

            if (user_timeline) :
                number1 = int(user_timeline[0]['id_str'])

                sql1 ="UPDATE configs SET sinceId = '%d' WHERE account = '%s' " % (number1, a)
                cursor.execute(sql1)
                db.commit()
            for tweet in user_timeline:
                print tweet['text'].encode('utf-8').lower(), "\n", tweet['id_str'], "\n", a , "\n" , tweet['created_at']
                number = int(tweet['id_str'])
                createdAt = tweet['created_at']
                rawTweet = tweet['text'].encode('utf-8').lower()
                Latitude = ''
                Longitude = ''
                Alert = ['None']
                flagA = 0
                flagD = 0

                #filter 1 to get keywords

                def find_words(text, search):
                    dText = text.split()
                    dSearch = search.split()
                    found_word = []
                    for text_word in dText:
                        for search_word in dSearch:
                            if search_word == text_word:
                                if search_word not in found_word:
                                    found_word.append(search_word)
                    return found_word

                #filter 2 and 3 for incidents
                if len(find_words(rawTweet, 'bomb shooting accident  fire shootout robbery contamination #aaccident'
                                            ' #accidentalert #Shooting')) > 0:
                    text = nltk.word_tokenize(rawTweet)
                    pos = nltk.pos_tag(text)
                    for tups in pos:
                        if "in" in tups or "on" in tups or "at" in tups:
                            Alert = find_words(rawTweet, 'bomb shooting accident fire shootout robbery contamination ')
                            print "\n" + rawTweet, a , "\n", Alert
                            counter = pos.index(tups) + 1
                            print pos[counter]
                            location = (pos[counter][0], ", Nairobi, Kenya")
                            resultsGeo = Geocoder.geocode(location)
                            Latitude = resultsGeo.coordinates[0]
                            Longitude = resultsGeo.coordinates[1]
                            flagA = 1
                            print(resultsGeo.coordinates)


                            #filter 2 and 3 for blood donation
                elif len(find_words(rawTweet, 'blood donation')) > 0:
                    text = nltk.word_tokenize(rawTweet)
                    pos = nltk.pos_tag(text)
                    for tups in pos:
                        if "in" in tups or "on" in tups or "at" in tups:
                            Alert = find_words(rawTweet, 'blood donation')
                            print "\n" + rawTweet, a, "\n", Alert
                            counter = pos.index(tups) + 1
                            print pos[counter]
                            location = (pos[counter][0], ", Nairobi, Kenya")
                            resultsGeo = Geocoder.geocode(location)
                            Latitude = resultsGeo.coordinates[0]
                            Longitude =  resultsGeo.coordinates[1]
                            flagD = 1
                            print(resultsGeo.coordinates)

                sql2 ="INSERT INTO tweets(tweetId,tweet,screenName,createdAt,alertFlag,bloodDonationFlag,locationLat,locationLong,alert,notificationFlag) VALUES ( '%d', '%s', '%s' , '%s' , '%d' , '%d' , '%s' , '%s' ,'%s','%d')" % \
                      (number, tweet['text'].encode('utf-8'), a, createdAt, flagA, flagD, Latitude, Longitude, Alert[0],0)

                cursor.execute(sql2)

                db.commit()
        except TwythonError as e:
            print e

    res()        

   



if __name__ == '__main__':
    main()

