<?php

$arr1 = [
    [
        'id' => 1,
        'fullName' => 'Ma Van Nam',
        'age' => 18
    ],
    [
        'id' => 2,
        'fullName' => 'Pham Thi Hoa',
        'age' => 120
    ]
];
echo '<pre>';
print_r($arr1);
echo '</pre>';

// using foreach browse array1 

foreach ($arr1 as  $key => $item) {
    echo "id:" . $item['id'] . "<br>";
    echo "fullName:" . $item['fullName'] . "<br>";
    echo "age:" . $item['age'] . "<br>";
    unset($arr1[$key]['age']);
    echo "------------------------<br>";
}

echo '<pre>';
print_r($arr1);
echo '</pre>';
