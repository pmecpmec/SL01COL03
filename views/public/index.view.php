<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="./styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mijn Pagina</title>
</head>

<body>
  <?php
  include 'functions/tools.php';

  date_default_timezone_set(timezoneId: 'Europe/Amsterdam');

  changeColor();
  $teams = ["coat", "psr", "keep"];
  $PLAYERS = ["stephan", "arie", "jan"];

  $person = false;

  characterCounterType($person);


  // Schrijf een functie waarbij een random waarde toont vanuit de array



  echo randomValue($teams);
  ?>

</body>

</html>