<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basis variabelen</title>
</head>
<body>
    <?php 
    
    $naam = "John Doe";
    $geboortejaar = 1985;
    $score = 8.5;
    
    ?>

    <p>Hallo, <mark><?php echo $naam ?></mark>! Je bent geboren in <mark><?php echo $geboortejaar ?></mark>.</p>
    <p>De score op jouw toets was "<mark><?php echo $score ?></mark>".</p>

</body>
</html>