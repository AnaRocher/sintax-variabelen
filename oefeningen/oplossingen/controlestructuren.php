<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle structuren</title>
</head>
<body>
    <?php 
    
    $ingelogd = true; // of false
    
    ?>

    <?php if ($ingelogd): ?>
        <div>Proficiat! Je bent ingelogd!</div>
    <?php else: ?>
        <div>Hallo! Je moet nog inloggen of registreren!</div>
    <?php endif; ?>

</body>
</html>