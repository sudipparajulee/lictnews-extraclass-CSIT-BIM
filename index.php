<?php
$a = 2;
$b = 3;
$sum = $a+$b;
echo "The sum is $sum";
echo 'The sum is $sum';
echo "<br>";
$fname = "Ram";
$lname = "Sharma";
$fullname = $fname . ' ' . $lname;
echo "Hello, $fullname";
function myfunction($x)
{
    echo "hello, $x from function";
}
 
myfunction('ram');

$fruits = array('Apple','Banana','Orange');
$classes = array('CSIT'=>'48','BCA' => '30', 'BIM' => '12');

echo "<br>";
echo $classes['CSIT'];
rsort($fruits);
foreach($fruits as $fruit)
{
    echo "$fruit<br>";
}

echo "<br>";
foreach($classes as $k=>$v)
{
    echo "Faculty $k has $v students <br>";
}

?>