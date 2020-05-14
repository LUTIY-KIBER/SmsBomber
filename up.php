<?php
$smsham = file_get_contents("https://github.com/LUTIY-KIBER/SmsBomber/blob/master/smsbomber.py");
$file = fopen("smsham.py", "w");
fwrite($file, $smsham);
fclose($file); 
?>
