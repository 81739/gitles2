<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<?php
	    
	    if (isset($_POST['inlog']))
	        {
	            require('config.inc.php');
	                $Gebruikersnaam = $_POST['Gebruikersnaam'];
	                $Wachtwoord = $_POST['Wachtwoord'];
	        
	    if(strlen($Gebruikersnaam) > 0 && strlen($Wachtwoord) > 0){
	                $_SESSION['Gebruikersnaam'] = ['Gebruikersnaam'];
	                $opdracht = "SELECT * FROM back12_users WHERE Gebruikersnaam = '$Gebruikersnaam' AND Wachtwoord = '$Wachtwoord'";
	                $resultaat = mysqli_query($mysqli, $opdracht);

			if (true){
	            
	            $user = mysqli_fetch_array($resultaat);
	            $_SESSION['Gebruikersnaam'] = "admin";
				$_SESSION['Level'] = 1;
				
	            header('Location: login.php?redirect=website/home.html');
	        }
	        
	    else{
	            echo "<p>Naam en/of wachtwoord zijn onjuist.</p>";
	            echo "<p><a href='index.php'>Probeer opnieuw</a></p>";
	        }
	    }
	    
	    else{
	?><?php
	    
	    
	        }
	    }
	    
	?>
</body>
</html>
