<?php
$fp=fopen('data.txt','w');
fwrite($fp,'1');
fwrite($fp,'23');
fclose($fp);
echo "파일 작성 성공!";

?>