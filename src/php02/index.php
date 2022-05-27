<?php

require_once('config/occupations.php');
require_once('config/events.php');

echo "プレイヤー名を入力してください" . PHP_EOL;
echo ">> ";
$name = trim(fgets(STDIN));

while(empty($name)){
    echo "" . PHP_EOL;
    echo "入力されていません。".PHP_EOL;
    echo "再度入力してください。".PHP_EOL;
    echo ">> ";
    $name = trim(fgets(STDIN));
}

echo "". PHP_EOL;
echo "あなたの名前は、{$name}ですね。" . PHP_EOL;
echo "それでは、人生ゲームスタートです。大富豪目指して頑張りましょう";
echo "まず職業を決めましょう。". PHP_EOL;
echo "Enterを押して職業を決めてください。" . PHP_EOL;
fgets(STDIN);

$job_num = mt_rand(0,3);
$occupation = $occupations[$job_num]['occupation'];
$income = $occupations[$job_num]['income'];
$asset = $income;

echo "職業は、{$occupation}です。" . PHP_EOL;
echo "資産は、{$asset}万円です。" . PHP_EOL;

$car = 0;
$pc = 0;
$house = 0;

for($event_count = 1; $event_count <= 10; $event_count++){
    if($event_count === 4 || $event_count === 8){
        echo "" . PHP_EOL;
        echo "給料日になりました。" . PHP_EOL;
        echo "{$income}万円の給料をもらう。" . PHP_EOL;
        $asset = $asset + $income;
        echo "資産が{$asset}万円になりました。" . PHP_EOL;
    }
    if($asset >= 2000){
        echo "" . PHP_EOL;
        echo "{$asset}万円溜まった。 何かやってみようかな？" . PHP_EOL;
        echo "1: 車を買う。" . PHP_EOL;
        echo "2: パソコンを買う。" . PHP_EOL;
        echo "3: 家を買う。" . PHP_EOL;
        echo "数字を入力してください。" . PHP_EOL;
        echo ">> ";

        $choice = trim(fgets(STDIN));

        while(!is_numeric($choice)){
            echo "" . PHP_EOL;
            echo "数字が入力されていません。" . PHP_EOL;
            echo "再度入力してください。" . PHP_EOL;
            echo ">> ";
            $choice = trim(fgets(STDIN));
        }
        switch ($choice){
            case 1: 
                echo "車を購入する。1000万円払う" . PHP_EOL;
                $asset = $asset - 1000; //所持金
                $car = $car + 1;
                break;
            
            case 2: 
                echo "パソコンを入力する。　100万円払う。" . PHP_EOL;
                $asset = $asset - 100;
                $pc = $pc + 1;
                break;
            
            case 3:
                echo "全資産で家を入力する。" . PHP_EOL;
                $asset = 0;
                $house = $house + 1;
                break;
            
            default:
                echo "全資産で家を入力する。" . PHP_EOL;
                $asset = 0;
                $house = $house + 1;
                break;
        }
    }
    echo "" . PHP_EOL;
    echo "" . PHP_EOL;
    echo "{$event_count}回目のイベントです。" . PHP_EOL;
    echo "Enterを押してルーレットを回してください。" . PHP_EOL;
    fgets(STDIN);
    $event_num = mt_rand(0,9);
    $event = $events[$event_num]['event'];
    $profit = $events[$event_num]['profit'];
    $asset = $asset + $profit;
    echo $event . PHP_EOL;
    echo "資産が{$asset}万円になりました。" . PHP_EOL;
}

echo "" . PHP_EOL;
echo "{$name}さんの資産が確定しました。" . PHP_EOL;
echo "" . PHP_EOL;
echo "資産: {$asset}万円" . PHP_EOL;
echo "車: {$car}台" . PHP_EOL;
echo "パソコン: {$pc}台" . PHP_EOL;
echo "家: {$house}軒" . PHP_EOL;
echo "" . PHP_EOL;

if($asset >= 1500){
    echo "{$name}は大富豪です。よく頑張りました。" . PHP_EOL;
} elseif($asset < 1500 && $asset >= 0){
    echo "{$name}さんは平民です。来世は大富豪になりましょう。" . PHP_EOL;
}else{
    echo "{$name}さんは大貧民です。頑張って借金を返済しましょう。" . PHP_EOL;
}
