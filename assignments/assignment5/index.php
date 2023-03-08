<?php
$output = "";
if(count($_POST) > 0){
    require_once 'Directories.php';
    $newDirectory = new Directories();
    $output = $newDirectory->createDirectory();
   }
?>

<!doctype html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <title>File and Directory</title>
 </head>
 <body>
    <div class="container">
 <h1>File and Directory Assignment</h1>
 <p> Enter a folder name and the content of a file. Folder names should contain alpha numeric characters only.</p>
 <p><?php echo $output ?> </p>
 <form method ="post" action="index.php">
  <div class="form-group">
    <label for="names" class="form-label">Folder Name</label>
    <input type="text" class="form-control" id="names" name="names">
  </div>

  <div class="form-group">
  <label for="fileContents" class="form-label">File Content</label>
 <textarea style="height: 150px;" class="form-control" id="fileContents" name="fileContents"></textarea>
</div>
<button type="submit" class="btn btn-primary mb-3" name="submitButton">Submit</button>
 </body>
</form>
</div>
</html>