<?php
require_once('config.php');

            $sel_break = mysqli_query($con, "SELECT count(customer_id) as count from customers");	
            $row = mysqli_fetch_array($sel_break);
             $count = $row['count']; 
           echo $customers = $count;

 
?>