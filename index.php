<?php
function deleteItemArray($arr,$number){
    for ($i=0;$i<count($arr);$i++){
        if ($number==$arr[$i]){
            array_splice($arr,$i,1);
            $i--;
        }
    }
    return $arr;
}
echo 'arr=['.implode(',',$arr2=[1,5,7,9,0,5,8,3,0,0,0,0,7,4,0,0,6,0]).']<br>';
echo 'arr=['.implode(',',deleteItemArray($arr2,0)).']';