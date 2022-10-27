
<?php 
//Code retrived from lecturer.

include '../Model/Model.php';

function userdetail($details)
{
	$alldetails = readData();
	foreach($alldetails as $row)
	{
		if($row['username'] == $details)
		{
			$ndetails = [
				'username' => $row['username'],
				'email'    => $row['email'],
				'gender'   => $row['gender'],
				'dob'      => $row['dob'],
			];
			return $ndetails;
		}
	}
}

?>