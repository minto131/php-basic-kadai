<!DOCTYPE>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>
<p>
<?php
//生徒10人分の点数を入れる変数を作成し、それぞれの変数に以下の点数を代入する
$score1 = 80;
$score2 = 60;
$score3 = 55;
$score4 = 40;
$score5 = 100;
$score6 = 25;
$score7 = 80;
$score8 = 95;
$score9 = 30;
$score10 = 60;

//合計点と平均点を算出する
$number = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

echo $number / 10;


?>
</p>
</body>