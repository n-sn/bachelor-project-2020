
        <?php
        
        include 'dbConn.php';
        

        $id     = (int)$_POST["id"];


        $query = "SELECT * FROM fixations WHERE id = '$id' ORDER BY seqid ASC";
        
        $coords = $conn->query($query);
        
       
        $array = array();
        
        while ($row = $coords->fetch_assoc()) {  //magic begin
        
                $id =     $row['id'];
                $xcoord = $row['xcoord'];
                $ycoord = $row['ycoord'];
                
                array_push($array, $xcoord, $ycoord);
        
        }
        
        echo implode("_", $array);
        
        ?>
        
        
        
 