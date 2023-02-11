<?php

$i = 1;
$j = 1;
$firstVal = 4;
$secondVal = 5;
$firstNumb = $firstVal+1;
$secondNumb = $secondVal+1;

$list = "<ul>";

while ($i < $firstNumb) {
    $list .= "<li>$i";
    $j = 1;
    while ($j < $secondNumb) {
        $list .= "<ul><li>$j</li></ul>";
        $j++;
    }
    $i++;
    $list .= "</li>";
}

$list .= "</ul>";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
  </head>
  <body>

  <?php echo $list ?>

  </body>
</html>