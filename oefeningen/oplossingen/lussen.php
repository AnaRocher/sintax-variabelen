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

</body>
</html>