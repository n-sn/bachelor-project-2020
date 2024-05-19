
        <?php
        
        include 'dbConn.php';
        
        $xcoord = $_POST["xcoord"];
        $ycoord = $_POST["ycoord"];
        $len    = $_POST["len"];
        $id     = (int)$_POST["id"];


        $query = "insert into fixations (id, xcoord, ycoord, len) values ('$id', '$xcoord','$ycoord','$len');";
        
        $conn->query($query);
        
        ?>