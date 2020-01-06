<?php
//copy(원본, 대상)
$file_name='data.txt';
$new_file_name='data1.txt';
if(!copy('data.txt','data1.txt')){
    echo '복사실패';
}
else echo '복사성공';

unlink($new_file_name)
?>
