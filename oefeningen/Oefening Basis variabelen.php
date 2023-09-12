<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="eerste-pagina.css">
</head>
<body>


<?php

echo "Hello world!";

$naam = "Ana";
$geboortejaar = "1981";
$score = 8.5;

echo "<p>Hallo, $naam! Je bent geboren in $geboortejaar.</p>";

echo "<p>De score op jouw toets was $score.</p>";

$ingelogd = true;

if ($ingelogd == true) {
    $input = "Proficiat! Je bent ingelogd";
    }
    else { $input = "Hallo! Je moet nog inlogenn of registeren!";}

echo $input;

$leerlingen = ["Jan", "Karen", "Jos", "Maggy"];


$naam = 'John Doe';
$scores = [4, 6, 7, 4, 3, 8, 6, 9, 4, 10];

$aantal = count($scores);
$gemiddelde = array_sum($scores)/count($scores);
$max = max($scores);
$min = min($scores);
$string = implode(',' , $scores);

echo "<p>$aantal</p>";
echo "<p>$gemiddelde</p>";
echo "<p>$max</p>";
echo "<p>$min</p>";
echo "<p>$string</p>";

$voornaam = "John";
$achternaam = "Doe";
$score = 7;

echo "<p>Hallo, $voornaam $achternaam. Je hebt een score van {$score}/10.</p>";

$students = ["Jan", "Karen", "Jos", "Maggy"];
$points = [4, 8, 6, 10];

$films = [
    ['naam' => "Godfather 1",
     'score' => 8 ],
     ['naam' => "Godfather 2",
     'score' => 7 ],
     ['naam' => "Godfather 3",
     'score' => 5 ],
];


?>

<h1>Leerlingen</h1>
<ul>
    <?php foreach($leerlingen as $leerling): ?>
        <li><?php echo $leerling ?></li>
    <?php endforeach ?>
</ul>

<h1>Teller</h1>
<ul>
    <?php for($i=1; $i < 11; $i++): ?>
        <li><?php echo $i ?></li>
    <?php endfor ?>
</ul>

<h1>Students</h1>
<ul>
    <?php foreach($students as $key => $leerling): ?>
        <li><?php echo $leerling ?>: <?php echo $points[$key] ?>/10</li>
    <?php endforeach ?>
</ul>

<h1>Films</h1>
<ul>
    <?php foreach($films as $film): ?>
        <li><?php echo $film['naam'] ?> : <?php echo $film['score'] ?>/10</li>
    <?php endforeach ?>
</ul>


</div>

</body>
</html>
