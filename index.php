<html>
	<head>
		<title>
			Fsignup
		</title>
		<style>
			::placeholder
			{
			color : darkgray;
			font-size : 20px;
			text-align : center-right;
			padding : 5px;
			font-weight : 600;
			}
			input 
			{
			border : 1px solid lightgray;
			border-radius : 3px;
			padding : 2px;
			height : 35px
			}
		</style>
	</head>
	<body style = "background-color : lavender">
		<h2>
			Sign Up
		</h2>
		<p style = "font-size : 20px; ">
			<b>
				It's free and always will be.
			</b>
		</p>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" target = "_blank" method = "post">
			<p>
				<input type = "text" name = "firstName" placeholder = "First Name" style =  "float : center; width : 168px;" autofocus required>
				<input type = "text" name = "lastName" placeholder = "Last Name" style =  "float : center; width : 168px;" required>
				<br/>
				<br/>
				<input type = "text" name = "yourEmail" placeholder = "Your Email" size = "46" required>
				<br/>
				<br/>
				<input type = "text" name = "re-enterEmail" placeholder = "Re-enter Email" size = "46" required>
				<br/>
				<br/>
				<input type = "password" name = "newPassword" placeholder = "New Password" size = "46" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
				<h5>
					Birthday
				</h5>
				<select name = "month" style = "width : 80px;" required>
					<option value = "Jan"> 
						Jan 
					</option>
					<option value = "Feb"> 
						Feb 
					</option>
					<option value = "Mar"> 
						Mar 
					</option>
					<option value = "Apr"> 
						Apr 
					</option>
					<option value = "May"> 
						May 
					</option>
					<option value = "Jun"> 
						Jun 
					</option>
					<option value = "Jul"> 
						Jul 
					</option>
					<option value = "Aug"> 
						Aug 
					</option>
					<option value = "Sep"> 
						Sep 
					</option>
					<option value = "Oct"> 
						Oct 
					</option>
					<option value = "Nov"> 
						Nov 
					</option>
					<option value = "Dec"> 
						Dec 
					</option>
				</select>
				<select name = "day" style = "width : 80px;" required>
					<?php
						for($i = 1; $i <= 31; $i++)
						{
							echo "<option value = '$i'> $i </option>";
						}
					?>
				</select>
				<select name = "year" style = "width : 80px;">
					<?php
						for($i = 1900; $i <= 2018; $i++)
						{
							echo "<option value = '$i'> $i </option>";
						}
					?>
				</select>
				<br/>
				<br/>
				<input type = "radio" name = "gender" value = "male" style = "height : 15px"> Male
				<input type = "radio" name = "gender" value = "female" style = "height : 15px"> Female
				<br/>
				<br/>
				<!--
					Enter a date before 1980-01-01:<br>
					<input type="date" name="bday" max="1979-12-31"><br><br>
					Enter a date after 2000-01-01:<br>
					<input type="date" name="bday" min="2000-01-02"><br><br>
					<br/>
					<br/>
					<input type="color" name="favcolor">
					<br/>
					<br/>
					Select a file: <input type="file" name="myFile">
					<br/>
					<br/>
					<input type="number" name="quantity" min="0" max="100" step="10" value="30">
					<br/>
					<br/>
					<input type="range" name="points" step="5" min="0" max="10">
					<br/>
					<br/>
					<input type="time" name="usr_time">
					<br/>
					<br/>
					<input type="week" name="year_week">
					<br/>
					<br/>
					<input list="browsers" name="browser">
					<datalist id="browsers">
					<option value="Internet Explorer">
					<option value="Firefox">
					<option value="Chrome">
					<option value="Opera">
					<option value="Safari">
					</datalist>
					<br/>
					<br/>
				-->
				<button type = "submit" style = "width : 150px;"> 
					Sign Up
				</button>
			</p>
		</form>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$fn = test_input($_POST["firstName"]);
				$ln = test_input($_POST["lastName"]);
				$e = test_input($_POST["yourEmail"]);
				$re = test_input($_POST["re-enterEmail"]);
				$p = test_input($_POST["newPassword"]);
				$m = test_input($_POST["month"]);
				$d = test_input($_POST["day"]);
				$y = test_input($_POST["year"]);
				$g = test_input($_POST["gender"]);
				
				echo "$fn$ln$e$re$p$m$d$y$g";
			}
			function test_input($data) 
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
	</body>
</html>