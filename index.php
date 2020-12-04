<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/bingo.php');

$bingo = new \MyApp\Bingo();
$nums = $bingo->create();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylesheet.css">
  <title>BINGO!</title>
</head>

<body>
  <div id="container">
    <table>
      <tr>
        <th>B</th>
        <th>I</th>
        <th>N</th>
        <th>G</th>
        <th>O</th>
        </th>
      </tr>
        <?php for ($i = 0; $i < 5; $i++) : ?>
          <tr>
          <?php for ($j = 0; $j < 5; $j++) : ?>
          <td><?= h($nums[$j][$i]); ?></td>
          <?php endfor; ?>
        <?php endfor; ?>
      </tr>
    </table>
  </div>
</body>

</html>