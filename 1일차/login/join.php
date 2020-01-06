<?php

$id=$_POST['user_id'];
$pw=$_POST['user_password'];
$chk_pw=$_POST['chk_password'];
$name=$_POST['user_name'];
$gender=$_POST['gender'];
$tp=$_POST['user_tp'];
$cp=$_POST['user_cp'];
$mail=$_POST['user_mail'];
$post=$_POST['user_post'];
$roadadd1=$_POST['user_roadadd1'];
$roadadd2=$_POST['user_roadadd2'];
$roadadd3=$_POST['user_roadadd3'];

echo $gender;
for($i=0; $i<count($_POST['hobby']); $i++){//배열의 길이
    $a=$_POST['hobby'];
    echo $a[$i];
}
?>
