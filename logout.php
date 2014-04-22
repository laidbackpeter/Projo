<?php
session_start();
session_destroy();
header("Location: vigilHome/index.html");