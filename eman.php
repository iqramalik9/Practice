<?php
echo "Working OK!<br>";
$value1=-2;
$value2=6;
$swap=0;
echo "VALUE BEFORE SWAP<br>";
print("Value 1 is: $value1<br>");
print("Value 2 is: $value2<br>");


if($value1 >0)
{
    echo "lets run the swap<br>";
    $swap = $value1;
$value1=$value2;
$value2=$swap;
echo "VALUE AFTER SWAP<br>";
print("Value 1 is: $value1<br>");
print("Value 2 is: $value2<br>");
}

elseif($value1<0)
{
    echo " wrong data";
}
else
{
    echo "Wrong input";
}
echo "<br>";
echo "For loop<br>";
for($month=0; $month<=12; $month++)
{
    echo "$month<br>";
}
echo "WHILE LOOP<br>";
$test=0;
while($test<10)
{
    echo "$test<br>";
    $test++;
    $test+=2;
}
//$mixed=array(12,"iqra",13,"eman");
$mixed[0]=12;
$mixed[1]="iqra";
$mixed[2]=13;
foreach($mixed as $print)
{
    echo "$print<br>";
}
?>