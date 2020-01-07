<?php

//1. newfile.txt란 파일을 w모드로 열기
$fp=fopen('newfile.txt','w');
//2. fwrite()사용해서 'Johe Doe'쓰기
fwrite($fp,'Johe Doe');
//3. fwrilte() 사용해서 'Jane Doe' 쓰기
fwrite($fp,'Jone Doe');
//4. 파일 닫기
fclose($fp);

?>