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
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
 <title>Name Lists</title>
 </head>
 <body>
    <div class="container">
 <main class="container">
 <h1>Add Names</h1>
 <div class="form-group">
        <input type="addName" class="btn btn-success" name="submitName" id="submitName" value="Add Name" />
        <input type="clearName" class="btn btn-success" name="submitClear" id="submitClear" value="Clear Names" />
      </div>
 <form method ="post" action="#" class="row g-3">
  <div class="col-12">
    <label for="enternames" class="form-label">Enter Name</label>
    <input type="names" class="form-control" id="names">
  </div>
  <div class="col-12">
  <label for="output" class="form-label">List of Names</label>
 <textarea style="height: 500px;" class="form-control" id="namelist" name="namelist"> <?php echo $output ?> </textarea>
</div>
 </main>
 </body>
</form>
</div>
</html>