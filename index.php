<meta charset="utf-8">
<?php
$str="Таким образом укрепление и развитие структуры обеспечивает широкому кругу участие в формировании дальнейших направлений развития.";
$from="windows-1251";
$to="iso8859-5";
echo convert_cyr_string($str, $from, $to);
echo "</br>";
echo "</br>";
$number=66.6666;
echo sprintf("%01.1f<br>",$number);
echo "</br>";
echo "</br>";
$st="Таким образом укрепление и развитие структуры \n обеспечивает широкому кругу участие в формировании \n дальнейших направлений развития.";
$string=nl2br($st);
echo $string;
echo "</br>";
echo "</br>";
$stroka="Таким образом укрепление и развитие структуры обеспечивает широкому кругу участие в формировании дальнейших направлений развития.";
$wdth=20;
$break="<br>\n";
echo wordwrap($stroka,$wdth,$break);
echo "</br>";
echo "</br>";
$arr = array(
    "two" => "2",
    "three" => "3",
    "one" => "1",
);
print_r($arr);
echo "</br>";
asort($arr);
print_r($arr);
echo "</br>";
arsort($arr);
print_r($arr);
echo "</br>";
ksort($arr);
print_r($arr);
echo "</br>";
krsort($arr);
print_r($arr);
echo "</br>";
$array = array(
    "hop" => "15",
    "hey" => "10",
    "lalaley" => "5",
);
$bool=true;
print_r(array_reverse($array,$bool));
echo "</br>";
sort($array);
print_r($array);
echo "</br>";
rsort($array);
print_r($array);
echo "</br>";
shuffle($array);
print_r($array);
echo "</br>";
$mas = array(
    "velial" => "666",
    "lucifer" => "999",
    "baal" => "696",
);
print_r(array_flip($mas));
echo "</br>";
print_r(array_keys($mas));
echo "</br>";
print_r(array_values($mas));
echo "</br>";
print_r(array_merge($mas,$arr,$array));
?>