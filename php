<?php//課題

//課題1)

$a=3
$b=7
 echo $a+$b;


//課題2)

$array_month=[1月,2月,3月,4月,5月,6月,7月,8月,9月,10月,11月,12月]
echo$array[9];


//課題3)
$hello="Hello,"
$name="赤石美波"
$world="'sWorld!'"
echo $hello.$name.$world;

//課題4)
$teach_boost = 'tech';
$teach_boost .= 'boost';
echo $tech_boost;

//課題5)

【1つめのバグ】
"2月の後が「、」になっている▶︎「,」に直す必要がある"

【2つめのバグ】
$2018_calendar ▶︎数字から始まるのはNG。
$carender_2018ならOK。

【3つめのバグ】

$2018_calendar = {　は、{ではなく[にする必要がある（カッコの種類が違う）


【4つめのバグ】

一番下の段が違う。
echo $2018_calendar[December];
▶︎これを
echo $2018_calendar["December"];
と修正すればOKだと思う。

課題//

?>
