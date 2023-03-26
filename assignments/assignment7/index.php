<?php
require_once "fileUploadProc.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <form method="POST" action="#" enctype="multipart/form-data">
    <div class="container">
    <h1>File Upload</h1>
    <div class="mb-3">
    <a href="file_lists.php">Show File List</a>
</div>
<div class="mb-3">
<?php echo $output; ?>
</div>
<div class="mb-3">
    <label for="name" class="form-label">File Name</label>
    <input type="text" class="form-control" id="name" name="name">
</div>
<div class="mb-3">
    <label for="file"><input type="file" id="file" name="file"></label>
</div>
<div class="mb-3">
    <input class="btn btn-primary" type="submit" name="upload" value="Upload File">
</div>
</form>
</div>
  </body>
</html>