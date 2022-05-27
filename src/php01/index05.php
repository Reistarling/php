<?PHP
for($i = 0; $i <= 10; $i++){
    if($i %2 == 0){
        echo $i;
        echo "<br />";
    }
}
$a = 0;
while ($a <= 20){
    if($a % 3 == 0){
        $a++;
        continue;
    }
    echo $a."<br />";
    $a++;
}

do{
    echo $i."<br />";
    $i++;
}while ($i <5);