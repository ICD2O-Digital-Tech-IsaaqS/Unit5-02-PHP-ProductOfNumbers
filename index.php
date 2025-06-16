<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="Number Addition, with PHP">
  <meta name="keywords" content="Immaculata, ICD2O">
  <meta name="author" content="Isaaq Simon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io (23)/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (23)/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (23)/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io (23)/site.webmanifest">
  <title>Number Addition</title>
  <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
  <h2>Multiply Using Addition (PHP)</h2>

  <form method="post">
    <label for="num1">Enter first positive whole number:</label><br>
    <input type="number" name="num1" id="num1"><br><br>

    <label for="num2">Enter second positive whole number:</label><br>
    <input type="number" name="num2" id="num2"><br><br>

    <input type="submit" value="Calculate Product">
  </form>

  <div class="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];

      if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Please enter numbers only.";
      } elseif (intval($num1) != $num1 || intval($num2) != $num2) {
        echo "Please only enter whole numbers.";
      } elseif ($num1 <= 0 || $num2 <= 0) {
        echo "Please only enter positive numbers.";
      } else {
        $n1 = intval($num1);
        $n2 = intval($num2);
        $sum = 0;
        $parts = [];

        for ($i = 0; $i < $n2; $i++) {
          $sum += $n1;
          $parts[] = $n1;
        }

        echo implode(" + ", $parts) . " = " . $sum;
      }
    }
    ?>
  </div>
</body>
</html>