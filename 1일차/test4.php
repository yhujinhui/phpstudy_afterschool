<?php
//1. fgetc()로 파일 읽어오기
$fp=fopen('data.txt','r');
while($re=fgetc($fp)){
    echo $re."<br>";
}
fclose($fp);
echo "파일 읽기1 성공!";
//2. fgets()로 파일 읽어오기
$fp=fopen('data.txt','r');
while($re=fgets($fp)){
    echo $re."<br>";
}

fclose($fp);
echo "파일 읽기2 성공!";
$fp=fopen('data.txt','r');
//3. fread()로 파일 읽어오기
$re=fread($fp,filesize('data.txt'));

echo $re;

//4.
echo file_get_contents('data.txt');
?>