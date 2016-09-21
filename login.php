<?php
	
	
	
	
	//var_dump($_GET);hh
	//echo "<br>";
	//var_dump($_POST)
	
	$signupEmailError = "";
	$signupPasswordError = "";
	$loginEmailError = "";
	$loginPasswordError = "";
	$signupDateError = "";
	$signupEmail = "";
	$gender = "";
	
	
	//kas epost oli olemas
	if (isset ($_POST["signupEmail"]) ) {
		
		if( empty ($_POST["signupEmail"]) ) {
			//oli email, kuid see oli tühi
			$signupEmailError = "See väli on kohustuslik!";
			
		} else {
			
			$signupEmail = $_POST["signupEmail"];
			
		}
	}
	//kas password oli olemas
	if (isset ($_POST["signupPassword"]) ) {
		
		if( empty ($_POST["signupPassword"]) ) {
			//oli password, kuid see oli tühi
			$signupPasswordError = "See väli on kohustuslik!";
		} else {
			//tean et parool ja see ei olnud tühi
			//vähemalt 8
			
			if ( strlen($_POST["signupPassword"]) < 8) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 tähemärki pikk!";	
			}	
		}	
	}
	//kas eposti v2li on t8hi
	if (isset ($_POST["loginEmail"]) ) {
		
		if( empty ($_POST["loginEmail"]) ) {
			
			$loginEmailError = "See väli on kohustuslik!";
		}
	}	
	//kas parooli v2li on t8hi
	if (isset ($_POST["loginPassword"]) ) {
		
		if( empty ($_POST["loginPassword"]) ) {
			
			$loginPasswordError = "See väli on kohustuslik!";
		} else {
			//tean et parool ja see ei olnud tühi
			//vähemalt 8 tähemärki pikk
			
			if ( strlen($_POST["loginPassword"]) < 8) {
				
				$loginPasswordError = "Parool peab olema vähemalt 8 tähemärki pikk!";	
			}
		
		
	    }
	}	
	//kontrollib kas sünnikuupäev on õiges formaadis, väli ei ole kohustuslik
	if (isset ($_POST["signupDate"]) ) {
		
		if (strlen ($_POST["signupDate"]) != 10) {
			
			
			if (strlen ($_POST["signupDate"]) != 0 ) {
				
				$signupDateError = "Kuupäev on vales formaadis! Sisesta palun nii: pp/kk/aaaa";
				
			}
			
			
			
		}
				
				
	}	
	
	if ( isset ( $_POST["gender"] ) ) {
		if ( empty ( $_POST["gender"] ) ) {
			$genderError = "See väli on kohustuslik!";
		} else {
			$gender = $_POST["gender"];
		}
	}


	
	
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Sisselogimisleht </title>
	
	
	
	</head>

	<body>
	
		<h3>Logi sisse</h3>
	
		<form method="POST">
			
			
			<input type="email" value="<?=$signupEmail;?>" name="loginEmail" placeholder="Email"> <?php echo $loginEmailError;?>
			<br><p>
			<input type="password" name="loginPassword" placeholder="Parool"> <?php echo $loginPasswordError;?> 
			<br><p>
			<input type="submit" value="Logi sisse">
		
		</form>
		
		<h3>Loo kasutaja</h3>
	
		<form method="POST">
			
			<input type="email" name="signupEmail" placeholder="example@example.com"> <?php echo $signupEmailError;?>
			<br><p>
			<input type="password" name="signupPassword" placeholder="Parool"> <?php echo $signupPasswordError;?>
			<br><p>
			<input type="email" name="signup" placeholder="Kasutajanimi"> <?php echo $signupEmailError;?>
			<br><p>
			<input type="email" name="signup" placeholder="Nimi"> 
			<br><br>
			
			 <?php if($gender == "male") { ?>
				<input type="radio" name="gender" value="male" checked> Mees<br>
			 <?php } else { ?>
				<input type="radio" name="gender" value="male" > Mees<br>
			 <?php } ?>
			 
			 <?php if($gender == "female") { ?>
				<input type="radio" name="gender" value="female" checked> Naine<br>
			 <?php } else { ?>
				<input type="radio" name="gender" value="female" > Naine<br>
			 <?php } ?>
			 
			 <?php if($gender == "other") { ?>
				<input type="radio" name="gender" value="other" checked> Muu<br>
			 <?php } else { ?>
				<input type="radio" name="gender" value="other" > Muu<br>
			 <?php } ?>
			<br>
			
			<input type="date" name="signupDate" placeholder="Sünnikuupäev"> <?php echo $signupDateError;?>
			<br><sup>pp/kk/aaaa</sup>
			<br><p>
			<input type="submit" value="Registreeri kasutaja">
		
		</form>
	
	
	
	
	 
	
	
	</body>
</html>