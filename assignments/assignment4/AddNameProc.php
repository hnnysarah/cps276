<?php 
class AddNamesProc {

   public function addClearNames() {
    if ($_POST['names'] == "") {
        return "";
    } else if (isset($_POST['submitName'])) {
            $names = $_POST['names'];
            $arr = explode(" ", $names);
            $newName = $arr[1] . ", " . $arr[0];
            $namelist = explode("\n", $_POST['namelist']);
            array_push($namelist, $newName);
            sort($namelist);
            
            $output = implode("\n", $namelist);
            return $output;                
     }  else if (isset($_POST['submitClear'])) {
        return " ";
        }
    }

}

?>