<?php
$arr = [5,2,6,2,6,2,3,5,0,2,1];
$minArr = $arr[0];
foreach ($arr as $value){
    if ($minArr > $value){
        $minArr = $value;
    }
}
echo $minArr;