
        <?php
        
        include 'dbConn.php';
        

        
            $datestamp = $_POST["datestamp"];
         
            $query = "insert into userlist (timestampval) values ('$datestamp');";
        
            $conn->query($query);    
            
            $query = "select (id) from userlist where (timestampval) = $datestamp;";
            
            $uniqueid = $conn->query($query);
            
            echo mysqli_fetch_array($uniqueid)[0];
            
        

         


        
        ?>