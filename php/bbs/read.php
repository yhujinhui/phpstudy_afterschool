<!doctype html>
<html>
    <head>
        <title></title>       
</head>
<body>
    <table border="1" width="400">
    <?php
    $idx=$_GET['idx'];    
    include('db_conn.php');
    $query="select * from bbs where ID='$idx'";
    $result=mysqli_query($conn,$query);
   # $num=mysqli_num_rows($result);
    $re=mysqli_fetch_array($result);
    echo 'IP'.$_SERVER['REMOTE_ADDR'];
    $hit=$re[6]+1;
    $query_hit="update bbs set hit='$hit' where ID='$idx'";
    $Query_result=mysqli_query($conn,$query_hit);

    echo "<tr><td colspan='3'> $idx </td></tr>";
    echo "<tr><td>글쓴이 $re[1]</td><td>날짜 $re[5]</td><td>조회수 $hit</td></tr>";
    echo "<tr><td colspan='3' height='150px'> $re[4] </td></tr>";
    echo "<br><a href='list.php'> 목록</a>";
    echo "<a href='update_form.php?idx=$re[0]'> 수정</a>";
    echo "<a href='delete_form.php?idx=$re[0]'> 삭제</a>";
    mysqli_close($conn);
    ?>
 </table>
</body>
<html>



