<?php
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		echo "<h2>Application Submitted</h2>";
	
		$fileext = ".txt";
		$filename = $_SESSION['oaid'].$fileext;
		$handle = fopen($filename, 'a');
		
		fwrite($handle, "Personal Information Summary"."\r\n");
		fwrite($handle, "Name of Applicant:".strtoupper($_SESSION['firstpart'])."\r\n");
		fwrite($handle, "Second Part :".strtoupper($_SESSION['secondpart'])."\r\n");
		fwrite($handle, "First Part :".strtoupper($_SESSION['firstpart'])."\r\n");
		fwrite($handle, "Gender :".strtoupper($_SESSION['gender'])."\r\n");
		fwrite($handle, "Nationality :".strtoupper($_SESSION['nationality'])."\r\n");
		fwrite($handle, "Date Of Birth :".strtoupper($_SESSION['dateofbirth'])."\r\n");
		fwrite($handle, "Place Of Birth :".strtoupper($_SESSION['birthdistrict'])." ".strtoupper($_SESSION['countryofbirth'])."\r\n");
		fwrite($handle, "Father's name :".strtoupper($_SESSION['fathersname'])."\r\n");
		fwrite($handle, "Mother's name :".strtoupper($_SESSION['mothersname'])."\r\n");
		fwrite($handle, "Spouse's name :".strtoupper($_SESSION['spousesname'])."\r\n");
		fwrite($handle, "National ID No :".strtoupper($_SESSION['nationalidno'])."\r\n");
		fwrite($handle, "Birth ID No :".strtoupper($_SESSION['birthidno'])."\r\n");
		fwrite($handle, "Old Passport No :".strtoupper($_SESSION['passportno'])."\r\n");
		fwrite($handle, "Passport Information Summary"."\r\n");
		fwrite($handle, "Applying in :".strtoupper($_SESSION['applyingin'])."\r\n");
		fwrite($handle, "Passport Type :".strtoupper($_SESSION['ptype'])."\r\n");
		fwrite($handle, "Application Type :"."NEW\r\n");
		fwrite($handle, "Contact Information Summary"."\r\n");
		fwrite($handle, "Mobile No :".strtoupper($_SESSION['mobileno'])."\r\n");
		fwrite($handle, "Present Address :".strtoupper($_SESSION['villagehouse'])." ".strtoupper($_SESSION['roadblocksector'])." ".strtoupper($_SESSION['district'])." ".strtoupper($_SESSION['policestation'])." ".strtoupper($_SESSION['postoffice'])." ".strtoupper($_SESSION['applyingin'])." "."\r\n");
		fwrite($handle, "Parmanent Address :".strtoupper($_SESSION['villagehouse1'])." ".strtoupper($_SESSION['roadblocksector1'])." ".strtoupper($_SESSION['district1'])." ".strtoupper($_SESSION['policestation1'])." ".strtoupper($_SESSION['postoffice1'])." ".strtoupper($_SESSION['applyingin'])." "."\r\n");
		fwrite($handle, "Email :".strtoupper($_SESSION['email'])."\r\n\r\n");
		/*fwrite($handle, "Payment Information Summary"."\r\n");
		fwrite($handle, "Payment Amount :".strtoupper($_SESSION['nme'])."\r\n");
		fwrite($handle, "Payment Date :".strtoupper($_SESSION['nme'])."\r\n");
		fwrite($handle, "Reciept No :".strtoupper($_SESSION['nme'])."\r\n");
		fwrite($handle, "Bank Name :".strtoupper($_SESSION['nme'])."\r\n");
		fwrite($handle, "Bank Branch :".strtoupper($_SESSION['nme'])."\r\n");*/
		fclose($handle);
		
		
		
	
	}
	
?>