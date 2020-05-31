<?php
require_once('config.php');

            $sel_break = mysqli_query($con, "SELECT count(user_fname) as count from users");	
            $row = mysqli_fetch_array($sel_break);
             $count = $row['count']; 
           echo $users = $count;

 
?>