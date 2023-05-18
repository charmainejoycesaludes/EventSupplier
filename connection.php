<?php
$con = new mysqli('localhost','root','','eventsupplier');
if(!$con){
    die(mysqli_error($con));
} else{
    echo'database connected';
}
?>