<?php
//DB Access Information
         $host = 'fdb25.awardspace.net'; //db host (might be localhost)
         $user = '3410590_test';         //db user (awardspace doesn't allow more than 1 user)
         $pass = '3410590_test';         //I wish I could do this from shell...
         $db   = '3410590_test';
         //echo "trying to connect";
         //connect database
         $conn = new mysqli($host, $user, $pass, $db);  //open connection to my sql server
         if ($conn -> connect_error) {
         die ("connection failed: " . $conn->connect_error);
         } else {
         //echo "connection established. Database connected";
         }
         ?>