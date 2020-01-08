<!doctype html>
<html>
    <head>
      
</head>
<body>
    <h1>리스트</h1>
    <table>
    <form>
        <select name='search'>
            <option value='all_serch'>전체검색</option>
            <option value='title'>제목</option>
            <option value='user'>작성자</option>
            <option value='content'>내용</option>
    </select>
    </form>
    <input type="text" name="serch" width: 270px;>
    <input type="button" name="serch_btn" value="검색"></button>
    <table>
    <table border="1" width="400">
        <tr><td>번호</td><td>제목</td><td>작성자</td><td>등록일시</td><td>조회수</td></tr>
<?php
include('db_conn.php');
$query="select * from bbs order by id desc;";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);

for($i=0;$i<$num;$i++){
    echo "<tr>";
    $re=mysqli_fetch_array($result);
    echo "<td>$re[0]</td><td><a href='read.php?idx=$re[0]'>$re[3]</td><td> $re[1]</td><td> $re[5]</td><td> $re[6]</td></tr>";
}

mysqli_close($conn);
?>
</table>
</body>
</html>
