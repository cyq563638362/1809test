<?php
$int = 200;
$num = $int + null;
echo $num, "<hr>";
$num2 = $int + 2e3;
echo $num2, "<hr>";
$num3 = $int+"1e3sss";
echo $num3, "<hr>";
$num4 = $int+'1e-3sss100'+true;
echo $num4, "<hr>";
$str  = '100kuaile';
$num5 = intval($str);
echo $num5;
