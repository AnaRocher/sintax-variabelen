<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
</head>
<body>

<?php 

$leerlingen = ['Jan', 'Karen', 'Jos', 'Maggy'];
$scores = [4, 8, 6, 10];

$films = [
    [
        'naam' => "Godfather 1",
        'score' => 8
    ],
    [
        'naam' => "Godfather 2",
        'score' => 7
    ],
    [
        'naam' => "Godfather 3",
        'score' => 5
    ],
];

?>

<h1>Leerlingen</h1>
<ul>
    <?php foreach($leerlingen as $key => $leerling): ?>
        <li><?php echo $leerling ?>: <?php echo $scores[$key] ?>/10</li>
    <?php endforeach ?>
</ul>

<h1>Films</h1>
<ul>
    <?php foreach($films as $film): ?>
        <li><?php echo $film['naam'] ?> : <?php echo $film['score'] ?>/10</li>
    <?php endforeach ?>
</ul>

</body>
</html>