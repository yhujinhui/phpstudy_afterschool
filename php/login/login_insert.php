<?php
//post 방식으로 넘어온 사용자 입력값을 받는 변수

$conn=mysqli_connect('localhost','test','1111','testdb');
if($conn){
    echo "php와 db연동 성공!"."<br>";
}

$user_id=$_POST['user_id'];
$passwd=$_POST['user_password'];

$query="insert into login(user_id,passwd) values('$user_id','$passwd')";
mysqli_query($conn,$query);
echo "등록 성공!"."<br>";
mysqli_close($conn);

echo "사용자가 입력한 아이디는".$user_id."이고"."<br>
"."비밀번호는".$passwd."입니다."."<br>";
if($user_id=='test'&&$passwd=='1234'){
    echo "로그인 성공";
}
else if($user_id!='test'||$passwd!='1234'){
    echo "가입하지 않은 아이디이거나, 잘못된 비밀번호입니다."."<br>";
}

?>