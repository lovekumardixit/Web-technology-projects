
<?php
$score=100;
if ($score>90){
    echo " GRADE A";
}
else if ($score>=81 and $score<=90){
    echo "GRADE B";
}
else if ($score>=71 and $score<=80){
    echo "GRADE C";
}
else if ($score>=61 and $score<=70){
    echo "GRADE D";
}
else if ($score<=60){
    echo "GRADE F";
}
?>