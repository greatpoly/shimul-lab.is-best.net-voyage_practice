<?php

$a = 1;
$b = &$a;
$b = 2;
echo $a;

foreach (range('a', 'h') as $char) {

	echo $char;
	if ($char != 'h')
	{
		echo  "-";
	}
}

$num = '123456';
echo strrev($num);

$arr = array('apple', 'potato', 'banana', 'onion', 'mango', 'cucumber', 'raspberry', 'spinach');
for ($i = 1; $i < count($arr); $i=$i+2)
{
	echo $arr[$i] . ' ';
}

$str = "1,2,3,4,5,6,7";
echo $sum = array_sum( explode( ',', $str ) );
