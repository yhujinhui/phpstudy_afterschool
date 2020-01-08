<?php

include('db_conn.php');
$idx=$_POST['idx'];
echo "abcde".$idx;
$user_id=$_POST['user_ID'];
$title=$_POST['user_title'];
$content=$_POST['user_content'];
$password=$_POST['user_pw'];

$query="select *from bbs where ID=$idx";
$result=mysqli_query($conn,$query);
#$num=mysqli_num_rows($result);
$re=mysqli_fetch_array($result);
// echo "fdff".$result[0];
echo "aaaaaaa".$password;
if($re[0]==$password){
    $query2="update bbs set user_id='$user_id',title='$title',content='$content' where ID=$idx";
    mysqli_query($conn,$query2);
    echo $query2."수정되었습니다";
   #$result=mysqli_query($conn,$query_password);
}
else{
    echo("<script>alert('잘못된 비밀번호입니다');history.go(-1);</script>");
}

?>