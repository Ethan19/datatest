<?php
//此处内存超出很多，90+m
$file = "1.log";
$fp = fopen($file, "r");
$str  = '';
while(!feof($fp))
{
	$str = fgets($fp);
	$arrFile[hash("md5",$str,true)] = $str;
}
foreach ($arrFile as $key => $value) {
	file_put_contents("2.log", $value,FILE_APPEND|LOCK_EX);
}
        
fclose($fp);
echo "\n";
$memoryLevel = memory_get_peak_usage(false);
echo ($memoryLevel/1024)."KB\n";