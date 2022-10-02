<?php
date_default_timezone_set('Europe/Istanbul');
$sitemapdate = date('Y-m-d');
$datatime = new datetime($sitemapdate);
echo $datatime->format('c');
echo "<br>";
$date = new DateTime();
echo $date->format('Y-m-d\TH:i:sP');
echo "<br>";
echo $date->format('c');
?>