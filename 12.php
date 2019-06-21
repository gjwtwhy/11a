<?php
/**
 * Created by PhpStorm.
 * User: guoju
 * Date: 2019/6/21
 * Time: 9:54
 */

echo "1:---".Sum_Solution(100);
function Sum_Solution($n){
    $sum = 0;
    for ($i=1;$i<=$n;$i++){
        $sum += $i;
    }

    return $sum;
}
echo "<br/>2:---".Sum_Solution(100);
function Sum_Solution2($n){
    $sum = 0;
    $i = 1;
    while ($i<=$n){
        $sum += $i;
        $i++;
    }
    return $sum;
}
echo "<br/>3:---".Sum_Solution(100);
function Sum_Solution3($n){
    if ($n==1){
        return 1;
    }

    return $n+Sum_Solution3($n-1);
}
echo "<br/>4:---".Sum_Solution4(100);
function Sum_Solution4($n){
    $sum = 0;
    $n&&$sum = $n+Sum_Solution4($n-1);
    return $sum;
}
echo "<br/>5:---".Sum_Solution5(100);
//function Sum_Solution5($n){
//    $n>0?$sum = $n+Sum_Solution4($n-1):$n;
//}