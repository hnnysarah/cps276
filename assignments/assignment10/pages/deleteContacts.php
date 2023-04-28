<?php
function init(){

    require_once 'classes/Pdo_methods.php';
    session_start();
    if($_SESSION['access'] !== "accessGranted"){
        header('location: index.php');
      }
    if(isset($_POST['delete'])){
        if(isset($_POST['checkbox'])){
            $error = false;
            foreach($_POST['checkbox'] as $id){
                $pdo = new PdoMethods();

                $sql = "DELETE FROM contacts WHERE id=:id";
                
                $bindings = [
                    [':id', $id, 'int'],
                ];


                $result = $pdo->otherBinded($sql, $bindings);

                if($result === 'error'){
                    $error = true;
                    break;
                }
            }
        }
    }


    
    
    $output = "";
    
    $pdo = new PdoMethods();

    /* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
    $sql = "SELECT * FROM contacts";

    $records = $pdo->selectNotBinded($sql);

    if(count($records) === 0){
        $output = "
        <h1>Delete Contact(s)</h1>";
        return [$output,""];
    }
    else {
        $output = "
        <h1>Delete Contact(s)</h1>
        <form method='post' action='index.php?page=deleteContacts'>
        <input type='submit' class='btn btn-danger' name='delete' value='Delete'/><br><br><table class='table table-striped table-bordered'>
    <thead>
        <tr>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Phone</th>
        <th>Email</th>
        <th>DOB</th>
        <th>Contacts</th>
        <th>Age</th>
        <th>Delete</th>
        </tr>
    </thead><tbody>";

    foreach($records as $row){
        $output .= "<tr><td>{$row['name']}</td>
        <td>{$row['address']}</td>
        <td>{$row['city']}</td>
        <td>{$row['state']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['email']}</td>
        <td>{$row['dob']}</td>
        <td>{$row['contacts']}</td>
        <td>{$row['age']}</td>
        <td><input type='checkbox' name='checkbox[]' value='{$row['id']}' /></td></tr>";
    }

    $output .= "</tbody></table></form>";

    if(isset($error)){
        if($error){
            $msg = "<p>Error occured</p>";
        }
        else {
            $msg = "<p>Contact(s) deleted</p>";
        }
    }
    else {
        $msg="";
    }
    return [$msg, $output];
    }
}