<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Film website</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 

//$stars = [1, 2, 3, 4, 5];
//$maxstars = 5;
//$scores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//$maxscores = 10;

$titel = 'Spider-man: Homecoming';

$users = ["userone","usertwo"]; 
$userspoints = [6,6];

$average = array_sum($userspoints)/count($userspoints);

if ($average >= 8) {
    $average = true;
  }

function star_rating($average){

    if ($average = 2){
      return '';}   
      if ($average = 4){
      return '';}   
    if ($average = 6){
      return '';}    
    };

$taglist = ['marvel','spider-man','comics'];
$directors = [" Jon Walts"," Jonathan Goldstein"];
$directorsnaam = implode(",",$directors);

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

$email = "blabla@test.com"; 

?>

  <div class="page-intro">
    <div class="container">
      <p>Movies</p>
    </div>
  </div>

  <main>
    <header class="main-header">
      <div class="container clearfix">
        <img class="movie-poster" src="images/poster.jpg" alt="Spider-man: Homecoming" />
        
        <!-- user score 6/10 -> omzetten naar een cijfer met max 5 sterren en het aantal afdrukken -->
        <div class="score">
          <div class="star"><?php echo star_rating(2); ?></div>
          <div class="star"><?php echo star_rating(4); ?></div>
          <div class="star"><?php echo star_rating(6); ?></div>
        </div>
        
        <h1 class="movie-title"><?php echo $titel ?></h1>
        <p class="movie-synopsis">Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.</p>
        
        <div class="tag-list">
          <a class="tag" href="#"><?php echo $taglist[0] ?></a> 
          <a class="tag" href="#"><?php echo $taglist[1] ?></a>
          <a class="tag" href="#"><?php echo $taglist[2] ?></a>
        </div>
      </div>
    </header>

    <div class="main-content">
      <div class="container clearfix">
        <div class="content">

          <!-- Als de user score hoger is dan 8/10 -->
          <div class="recommended">
          <?php if ($average >= 8) {
           echo "This movie is highly recommended!";} ?>
          </div>
                  
          <!--  -->
          
          <p>In the aftermath of Captain America: Civil War (2016), the fifteen-year-old sophomore and Tony Stark's protégé, Peter Parker, finds himself back to his hometown of Queens, New York, trying to juggle high school and his super-hero alter-ego. On pins and needles, waiting for his mentor to give him a chance to prove his mettle and become an official Avenger, instead, Stark, intent on protecting him, keeps Peter on a short leash, fearful that, one of these days, the boy may bite off more than he can chew. And then, the Vulture, a winged super-criminal brandishing advanced Chitauri weaponry, emerges, and of course, Parker sees his arrival as a golden opportunity to demonstrate that he has what it takes to be part of the Earth's mightiest team of super-heroes.</p>
          <p>Is Spider-Man ready to be more than the neighbourhood's friendly, web-slinging defender?</p>

          <div class="directors">            
            <p><b>Directors:</b><?php echo $directorsnaam?></p>
          </div>

          <div class="actors">
            <p><b>Actors:</b></p>
              <?php foreach($actors as $actor): ?>            
            <table class="actors-table">
              <tr>
                <td class="actors-table-actor"><?php echo $actor['name'] ?></td>
                <td class="actors-table-character"><?php echo $actor['character'] ?></td>
              </tr>
            </table>
              <?php endforeach ?>
          </div>

          <div class="screenshots">
            <img src="images/screenshot1.jpg" />
            <img src="images/screenshot2.jpg" />
            <img src="images/screenshot3.jpg" />
            <img src="images/screenshot4.jpg" />
          </div>
        </div>

        <aside class="reviews">
          <h1>Reviews</h1>

          <!-- Gemiddelde van alle scores -->
          <p>User score: <b><?php echo $userspoints[0]?>/10</b></p>

          <article class="review">
            <header class="review-header"> 
              <h1 class="review-title">Lorem, ipsum.</h1>
              <p class="review-author">Geschreven door <a href="mailto: <?php echo $email; ?>">blempens</a></p>
              <p class="review-date">Gepubliceerd op <time>21-11-2021</time></p>
            </header>
            <div class="review-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, culpa cum. Et tempora facilis necessitatibus quaerat nobis iste sint vitae.</p>
            </div>
            <div class="review-score">
            <?php echo $userspoints[1]?>/10
            </div>
          </article>
          <article class="review">
            <header class="review-header"> 
              <h1 class="review-title">Lorem, ipsum.</h1>
              <p class="review-author">Geschreven door <a href="mailto: <?php echo $email; ?>">blempens</a></p>
              <p class="review-date">Gepubliceerd op <time>21-11-2021</time></p>
            </header>
            <div class="review-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, culpa cum. Et tempora facilis necessitatibus quaerat nobis iste sint vitae.</p>
            </div>
            <div class="review-score">
              6/10
            </div>
          </article>
        </aside>
      </div>
    </div>
  </main>

  <footer class="main-footer">
    Movies - 2021 &copy; CVO De Verdieping
  </footer>
  
</body>
</html>