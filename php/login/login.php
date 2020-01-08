<?php
$user_id=$_POST['user_id'];
$passwd=$_POST['user_password'];

#login테이블에 사용자가 입력한 아이디와 비번이 있는지, 있다면
#맞는지 검사하여 메세지 출력
#2.입력한 아이디가 없다면 회원가입으로 링크 걸기

$conn=mysqli_connect('localhost','test','1111','testdb');

$query="select * from login where user_id='$user_id'";//
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);

#$re=mysqli_fetch_array($result);

if($num==0){
    echo "가입된 회원이 아닙니다."."<br>";
    echo "<a href='join.html'>회원가입</a>";
}

else{
    echo "아이디 틀림";
    $re=mysqli_fetch_array($result);
    if($passwd==$re[2])
    echo "로그인 되었습니다.";
}

//mysql_close($conn);
?>
