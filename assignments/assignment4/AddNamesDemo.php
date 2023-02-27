<?php
if(count($_POST) > 0){
    require_once 'AddNameProc.php';
    $addName = new AddNamesProc();
    $output = $addName->addClearNames();
   }
?>

<!doctype html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <title>Name Lists</title>
 </head>
 <body>
    <div class="container">
 <h1>Add Names</h1>

 <form method ="post" action="AddNamesDemo.php">

        <input type="submit" class="btn btn-success" name="submitName" value="Add Name" />
        <input type="submit" class="btn btn-success" name="submitClear" value="Clear Names" />

  <div class="form-group">
    <label for="names" class="form-label">Enter Name</label>
    <input type="text" class="form-control" id="names" name="names">
  </div>

  <div class="form-group">
  <label for="namelist" class="form-label">List of Names</label>
 <textarea style="height: 500px;" class="form-control" id="namelist" name="namelist"> <?php echo $output ?> </textarea>
</div>

 </body>
</form>
</div>
</html>