
        <?php
        
        include 'dbConn.php';
        
        $uid = $_POST["uid"];
        $name = $_POST["name"];
        $fingerprint    = $_POST["fingerprint"];


        $query = "insert into fingerprints (id, name, fingerprint) values ('$uid', '$name','$fingerprint');";
        
        $conn->query($query);
        
        ?>