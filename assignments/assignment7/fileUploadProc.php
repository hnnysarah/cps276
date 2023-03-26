<?php 

$output ="";

if(isset($_POST["upload"])){
    $output .= addFile();
}

function addFile() {
    require_once "classes/Pdo_methods.php";

    if ($_FILES["file"]["size"] >= 100000) //die("File is too big"); 
    {
        return "File is too big";
    }
    if ($_FILES["file"]["type"] != "application/pdf") //die("File must be a pdf file");
    {
        return "File must be a pdf file";
    }

    move_uploaded_file($_FILES["file"]["tmp_name"], "file_lists/".$_FILES["file"]["name"]);

    $sql = "INSERT INTO file_lists (file_name, file_path) 
    VALUES (:fname, :fpath)";

    $pdo = new PdoMethods();
    $fileName = $_POST["name"];
    $databinding = [
        [":fname",$fileName,'str'], [":fpath","file_lists/".$_FILES["file"]["name"], 'str']
    ];

    if ($pdo->otherBinded($sql, $databinding) == "error") {
        return "Error uploading file.";
    } else {
        return "File had been added.";
    }
}
?>