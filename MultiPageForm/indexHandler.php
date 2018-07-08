<?php
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$_SESSION['applyingin'] = $_POST['applyingin'];
		$_SESSION['ptype'] = $_POST['ptype'];
		$_SESSION['nameofapplicant'] = $_POST['nameofapplicant'];
		$_SESSION['firstpart'] = $_POST['firstpart'];
		$_SESSION['secondpart'] = $_POST['secondpart'];
		$_SESSION['fathersname'] = $_POST['fathersname'];
		$_SESSION['fathersnationality'] = $_POST['fathersnationality'];
		$_SESSION['fathersprofession'] = $_POST['fathersprofession'];
		$_SESSION['mothersname'] = $_POST['mothersname'];
		$_SESSION['mothersnationality'] = $_POST['mothersnationality'];
		$_SESSION['mothersprofession'] = $_POST['mothersprofession'];
		$_SESSION['spousesname'] = $_POST['spousesname'];
		$_SESSION['maritalstatus'] = $_POST['maritalstatus'];
		$_SESSION['applicantsprofession'] = $_POST['applicantsprofession'];
		$_SESSION['countryofbirth'] = $_POST['countryofbirth'];
		$_SESSION['birthdistrict'] = $_POST['birthdistrict'];
		$_SESSION['dateofbirth'] = $_POST['dateofbirth'];
		$_SESSION['gender'] = $_POST['gender'];
		$_SESSION['birthidno'] = $_POST['birthidno'];
		$_SESSION['nationalidno'] = $_POST['nationalidno'];
		$_SESSION['taxidno'] = $_POST['taxidno'];
		$_SESSION['cm'] = $_POST['cm'];
		$_SESSION['inch'] = $_POST['inch'];
		$_SESSION['religion'] = $_POST['religion'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['nationality'] = $_POST['nationality'];
		$_SESSION['citizenshipstatus'] = $_POST['citizenshipstatus'];
		$_SESSION['dualcitizenship'] = $_POST['dualcitizenship'];
		$_SESSION['villagehouse'] = $_POST['villagehouse'];
		$_SESSION['roadblocksector'] = $_POST['roadblocksector'];
		$_SESSION['district'] = $_POST['district'];
		$_SESSION['policestation'] = $_POST['policestation'];
		$_SESSION['postoffice'] = $_POST['postoffice'];
		$_SESSION['villagehouse1'] = $_POST['villagehouse1'];
		$_SESSION['roadblocksector1'] =  $_POST['roadblocksector1'];
		$_SESSION['district1'] =  $_POST['district1'];
		$_SESSION['policestation1'] =  $_POST['policestation1'];
		$_SESSION['postoffice1'] =  $_POST['postoffice1'];
		
		header("Location:Page2.html");
	}
?>