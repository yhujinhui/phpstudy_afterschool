<!-- <!doctype html>
<html>
    <head>
        <title></title>
</head>
<body>
    <h1>회원가입</h1>
    <table border="1" width="400)>
        "
</body> -->


<?php
$id=$_POST['user_id'];
$pw=$_POST['user_password'];
$name=$_POST['user_name'];
$gender=$_POST['gender'];
$tp=$_POST['user_tp'];
$cp=$_POST['user_cp'];
$mail=$_POST['user_mail'];
$post=$_POST['user_post'];
$roadadd1=$_POST['user_roadadd1'];
$roadadd2=$_POST['user_roadadd2'];
$roadadd3=$_POST['user_roadadd3'];
$arr=$_POST['list1'];

echo $gender;
for($i=0; $i<count($_POST['hobby']); $i++){//배열의 길이
    $a=$_POST['hobby'];
    echo $a[$i];
}

for($i=0;$i<count($arr); $i++){
    echo $arr[$i];
}

$conn=mysql_connect('localhost','test','1111','join_mem');
$query="select * from join_mem values('$id','$pw','$name','$gender','$tp','$cp','$mail','$mail','$post','$roadadd1','$roadadd2','$roadadd3','$ ";

?>
