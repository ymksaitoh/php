<?php
$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);


$peoples = [
    'person1' => 'taro',
    'person2' => 'jiro',
];

var_dump($peoples);
echo $peoples['person1'];

$person = [
    [
        "last_name" =>  "山田",
        "first_name" => "太郎",
        "age" => 29,
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => 20,
        "gender" => "女性"
    ]
    ];

    echo $person[0]["last_name"];

$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
    echo $person;
    echo '<br />';
}

foreach ($people as $person => $name ) {
    print $person . "first_name" . "(" . $age . "歳" . ")" . "<br />";
}

$question3 = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['hanako', 20, 'women']
];

foreach ($question3 as $persons) {
    echo $persons[0] . '(' . $persons[1] . '歳' . $persons[2] . ')' . '<br />';
}
