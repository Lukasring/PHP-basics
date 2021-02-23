<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/styles/styles.css">
  <title>Lets try PHP</title>
  <script src="./src/js/app.js" defer></script>
</head>

<body>
  <main>
    <h2>KMI skaičiuoklė</h2>
    <form action="" method="POST">
      <label for="weight">Jūsų svoris (kg)</label>
      <input id="weight" name="weight" type="number">
      <label for="height">Jūsų ūgis (cm)</label>
      <input id="height" name="height" type="number">
      <button type="submit">Skaičiuoti</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $height = $_POST['height'];
      $weight = $_POST['weight'];
      if (!isset($height) || !isset($weight) || empty($weight) || empty($height)) {
        print("<p class=\"error\">Įrašykite reikšmes</p>");
      } elseif ($height < 0 || $weight < 0) {
        print("<p class=\"error\">Vertės turi būti daugiau už 0!</p>");
      } else {
        $height = $height / 100;
        $bmi = round($weight / ($height * $height), 1);
        print("<p class=\"bmi\">Jūsų KMI: <span>{$bmi}</span></p>");
      }
    }
    ?>

    <img src="./src/assets/img/KMI.jpg" />
  </main>
</body>

</html>