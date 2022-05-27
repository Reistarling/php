<?php
function outputNumber($a){
    echo "引数の値は".$a."です";
    return;
}

outputNumber(2);
echo "<br />";

function exam($score1, $score2, $score3){
    $scoreSum = $score1+$score2+$score3;
    if($scoreSum > 210){
        echo("合計点は".$scoreSum."なので合格です");
    }else{
        echo("合計点は".$scoreSum."なので不合格です");
    }
}
echo exam(80, 90, 70);
echo "<br />";

function triangle($height, $width){
    return $width*$height/2;
}
echo triangle(12, 30);
echo "<br />";

function square($height, $width){
    return $width*$height;
}
echo square(12,30);
echo "<br />";

function trapezoid($upper, $lower, $height){
    return ($upper+$lower)*$height/2;
}
echo trapezoid(3,6,12);
echo "<br />";