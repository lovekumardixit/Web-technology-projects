<?php
$steps=1500;
if($steps<5000){
    echo"beginer fitness level";
}
else if ($steps>5000 and $steps<10000){
    echo "intermediate fitness level";
}
else if ($steps>10000){
    echo "advanced fitness level";
}
?>