<?php
//检测出最长没有重复字符的字符串
//
$a = "abcekghijkkkkkkabcdefghijklmn";
$new = array();
$result = checkLength(str_split($a),$new,0);
echo count($result);
/**
 * [checkLength 检测出最长没有重复字符的字符串]
 * @Auth     Ethan
 * @DateTime 2017-08-10
 * @param    [type]     $b   [array]
 * @param    [type]     $new [array]
 * @param    integer    $j   [int]
 * @return   [type]          [array]
 */
function checkLength($b,$new,$j = 0)
{
	$j++;
    $tmp = array();
    for ($i=0; $i <count($b) ; $i++) { 
        if(in_array($b[$i], $tmp))//字符串如果存在数据组中
        {
        	$key = array_search($b[$i],$tmp);
            $new[$j]= $tmp;
            $tmp = array();
            $b = array_slice($b,$key+1);//重新定义总数组数据
            return checkLength($b,$new,$j);
            break;     
        }
        else
        {
            $tmp[] = $b[$i];
            if($i+1 == count($b)){
            	$new[$j] = $tmp;
            }
                    
        }
    }
    return max($new);
}