<?php

// $a = str_split(857916401007);

// $fp = fopen("databak", "r");
// while(!feof($fp))
// {
// 	$str = fgets($fp);
// 	if(doumode(intval($str))==1)
// 	{
// 		echo $str."\n";
// 		break;
// 	}
	
// }
// fclose($fp);
echo doumode("691331000016");
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


// echo ten(14);
echo "\n";
$memoryLevel = memory_get_peak_usage(false);
echo ($memoryLevel/1024/1024)."m\n";











