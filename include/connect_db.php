<?php
$conn = new mysqli('localhost','root','','cisfx');

if($conn->connect_errno){
    die("Connection failed".$conn->connect_error);
}

?>