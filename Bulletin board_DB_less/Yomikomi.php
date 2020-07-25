<?php
$fp = @fopen(./users.data, 'r');
$i = 0;
while ($line = fgets($fp)) {
　　　　
　　　　$lines_array[$i] = explode(',',$line);
　　　
　　　　echo $lines_array[$i][0];
　　　
　　　　echo $lines_array[$i][1];
　　　　$i++;
}
?>

