<!DOCTYPE html>
<html>
<head>
	<title>Laravel Practice</title>
</head>
<body>
	<h2>Buat Account Baru!</h2>
	<h4>Sign Up Form</h4>
	<form action="/welcome1" method="GET">

		<label for='firstname'>First Name :</label><br><br>
		<input type='text' placeholder='' name='namadepan' id='firstname'><br><br>

		<label for='lastname'>Last Name :</label><br><br>
		<input type='text' placeholder='' name='namabelakang' id='lastname'><br><br>

		<label for='gender'>Gender :</label><br><br>
		<input type='radio' name='male' value='male'>Male<br><br>
		<input type='radio' name='female' value='female'>Female<br><br>
		<input type='radio' name='other' value='other'>Other<br><br>

		<label for='nationality'>Nationality :</label><br><br>
		<select>
			<option value='indonesia'>Indonesian</option>
			<option value='malaysian'>Malaysian</option>
			<option value='australian'>Australian</option>
		</select><br><br>

		<label for='language'>Language Spoke :</label><br><br>
		<input type='checkbox' name='bahasa_indonesia' value='bahasa_indonesia'>Bahasa Indonesia<br><br>
		<input type='checkbox' name='english' value='english'>English<br><br>
		<input type='checkbox' name='other' value='other'>Other<br><br>

		<label for='bio'>Bio :</label><br><br>
		<textarea cols='30' rows='9'></textarea><br><br>

		<input type='submit' value='Sign Up'>
	</form>
</body>
</html>
