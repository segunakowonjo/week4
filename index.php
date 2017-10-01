<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br>";
$date = str_replace("-", "/", $date);
echo $date;
echo "<br>";
if (strcmp($date, $tar)>0) {echo"the future";}
elseif (strcmp($date, $tar)<0) {echo "the past";}
else {echo "Oop";}
echo "<br>";
echo strpos($date, "/")." ".strrpos($date, "/");
echo "<br><br>";
echo str_word_count($date);
echo "<br><br>";
echo strlen($date);
echo "<br><br>";
echo ord($date);
echo "<br><br>";
echo substr($date, -2);
echo "<br><br>";
$date = explode("/",$date);
foreach ($date as $value) {echo $value." ";
}
?>