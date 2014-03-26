<?php

$host = "localhost"; // Host name 
$username = "peter"; // Mysql username 
$password = "ndesh0140"; // Mysql password 
$db_name = "vigil"; // Database name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");
$telNumber;
$tweetId;
$text;

function displayAlert() {

    $sql1 = "SELECT * FROM tweets";
    $result1 = mysql_query($sql1);
    while ($row = mysql_fetch_array($result1)) {
        if ($row['alertFlag'] == 1 and $row['notificationFlag'] == 0 and date("Y-m-d", strtotime($row['createdAt'])) == date("Y-m-d")) {
            echo "A confirmed " . $row['alert'] . " has occurred at spot marked X. Proceed with caution and give emergency authorities right of way. Follow " . $row['screenName'] . " for more info." . "\n \n" . "Here is the raw tweet: " . $row['Tweet'] . "\n \n";
            $text = "A confirmed " . $row['alert'] . " has occurred at spot marked X. Proceed with caution and give emergency authorities right of way. Follow " . $row['screenName'] . " for more info." . "\n \n" . "Here is the raw tweet: " . $row['Tweet'] . "\n \n";
            $tweetId = $row['tweetId'];
            //die($tweetId);
            $sql2 = "SELECT * FROM registration";
            $result2 = mysql_query($sql2);

            while ($row2 = mysql_fetch_array($result2)) {

                $telNumber = $row2['phoneNumber'];


                if ($row2['emailFlag'] == "checked") {




                    $to = 'ndegwa.muchina3@gmail.com'; #$row2['Email'];
                    $subject = 'Danger Notification !!!';
                    $message = $text;
                    $headers = 'From: codeblackmobilealert@gmail.com' . "\r\n" .
                            'Reply-To: codeblackmobilealert@gmail.com';


                    mail($to, $subject, $message, $headers);
                }
                if ($row2['smsFlag'] == "checked") {
                    require_once('AfricasTalkingGateway.php');

// Specify your login credentials
                    $username = "peter0140";
                    $apikey = "982746a65d5cd19e886e4c0e49a13f2aabced1f3f6474f5b19e2952f201a6a1a";

// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
                    $prefix1 = "+";
                    $prefix2 = 254;
                    $recipients = $prefix1 . $prefix2 . $telNumber;
// And of course we want our recipients to know what we really do
                    $message = "This is peter ndegwa testing his project, do not reply. Alert!!!";

// Create a new instance of our awesome gateway class
                    $gateway = new AfricasTalkingGateway($username, $apikey);

// Any gateway errors will be captured by our custom Exception class below, 
// so wrap the call in a try-catch block
                    try {
                        // Thats it, hit send and we'll take care of the rest. 
                        $results = $gateway->sendMessage($recipients, $message);
                        foreach ($results as $result) {
                            // Note that only the Status "Success" means the message was sent
                            echo " Number: " . $result->number;
                            echo " Status: " . $result->status;
                            echo " MessageId: " . $result->messageId;
                            echo " Cost: " . $result->cost . "\n";
                        }
                    } catch (AfricasTalkingGatewayException $e) {
                        echo "Encountered an error while sending: " . $e->getMessage();
                    }
                }
            }


            $flag = 1;
            $sql3 = "UPDATE tweets SET notificationFlag='$flag' WHERE tweetId='$tweetId'";
            mysql_query($sql3) or die("Error: " . mysql_error());
        }
    }
}

function displayDonation() {
    $sql3 = "SELECT * FROM tweets";
    $result3 = mysql_query($sql3);
    //print_r($row = mysql_fetch_array($result));
    //exit ();
    while ($row = mysql_fetch_array($result3)) {

        if ($row['bloodDonationFlag'] == 1 and $row['notificationFlag'] == 0 and date("Y-m-d", strtotime($row['createdAt'])) == date("Y-m-d")) {

            echo "A confirmed " . $row['alert'] . " has occurred at spot marked X. Proceed with caution and give emergency authorities right of way. Follow " . $row['screenName'] . " for more info." . "\n \n" . "Here is the raw tweet: " . $row['Tweet'] . "\n \n";

            $text = "A confirmed " . $row['alert'] . " has occurred at spot marked X. Proceed with caution and give emergency authorities right of way. Follow " . $row['screenName'] . " for more info." . "\n \n" . "Here is the raw tweet: " . $row['Tweet'] . "\n \n";

            $tweetId = $row['tweetId'];
            //die($tweetId);
            //exit();
            $sql4 = "SELECT * FROM registration";
            $result4 = mysql_query($sql4);

            while ($row2 = mysql_fetch_array($result4)) {
                $telNumber = $row2['phoneNumber'];


                if ($row2['emailFlag'] == "checked") {

                    $to = "ndegwa.muchina3@gmail.com";
                    $subject = 'Blood Donation Notification';
                    $message = $text;
                    $headers = 'From: codeblackmobilealert@gmail.com' . "\r\n" .
                            'Reply-To: codeblackmobilealert@gmail.com';


                    mail($to, $subject, $message, $headers);
                }
                if ($row2['smsFlag'] == "checked") {
                    require_once('AfricasTalkingGateway.php');

// Specify your login credentials
                    $username = "peter0140";
                    $apikey = "982746a65d5cd19e886e4c0e49a13f2aabced1f3f6474f5b19e2952f201a6a1a";

// Specify the numbers that you want to send to in a comma-separated list
// Please ensure you include the country code (+254 for Kenya in this case)
                    $prefix1 = "+";
                    $prefix2 = 254;
                    $recipients = $prefix1 . $prefix2 . $telNumber;


// And of course we want our recipients to know what we really do
                    $message = "This is peter ndegwa testing his project, do not reply. Donation!!!";

// Create a new instance of our awesome gateway class
                    $gateway = new AfricasTalkingGateway($username, $apikey);

// Any gateway errors will be captured by our custom Exception class below, 
// so wrap the call in a try-catch block
                    try {
                        // Thats it, hit send and we'll take care of the rest. 
                        $results = $gateway->sendMessage($recipients, $message);
                        foreach ($results as $result) {
                            // Note that only the Status "Success" means the message was sent
                            echo " Number: " . $result->number;
                            echo " Status: " . $result->status;
                            echo " MessageId: " . $result->messageId;
                            echo " Cost: " . $result->cost . "\n";
                        }
                    } catch (AfricasTalkingGatewayException $e) {
                        echo "Encountered an error while sending: " . $e->getMessage();
                    }
                }
            }
            $flag = 1;
            $sql3 = "UPDATE tweets SET notificationFlag='$flag' WHERE tweetId='$tweetId'";
            mysql_query($sql3) or die("Error: " . mysql_error());
        }
    }
}

displayDonation();
displayAlert();
