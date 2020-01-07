<!-- 1부터 10까지 합 구해서 출력
1부터 100까지 짝수 출력 
$score=85일때 수우미양가 출력
1부터 100까지 홀수의 합 출력(while 문)-->
<?php
$sum=0;
for($i=1;$i<=10;$i++){
    $sum+=$i;
}
echo $sum."<br>";

for($i=1;$i<=100;$i++){
    if($i%2==0){
        echo $i, " ";
    }
    switch($i/10){
        case 9:case 10: echo'수'."<br>";break;
        case 8: echo'우'."<br>";break;
        case 7: echo'미'."<br>";break;
        case 6: echo'양'."<br>";break;
        case 5: echo'가sk'."<br>";
    }    
}

$i=1;$sum=0;
while($i<=100){
    if($i%2==1){
        $sum+=$i;}
        $i++;
}
echo $sum."<br>";
?>

