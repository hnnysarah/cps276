<?php

function init(){
    session_start();
if($_SESSION['access'] !== "accessGranted"){
  header('Location: Index.php?page=welcome');
}
    return ["<h1>Welcome</h1>", "Welcome "];
}
?>