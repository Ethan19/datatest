<?php
// $max = pow(10,12)-1;
// $min = pow(10,11);
$max = 99;
$min = 10;
// if(!file_exists("test2.log"))
// {
// 	for ($i=$min; $i <=$max ; $i++) { 
// 		// file_put_contents("2tmp.log", "0\n",FILE_APPEND|LOCK_EX);
// 		file_put_contents("test2.log", "0\n",FILE_APPEND|LOCK_EX);
// 	}
// }

// $tmp = fopen("test2.log", "r+");
$fp = fopen("test1.log", "r+");
// $a = fseek($tmp, 1, SEEK_CUR);
// echo "<pre>";
// var_dump($a);
// die;

while (!feof($fp)) 
{
	$fpstr = fgets($fp);
	echo $fpstr."\n";
	$i = 1;
	while (!feof($tmp)) {
		// echo $fpstr;die;
		$tmpstr = fgets($tmp);
		// echo $tmpstr;die;
		if($i==$fpstr)
		{
			fseek($fp, 2, SEEK_CUR); 
			fwrite($fp, "#\n"); 
			// echo ftell($tmp);
			// fseek($tmp, ftell($tmp));
			// echo "\n";
			// echo $i;
			// $a = fwrite($tmp, 1);	
			// fclose($tmp);
			// echo "<pre>";
			// var_dump($a);
			// die;
			        
		}
		$i++;
	}
}
fclose($fp);
fclose($tmp);
// $fp = fopen("log", "r");
// while(!feof($fp))
// {
// 	// echo ftell($fp);
// 	fgets($fp);
// 	echo ftell($fp);
// 	echo "\n";
// }
// $data = fgets($fp, 12);

// where are we ?
// echo ftell($fp); // 11

// fclose($fp);
echo "\n";
$memoryLevel = memory_get_peak_usage(false);
echo ($memoryLevel/1024/1024)."m\n";