
        <?php
        
        include 'dbConn.php';
        
        $text = $_POST["text"];

        $query = "insert into autoincid (text) values ('$text');";
        
        $conn->query($query);
        
        ?>