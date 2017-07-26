<?php
$file = "2.log";
$fp = fopen($file, "r");
$str  = '';
while(!feof($fp))
{
	$str = fgets($fp);
	if(intval(doumode(intval($str))) == 1)
	{
		file_put_contents("3.log", $str,FILE_APPEND|LOCK_EX);
	}
}
fclose($fp);
// echo doumode(890872988337);
//双模
function doumode($param)
{
	$source = str_split($param);
	$sum = 0;
	for ($i=count($source)-1; $i >=0 ; $i--) { 
		if($i == count($source)-1)
		{
			$sum = eleven((ten(10+$source[$i])*2));
		}
		else
		{
			$sum = eleven(ten($sum+$source[$i])*2);
		}
		// echo $sum."\n";
	}
	return ten($sum);
}

//num 余10，如果大于10则为返回余数，否则返回10
function ten($num)
{
	return $num%10>0?$num%10:10;
}
//余11
function eleven($num)
{
	return $num%11;
}

echo "\n";
$memoryLevel = memory_get_peak_usage(false);
echo ($memoryLevel/1024)."KB\n";











