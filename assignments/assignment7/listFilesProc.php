<?php 
require_once "classes/Pdo_methods.php";

$pdo = new PdoMethods();
$sql = "SELECT * FROM file_lists ORDER BY file_name ASC";

$lists = $pdo->selectNotBinded($sql);
$output = "<ul>";
foreach ($lists as $list) {
    $output .= '<li><a target="_blank" href='.$list["file_path"].'>'.$list["file_name"].'</a></li>';
}
$output .= '</ul>';
?>
