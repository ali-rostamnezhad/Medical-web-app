<!DOCTYPE html>
<html>
<head>
	<title>Medical Diagnosis</title>
</head>
<body>
	<h1>Medical Diagnosis</h1>
	<form method="POST">
		<label for="age">Age:</label>
		<input type="text" name="age" required><br><br>
		<label for="gender">Gender:</label>
		<select name="gender" required>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select><br><br>
		<label for="symptoms">Symptoms:</label>
		<textarea name="symptoms" rows="5" cols="50" required></textarea><br><br>
		<label for="signs">Signs:</label>
		<textarea name="signs" rows="5" cols="50" required></textarea><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if(isset($_POST['submit'])) {
			$age = $_POST['age'];
			$gender = $_POST['gender'];
			$symptoms = $_POST['symptoms'];
			$signs = $_POST['signs'];

			// Apply rules to determine if emergency or life-threatening situation
			if($age < 1) {
				echo "<p>Emergency situation: Patient is an infant.</p>";
			}
			elseif($age > 80) {
				echo "<p>Emergency situation: Patient is elderly.</p>";
			}
			elseif($symptoms == 'chest pain' || $symptoms == 'shortness of breath' || $symptoms == 'severe headache' || $signs == 'severe bleeding' || $signs == 'loss of consciousness') {
				echo "<p>Emergency situation: Patient is exhibiting potentially life-threatening symptoms/signs.</p>";
			}
			elseif($symptoms == 'fever' && $age < 2) {
				echo "<p>Dangerous situation: Patient is a young child with a fever.</p>";
			}
			elseif($symptoms == 'fever' && $age >= 2 && $age < 65) {
				echo "<p>Non-emergency situation: Patient is an adult with a fever.</p>";
			}
			else {
				echo "<p>Non-emergency situation: Patient's symptoms/signs do not appear to be life-threatening or dangerous.</p>";
			}
		}
	?>
</body>
</html>
