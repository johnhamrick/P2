<? php
//"declare variables"
$manywords = $_POST['numWords'];
$symbolToggle = $_POST['add_symbol'];
$numberToggle = $_POST['add_number'];
$array = ['hello', 'goodbye', 'apple', 'banana', 'orange', 'table', 'chair', 'window', 'car', 'dog', 'cat', 'horse', 'forget', 'remember', 'number', 'letter', 'guitar', 'trumpet', 'trombone', 'kazoo'];
$symbolArray = ['!', '@', '#', '$', '%', '&', '*'];

//this is where you do the for loop for the words
(for $x = 0;; $x < $manywords; $x++) //for as many times as you got in numwords, add a word to the password
{
    $password .=$array[rand(0, 4)];
}

if($symbolToggle == '1') // if symbol is checked, pick a random symbol and add it
{
    $password .= $symbolArray[rand(0, 7)];
}

if($numberToggle == '1')  // if number is checked, pick a random number and add it
{
    $password .= rand(0, 9);
}