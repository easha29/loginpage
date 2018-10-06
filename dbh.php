<?php

$conn = mysqli_connect("localhost", "root", "", "loginpage");

if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>