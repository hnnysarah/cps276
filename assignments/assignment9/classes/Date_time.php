<?php
require 'Pdo_methods.php';

class Date_time extends PdoMethods{

    public function checkSubmit(){

        if(isset($_POST['submitNote'])) {
            return $this->addNote();
        } elseif (isset($_POST['getNotes'])) {
            return $this->getNotes();
        }
    }

    public function addNote() {
        require_once "classes/Pdo_methods.php";
        $dateTime = strtotime($_POST['dateTime']);
        $dateNote = $_POST['dateNote'];
    
        $pdo = new PdoMethods();

        $sql = "INSERT INTO date_time (date_time, date_note) VALUES (:dateTime, :dateNote)";
        $databinding = [
                [':dateTime', $dateTime, 'int'],
                [':dateNote', $dateNote, 'str']
        ];

        $result = $pdo->otherBinded($sql, $databinding);

        if ($result === "error"){
            return "Unable to add notes";
        } else {
            return "Note has been added";
        }
    }

    public function getNotes() {
        require_once "classes/Pdo_methods.php";

        $startTime = strtotime($_POST['begDate']);
        $endTime = strtotime($_POST['endDate']);
        $pdo = new PdoMethods();
        $sql = "SELECT * FROM date_time where date_time BETWEEN :startTimeStamp AND :endTimeStamp ORDER BY date_time ASC";
        $databinding = [
            [':startTimeStamp', $startTime, 'int'],
            [':endTimeStamp', $endTime, 'int']

        ];
        $result = $pdo->selectBinded($sql,$databinding);

        if ($result) {
        $output = "<table class='table table-bordered table-striped'> <thead> <tr>";
		$output .= "<th>Date and Time</th> <th>Note</th> <tbody>";
		foreach ($result as $row)
        {
            $d = $row['date_time'];
            $ds = date("n\/d\/Y h:i a", $d );
			$output .= "<tr> <td> {$ds} </td>";
			$output .= "<td> {$row['date_note']} </td> </tr>";
		}	
		$output .= "</tbody></table>";
		return $output;
    } else {
        return "No notes found for the date range selected";
    }
	}      
    


}