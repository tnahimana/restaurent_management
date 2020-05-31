<?php
// session_start();
include('config.php');
?>
<?php
 $time = date("h:i:s A");
?>

<?php
//lunch controller

$id = $_GET['id'];
// echo $id;
$sel_card = mysqli_query($con,"select * from rfid_card where card_id='$id'");
$row=mysqli_fetch_array($sel_card);
$new_card =  $row['card_id'];
// //breakfast controller
// if($time == "06:00:00 AM" AND $time <= "11:50:00 AM"){

if($new_card == $id){
    
   $customer_id = mysqli_query($con, "select customer_id from rfid_card where card_id='$id'");
    $row_break = $row['customer_id'];
    $counter_check = mysqli_query($con, "select remain_breakfast from counter_breakfast where customer_id = '$row_break' order by counter_id DESC LIMIT 1  ");
    $row=mysqli_fetch_array($counter_check);
    $counter_break=$row['remain_breakfast'];
    if($counter_break > 0){
        $counter_break = $counter_break - 1;
        $break_insert = mysqli_query($con, "insert into counter_breakfast(remain_breakfast, customer_id) values('$counter_break', '$row_break')");
        // echo "<h2>success1!</h2>";
        echo "2";
        return "2";


    }
    else if($row_break != 0 AND $counter_break != 0){

        $counter_number = mysqli_query($con, "select breakfast_counter from breakfast where customer_id ='$row_break'");
        $row=mysqli_fetch_array($counter_number);
        $i  = 1;
        $row_counter=$row['breakfast_counter'];
        $counter = $row_counter - $i;
        $break_insert = mysqli_query($con, "insert into counter_breakfast(remain_breakfast, customer_id) values('$counter','$row_break')");
        // echo "<h2>success2!</h2>";
        // exit();
        echo "2";
        return "2";

    }
    else if($counter_break == 0){
        // echo "<h3>no more breakfast remain on your account, Please buy a new Token!</h3>";
        // exit();
        echo "3";
        return "3";
        
    }

}
else{
    // echo "<h2>Card deosn't Match</h2>";
    echo "4";
    return "4";

}
// }


?>