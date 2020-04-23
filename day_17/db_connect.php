<?php

        $host_name='localhost';
        $user_name='root';
        $password='';
        $db_name='db_seip_php17';
        $connection=mysqli_connect($host_name, $user_name, $password);
        if($connection){
            $db_select=mysqli_select_db($connection, $db_name);
            if($db_select){
                
            }
            else {
                die('Database Selection Fail'.  mysql_error($connection));
         }
            
        } else {
                die('Database Connection Fail'. mysql_error($connection));
         }
