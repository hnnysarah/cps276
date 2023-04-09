<?php
require_once 'classes/Date_time.php';
$dt = new Date_time();
$notes = $dt->checkSubmit();
?>

<!doctype html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <title>Display Notes</title>
 </head>
 <body>
    <div class="container">
 <h1>Display Notes</h1>
<a href="addNote.php">Add Note</a>
 <form method ="post" action="#">

  <div class="form-group">
    <label for="begDate" class="form-label">Beginning Date</label>
    <input type="date" class="form-control" id="begDate" name="begDate">
  </div>

  <div class="form-group">
  <label for="endDate" class="form-label">Ending Date</label>
  <input type="date" class="form-control" id="endDate" name="endDate">
</div>


<input type="submit" class="btn btn-primary" name="getNotes" value="Get Notes"/>
<div class="form-group">
  <?php echo $notes; ?>
</div>
</div>
 </body>
</html>
