<?php
//此处内存超出很多，90+m
$file = "databak";
$fp = fopen($file, "r");
$str  = '';
while(!feof($fp))
{
	$str = fgets($fp);
	$arrFile[hash("md5",$str,true)] = $str;
}
foreach ($arrFile as $key => $value) {
	file_put_contents("databak3", $value,FILE_APPEND|LOCK_EX);
}
        
fclose($fp);
echo "\n";
$memoryLevel = memory_get_peak_usage(false);
echo ($memoryLevel/1024/1024)."m\n";


// $arrFile = file_get_contents($file);
// echo $arrFile;
// $fp = fopen($file, "r");
// $str  = '';
// while(!feof($fp))
// {
// 	$str = fgets($fp);
// 	// $arr[hash("adler32",$str)] = $str;
// 	$arr[$str] = $str;
// 	// if(strlen($str)>=13)
// 	// {
// 		// file_put_contents("databak", $str,FILE_APPEND|LOCK_EX);
// 	// }
// }

// fclose($fp);
// // echo "<pre>";
// // var_dump($arr);
// foreach ($arr as $key => $value) {
// 	file_put_contents("databak2", $value,FILE_APPEND|LOCK_EX);
// }
// echo "<pre>";
// // var_dump($arr);
// $memoryLevel = memory_get_peak_usage(true);
// echo ($memoryLevel/1024/1024)."m\n";

