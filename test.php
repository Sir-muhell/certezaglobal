<?php 
include('data/functions.php');
$add = $_SERVER['REMOTE_ADDR'];
echo $add;



// PHP program to divide a string
// in n equal parts
 
// Function to print n
// equal parts of str
function divideString($str, $n)
{
    $str_size = strlen($str);
    $i;
    $part_size;
 
// Check if string can be divided
// in n equal parts
if ($str_size % $n != 0)
{
    echo "Invalid Input: String size";
    echo " is not divisible by n";
    return;
}
 
// Calculate the size of parts to
// find the division point
$part_size = $str_size / $n;
for ($i = 0; $i< $str_size; $i++)
{
    if ($i % $part_size == 0)
        echo "\n";
    echo $str[$i];
}
}
 
    // Driver Code
    // length od string is 28
    $str = "a_simple_divide_string_quest";
 
    // Print 4 equal parts of the string
    divideString($str, 2);
 
// This code is contributed by ajit.

?>