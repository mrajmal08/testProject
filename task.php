Question 1.

<?php
function json_message($json_string)
{
$json[] = $json_string;
foreach ($json as $string)
{
echo 'Decoding: ' . $string."\n";
json_decode($string);

switch (json_last_error())
{
case JSON_ERROR_NONE:
echo ' - No errors'."\n";
break;
case JSON_ERROR_DEPTH:
echo ' - Maximum stack depth exceeded'."\n";
break;
case JSON_ERROR_STATE_MISMATCH:
echo ' - Underflow or the modes mismatch'."\n";
break;
case JSON_ERROR_CTRL_CHAR:
echo ' - Unexpected control character found'."\n";
break;
case JSON_ERROR_SYNTAX:
echo ' - Syntax error, malformed JSON'."\n";
break;
case JSON_ERROR_UTF8:
echo ' - Malformed UTF-8 characters, possibly incorrectly encoded'."\n";
break;
default:
echo ' - Unknown error'."\n";
break;
}
}
}
json_message('{"color1": "Red Color"}');
?>


Question 2.

<?php
$memory_size = memory_get_usage();
$memory_unit = array('Bytes','KB','MB','GB','TB','PB');
echo 'Used Memory : '.round($memory_size/pow(1024,($x=floor(log($memory_size,1024)))),2).' '.$memory_unit[$x]."\n";
?>

Question 3.

<?php

 function insertion_Sort($my_array)
{
	for($i=0;$i<count($my_array);$i++){
		$val = $my_array[$i];
		$j = $i-1;
		while($j>=0 && $my_array[$j] > $val){
			$my_array[$j+1] = $my_array[$j];
			$j--;
		}
		$my_array[$j+1] = $val;
	}
return $my_array;
}
$test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array :\n";
print_r(insertion_Sort($test_array));
?>

Question 4.

<?php
    $testString = '%!123,34.00A';
    echo preg_replace('/[^0-9,.]/', '', $testString);
?>


