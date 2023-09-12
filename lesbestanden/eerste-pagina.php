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

    //STRING ""
    $voornaam = "John"; //não pode começar com ponto underscore letra maiuscula ou ter espaços
    $achternaam = "Doe";
    $volledige_naam_1 = "$voornaam $achternaam"; //double quotes para assumir variáveis
    $volledige_naam_2 = '$voornaam $achternaam'; //sigle quote assume como string e vai escrever exactamente como está
    $tag1 = "<p class=\"naam\">$voornaam</p>"; //para inserir caracteres no text utilizar \ 
    $tag2 = '<p class="naam">' . $voornaam . '</p>';

    $gewicht = 80;
    $gewicht_zin = "Je weegt $gewicht" . "kg!"; //outras formas de escrever coisas separadas
    $gewicht_zin = "Je weegt {$gewicht}kg!"; 

    // + - * /  % () para operaçoes matemáticas

    //INTEGER nr
    $geboortjaar = 1985;
    $leeftijd = date("Y") - $geboortjaar;

    $teller = 0;
    $teller = $teller + 3;
    $teller += 3; //soma 3 ao valor
    $teller++;
    $teller--;

    $voornaam .= $achternaam;
    $voornaam = $voornaam . $achternaam;
  
    //FLOAT decimais
    $score = 8.5; 

    //BOOLEAN true/false
    $ingelogd = true; //false 0 1

    //ARRAYS - [] verzamlingen

    $studenten = ['nico', 'ece', 'ana', 'sandro', 'elien', 'cedric', 'savanah', 'jasmina', 'wilco', 'joris', 'shez'];

    echo $studenten[2]; //se queremos qpresentar apenas a Ana, [2] uma vez que começa no 0

    $nico = [
        'haarkleur' => 'bruin',
        'oogkleur' => 'bruin',
        'leslocatie' => 'heusden',
        'woonplaats' => 'hasselt',
        'telefoonsnummer' => [
            'gsm' => 2545685412,
            'huis' => 545454545453
        ]
        ]; //podem ser criadas Arrays dentro de Arrays para definir novos elementos

    echo $nico['oogkleur']; //echo para apresentar os valores que queremos saber ou ver
    echo $nico['telefoonsnummer']['gsm'];

    //Controle structuren

    /*Com estruturas de controle, você pode ajustar o fluxo da sua página. Deseja mostrar ou ocultar um pedaço de HTML com base no valor de uma variável? Você quer verificar se uma determinada ação foi bem-sucedida? Você pode conseguir isso com estruturas de <controle class=""></controle>*/

    $a = 1;
    $b = "1";

    if ($a == $b and ($a > $b or $b < $a)) {
        echo "A is gelijk aan B";
    } else {
        echo "A is niet gelijk aan B";
    }

    $ingelogd = true;

    //“Foreach” structuur

    $reviews = [
        [ 
        'score' => 6,
        'naam' => 'nico'
        ],
        [
        'score' => 4,
        'naam' => 'ece'
        ],
        [
        'score' => 7, //key=>value
        'naam' => 'ana'
        ]
        ];

    ?>

    <div class="reviews-sectie">
        <h1>Reviews</h1>
    
    <div class="reviews">
        <?php foreach($reviews as $review): ?>
        <div class="review">
            <span class="review-score">
                <?php echo $review['score'] ?>
            </span>
            <span class="review-naam">
                <?php echo $review['naam'] ?>
            </span>
        </div>
        <?php endforeach ?>
    </div>
    </div>
    
    <div class="container">
        <h1>Hi!</h1>
        <?php echo $tag1 ?>
        <p>Hi, I'm <?php echo $voornaam ." ". $achternaam; ?>. Welcome on my website.</p>
        
        <?php if ($ingelogd) : ?>
        <div class="actions">
            <a href="#" class="edit">Edit</a>
            <a href="#" class="delete">Delete</a>
        </div>

     <!--Combineren met HTML en alternatieve syntax-->
   

    <?php else : ?>
        <div class="login-block">
            <a href="#" class="login">Login</a>
        </div>
    <?php endif ?>
        
        <footer>
            Copyright <span class="copyright-name"><?php echo $voornaam ." ". $achternaam; ?></span> - <?php echo date("D d M Y"); ?>
        </footer>
    </div>
</body>
</html>

<!-- Variáveis ** para criar variaveis é obrigatório o uso de $! as varáveis sao sensiveis a maiusculas e minusculas.
    no final da ordem ou acçao é obrigatório o uso de ; a nao ser a ultima ordem antes de ?> (o fecho da tag)

    Imprimir um resultado na pagina ** echo seguido da $variável. Podemos chamar várias variáveis com . entre elas 
    mas para que existam espaços usar entre os . " ". 

    < ?php echo date("D d M Y"); ?> ** lê a data actual do server, a diferença nas letras maiusculas ou minusculas 
    tem a ver com o resultado que vai mostrar, por ex Y mostra ano completo e y mostra 22

    Para validar o código html no validator após incluir PHP, ir a pagina e fazer inspect, copiar o código html 
    e validar assim.-->