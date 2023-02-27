<?php 
class AddNameProc {
    public $output;

   public function addClearNames() {
        if (isset($_POST['submitName'])) {
        return $output = self::addName();       
    } else if (isset($_POST['submitClear'])) {
        return $output = "";
    }
}

public function addName() {
    $namesToArr = [];
    $names = $_POST['names'];
    $namesToArr = explode(" ", $names);
    $arrToString = $namesToArr[1] . ", " . $namesToArr[0];

    if ($_POST['namelist'] !== "") {
        $namesToArr = explode("\n", $_POST['namelist']);
        array_push($namesToArr, $arrToString);
        return implode("\n", $namesToArr);
    } else {
        return $namesToArr . "\n";
    }
}

}
?>