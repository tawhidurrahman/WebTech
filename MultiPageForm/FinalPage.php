<?php
	session_start();
	?>
<html>
	<head>
		<title>
			Passport Form
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			* {
			box-sizing: border-box;
			}
			
			.column 
			{
			float: left;
			width: 50%;
			padding: 10px;
			}
			
			.row:after 
			{
			content: "";
			display: table;
			clear: both;
			}
			
			button
			{
				width: 20%;
				margin-right: 20px;
				margin-bottom: 20px;
				font-family: Arial, Helvetica, sans-serif;
				font-size: 12px;
				height:25px;
				overflow:auto;
				position: relative;
				right:    0;
				bottom:   0;
			}
		</style>
	</head>
	
	<body>
		<h3>
			PASSPORT APPLICATION - REVIEW ENROLLMENT SUMMARY
		</h3>
		<?php
			$oaid = rand(10, 100000000);
			echo "<b>Online Application ID: ".$oaid."</b><br>";
			$_SESSION['oaid'] = $oaid;
			$date = date("d/m/Y") ;
			echo "<b>Enrollment Date: ".$date."</b><br>";
		?>
		<p>
			<font color = "red">Reminder Before Submitting Your Application</font>
			<ul>
				<li>After you click submit, you are not allowed to modify your information</li>
				<li>Please visit <b>BAGERHAT Branch</b> on any working day within the next 15 days for biometric capture except government holiday</li>
			</ul>
		</p>
		<hr/>
		
		<form action = "CreateFile.php" method = "POST" name = "finalpage" onsubmit = "" novalidate>
			<fieldset>
				<div class = "row">
					<div class = "column">
						<table>
							<tr>
								<td colspan = "2">
									<h4>Personal Information Summary</h4>
								</td>
							</tr>
							
							<tr>
								<td>
									Name Of The Applicant: 
								</td>
								<td>
									<?php echo strtoupper($_SESSION['nameofapplicant']); ?>
								</td>
							</tr>
							<tr>
								<td>
									Second Part (Surname):
								</td>
								<td>
									<?php echo strtoupper($_SESSION['secondpart']); ?>
								</td>
							</tr>
							
							<tr>
								<td>
									First Part (Given Name):
								</td>
								<td>
									<?php echo strtoupper($_SESSION['firstpart']); ?>
								</td>
							</tr>
							
							<tr>
								<td>
									Gender:
								</td>
									
								<td>
									<?php echo $_SESSION['gender']; ?>
								</td>
							</tr>
							
							<tr>
								<td>
									Nationality: 
								</td>
								<td>
									<?php echo strtoupper($_SESSION['nationality']); ?>
								</td>
							</tr>
							<tr>
								<td>
									Date Of Birth:
								</td>
								<td>
									<?php echo $_SESSION['dateofbirth']; ?>
								</td>
							</tr>
							
							<tr>
								<td>
									Place Of Birth:
								</td>
								<td>
									<?php echo $_SESSION['birthdistrict'];  echo ", "; echo strtoupper($_SESSION['countryofbirth']);?>
								</td>
							</tr>
								
							<tr>
								<td>
									Father's name:
								</td>
								<td>
									<?php echo strtoupper($_SESSION['fathersname']); ?>
								</td>
							</tr>
							<tr>
								<td>
									Mother's name:
								</td>
								<td>
									<?php echo strtoupper($_SESSION['mothersname']); ?>
								</td>
							</tr>
							
							<tr>
								<td>
									Spouse's name:
								</td>
								<td>
									<?php echo strtoupper($_SESSION['spousesname']); ?>
								</td>
							</tr>
							
							<tr>
								<td>
									National ID No:
								</td>
								<td>
									<?php echo $_SESSION['nationalidno']; ?>
								</td>
							</tr>
							
							<tr>
								<td>
									Birth ID No:
								</td>
								<td>
									<?php echo $_SESSION['birthidno']; ?>
								</td>
							</tr>
							
							<tr>
								<td>
									Old Passport No:
								</td>
								<td>
									<?php echo $_SESSION['passportno']; ?>
								</td>
							</tr>
							
						</table>
					</div>
					
					<div class = "column">
						<table>
							<tr>
								<td colspan = "2">
									<h4>Passport Information Summary</h4>
								</td>
							</tr>
							<tr>
								<td>
									Applying in:
								</td>
								<td>
									<?php echo strtoupper($_SESSION['applyingin']); ?>
								</td>
							</tr>
							<tr>
								<td>
									Passport Type:
								</td>
								<td>
									<?php echo $_SESSION['ptype']; ?>
								</td>
							</tr>
							<tr>
								<td>
									Application Type:
								</td>
								<td>
									<b>NEW</b>
								</td>
							</tr>
							<tr>
								<td colspan = "2">
									<h4>Contact Information Summary</h4>
								</td>
							</tr>
							
							<tr>
								<td>
									Mobile No:
								</td>
								<td>
									<?php echo $_SESSION['mobileno']; ?>
								</td>
							</tr>
							
							<tr>
								<td>
									Present Address:
								</td>
								<td>
									<?php echo strtoupper($_SESSION['villagehouse']); echo ", "; echo $_SESSION['roadblocksector']; echo ", "; echo $_SESSION['district']; echo ", "; echo $_SESSION['policestation']; echo ", "; echo $_SESSION['postoffice']; echo ", "; echo strtoupper($_SESSION['applyingin']);?>
								</td>
							</tr>
							
							<tr>
								<td>
									Permanent Address:
								</td>
								<td>
									<?php echo strtoupper($_SESSION['villagehouse1']); echo ", "; echo $_SESSION['roadblocksector1']; echo ", "; echo $_SESSION['district1']; echo ", "; echo $_SESSION['policestation1']; echo ", "; echo $_SESSION['postoffice1']; echo ", "; echo strtoupper($_SESSION['applyingin']);?>
								</td>
							</tr>
							
							<tr>
								<td>
									Email:
								</td>
								<td>
									<?php echo $_SESSION['email']; ?>
								</td>
							</tr>
							<tr>
								<td colspan = "2">
									<h4>Payment Information Summary</h4>
								</td>
							</tr>
							
							<tr>
								<td>
									Payment Amount:
								</td>
								<td>
								</td>
							</tr>
							
							<tr>
								<td>
									Payment Date:
								</td>
								<td>
								</td>
							</tr>
							
							<tr>
								<td>
									Reciept No:
								</td>
								<td>
								</td>
							</tr>
							
							<tr>
								<td>
									Bank Name:
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td>
									Bank Branch:
								</td>
								<td>
								</td>
							</tr>
							
						</table>
						<button type = "submit" name = "saveandexit">SAVE</button>
					</div>
				</div>
			</fieldset>
		</form>
	</body>
</html>
