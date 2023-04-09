<?php

require_once 'classes/Date_time.php';
$dt = new Date_time();
$output = $dt->checkSubmit();
?>

<!doctype html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <title>Add Note</title>
 </head>
 <body>
    <div class="container">
 <h1>Add Note</h1>
<a href="displayNote.php">Display Notes</a><br>
<p><?php echo $output ?></p>
 <form method ="post" action="#" >

  <div class="form-group">
    <label for="dateTime" class="form-label">Date and Time</label>
    <input type="datetime-local" class="form-control" id="dateTime" name="dateTime">
  </div>

  <div class="form-group">
  <label for="dateNote" class="form-label">Note</label>
 <textarea style="height: 500px;" class="form-control" id="dateNote" name="dateNote"></textarea>
</div>


<input type="submit" class="btn btn-primary" name="submitNote" value="Add Note"/>
</div>
 </body>
</html>
