<?php 

$titel = "Herhalingspagina";
$gebruikers = [
    [
        'naam' => 'Bert',
        'vak' => "PHP",
        'image' => 'tijger.webp'
    ],
    [
        'naam' => 'Stef',
        'vak' => "HTML"
    ],
    [
        'naam' => 'Danny',
        'vak' => "Javascript"
    ]
];
$ingelogd = false;

$naam = "Gast";
if ($ingelogd) {
    $naam = "Bert";
}


$actors = [
    [
      'name' => 'Tom Holland',
      'character' => 'Peter Parker'
    ],
    [
      'name' => 'Michael Keating',
      'character' => 'Adrian Toomes' 
    ],
    [
      'name' => 'Robert Downey Jr.',
      'character' => 'Tony Stark' 
    ],
    [
      'name' => 'Marisa Tomei',
      'character' => 'May Parker' 
    ],
  ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titel ?></title>
</head>
<body>

<h1><?php echo $titel ?></h1>
<p>Hallo, <?php echo $naam ?></p>
<nav>
    <a href="index.php">Home</a>
    <?php if ($ingelogd): ?>
        <a href="admin.php">Admin (<?php echo $naam ?>)</a>
        <a href="add.php">Add item</a>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    <?php endif ?>
</nav>

<div>
    <h2>Gebruikers</h2>

    <div>
        <?php foreach($gebruikers as $gebruiker): ?>
            <div>
                <h3><?php echo strtoupper($gebruiker['naam']) ?></h3>
                <p><b><?php echo $gebruiker['naam'] ?></b> geeft het vak <b><?php echo $gebruiker['vak'] ?></b>.</p>
                <img src="images/<?php echo $gebruiker['image']?>" alt="<?php echo $gebruiker['naam'] ?>">
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class="actors">
    <p><b>Actors:</b></p>
        <?php foreach($actors as $actor): ?>
            
            <table class="actors-table">
              <tr>
                <td class="actors-table-actor"><?php echo $actor['name'] ?></td>
                <td class="actors-table-character"><?php echo $actor['character'] ?></td>
              </tr>
              <!---<tr>
                <td class="actors-table-actor">Michael Keating</td>
                <td class="actors-table-character">Adrian Toomes</td>
              </tr>
              <tr>
                <td class="actors-table-actor">Robert Downey Jr.</td>
                <td class="actors-table-character">Tony Stark</td>
              </tr>
              <tr>
                <td class="actors-table-actor">Marisa Tomei</td>
                <td class="actors-table-character">May Parker</td>
              </tr> ---->
            </table>
        <?php endforeach ?>
</div>


<footer>
    Copyright <?php echo date('Y') ?>
</footer>
    
</body>
</html>