<?php
$con = new mysqli('localhost', 'root', '', 'biblioteca');

if(!$con){
    die(mysqli_error($con));
}

?>