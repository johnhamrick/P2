

<?php
//"declare variables"
$manywords = $_POST['numWords'];
$symbolToggle = $_POST['add_symbol'];
$numberToggle = $_POST['add_number'];
$array = ['hello', 'goodbye', 'apple', 'banana', 'orange', 'table', 'chair', 'window', 'car', 'dog', 'cat', 'horse', 'forget', 'remember', 'number', 'letter', 'guitar', 'trumpet', 'trombone', 'kazoo'];
$symbolArray = ['!', '@', '#', '$', '%', '&', '*'];


for ($x = 0; $x < $manywords; $x++)
{
    $newPassword .= $array[rand(0, 4)];
}

if ($symbolToggle == '1')
{
    $newPassword .= $symbolArray[rand(0, 7)];
}

if ($numberToggle == '1')
{
    $newPassword .= rand(0, 9);
}