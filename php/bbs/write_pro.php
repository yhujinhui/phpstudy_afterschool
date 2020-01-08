<?php
include('db_conn.php');
$user_id=$_POST['user_ID'];
$password=$_POST['user_pw'];
$title=$_POST['user_title'];
$content=$_POST['user_content'];
$hit=0;
$query="insert into bbs(user_id,password,title,content,reg_date,hit) values('$user_id','$password','$title','$content',now(),'$hit')";
$result=mysqli_query($conn,$query);
mysqli_close($conn);
echo"<script>alert('등록');</script>"
?>
<meta http-equiv='refresh' content="0;url='list.php'">