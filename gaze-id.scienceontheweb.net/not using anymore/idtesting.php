<?php
        include 'dbConn.php';
        $ids = $conn->query("select * from idtesting;");
        //print $ids;
        while ($row = $ids->fetch_assoc()) {
            echo $row['id']."<br>";
        }
        //$conn->query("insert into idtesting values (6, 'testfirststring', 'testsecondstring', 'testthreestrnig')");
        //$testtext = $rset->num_rows;
        //print $testtext;
        ?>