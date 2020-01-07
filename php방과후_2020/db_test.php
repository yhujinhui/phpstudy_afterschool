<?php
$conn=mysqli_connect('localhost','test','1111','testdb');
if($conn){
    echo "php와 db연동 성공!";
}
?>