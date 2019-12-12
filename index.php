<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login-styles.css">
</head>
<body>
	<div class="gif"></div>
	<div class="login-container">
			<form action="login.php" class="log" method="post">
				<table>
					<tr>
						<td>Gebruikersnaam</td>
						<td><input name="Gebruikersnaam" type="text"></td>
					</tr>
					<tr>
						<td>Wachtwoord</td>
						<td><input name="Wachtwoord" type="password"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input name="inlog" type="submit" value="LOG IN"></td>
					</tr>
				</table>
			</form>
	</div>
</body>
</html>
