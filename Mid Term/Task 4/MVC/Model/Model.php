

<?php
//Code retreived from lecturer.
function readData(){
	$data = file_get_contents("../Data/Data.json");  
	$data = json_decode($data, true); 
	return $data;
}
?>