<?php
//post 방식으로 넘어온 사용자 입력값을 받는 변수

$conn=mysqli_connect('localhost','test','1111','testdb');
if($conn){
    echo "php와 db연동 성공!"."<br>";
}

$id=$_POST['user_id'];
$passwd=$_POST['user_password'];
echo "사용자가 입력한 아이디는".$id."이고"."<br>
"."비밀번호는".$passwd."입니다."."<br>";
if($id=='test'&&$passwd=='1234'){
    echo "로그인 성공";
}
else if($id!='test'||$passwd!='1234'){
    echo "가입하지 않은 아이디이거나, 잘못된 비밀번호입니다."."<br>";
}

?>