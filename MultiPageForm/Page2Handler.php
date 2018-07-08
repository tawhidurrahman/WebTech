<?php
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$_SESSION['officeno'] = $_POST['officeno'];
		$_SESSION['residenceno'] = $_POST['residenceno'];
		$_SESSION['mobileno'] = $_POST['mobileno'];
		$_SESSION['nme'] = $_POST['nme'];
		$_SESSION['country'] = $_POST['country'];
		$_SESSION['villagehouse2'] = $_POST['villagehouse2'];
		$_SESSION['roadblocksector2'] = $_POST['roadblocksector2'];
		$_SESSION['district2'] = $_POST['district2'];
		$_SESSION['policestation2'] = $_POST['policestation2'];
		$_SESSION['postoffice2'] = $_POST['postoffice2'];
		$_SESSION['contactno'] = $_POST['contactno'];
		$_SESSION['email1'] = $_POST['email1'];
		$_SESSION['relationship'] = $_POST['relationship'];
		$_SESSION['passportno'] = $_POST['passportno'];
		$_SESSION['placeofissue'] = $_POST['placeofissue'];
		
		header("Location:FinalPage.php");
	}
?>