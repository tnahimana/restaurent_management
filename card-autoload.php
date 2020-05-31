<?php
include('config.php');

$card_id = $_GET['id'];

$sel_card = mysqli_query($con, "select * from rfid_card where card_id = '$card_id' LIMIT 1");
$card = mysqli_num_rows($sel_card);

if($card == 0){
    $link = "customer.php?id=" . $card_id;
    echo "<script>window.open('$link', '_self')</script>";

}
else{
    echo "<script>alert('This card has been already in used for another customer, Please try another one!')</script>";
    echo "<script>window.open('home.php', '_self')</script>";
}
?>