<?php
$people = array("Taro", "Jiro", "Saburo");

var_dump($people);
echo $people[0];

$People = array(
    'Person1' => 'Taro',
    'Person2' => 'Jiro',
    'Person3' => 'Saburo'
);

var_dump($People);

$people = [
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "last_name" =>"yamada",
        "first_name" => "taro",
        "age" => 25,
        "gender" => "男性"
    ]
    ];
    echo $people[0]["last_name"];
    


$people = array("Taro", "Jiro", "Saburo");

foreach ($people as $person){
    echo $person;
    echo '<br />';
}

$people = array(
    'person1' => 'Taro',
    'person2'  => 'Jiro',
    'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
    print $person . "は" . $name . "です".'<br />';
}

$people = [
    ['Taro',25,'men'],
    ['Jiro',20,'men'],
    ['hanako',16,'women']
];

foreach($people as $person){
    echo $person[0].'('.$person[1].'歳'.$person[2].')';
    echo '';
}