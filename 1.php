<?php
$file = "data";
$fp = fopen($file, "r");
$str  = '';
while(!feof($fp))
{
	$str = fgets($fp);
	if(strlen($str)>=13)
	{
		file_put_contents("databak", $str,FILE_APPEND|LOCK_EX);
	}
}

fclose($fp);
$memoryLevel = memory_get_peak_usage(false);
echo ($memoryLevel/1024/1024)."m\n";
// echo "<br/>";
// var_dump($res/1024);
// die;
        



