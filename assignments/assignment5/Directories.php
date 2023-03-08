<?php 
class Directories {

public function createDirectory() {

  
    if(isset($_POST['submitButton'])) {
        $names = $_POST['names'];
        $content = $_POST['fileContents'];
    }

    $path = "./directories/".$names."/readme.txt";
    $directory = "./directories/".$names."/";
    
    if(!file_exists($directory)) {
        $success = mkdir("directories/".$names, 0777, true);
        chmod("directories/".$names, 0777);

        $file = fopen($path, "w") or die("Cannot Open File");
        fwrite($file,$content);
        fclose($file);

        return " File and directory were created <br><a href='$path'>Path were file is located</a><br> ";
    } else {
        return "A directory already exits with that name.";
    }
    

}
}
?>