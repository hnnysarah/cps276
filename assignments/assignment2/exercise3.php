<?php

$i = 1;
$j = 1;

//set variables
$rowCount = 15;
$cellCount = 5;


$rowNumb = $rowCount+1;
$cellNumb = $cellCount+1;

$table = "<table border='1'>";

while ($i < $rowNumb) {
    $table .= "<tr>";
    $j = 1;
    while ($j < $cellNumb) {
        $table .= "<td>Row $i cell $j</td>";
        $j++;
    }
    $i++;
    $table .= "</tr>";
}

$table .= "</table>";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercise3</title>
  </head>
  <body>

<?php echo $table ?>

  </body>
</html>