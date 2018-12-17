<?php

session_start();

if (isset($_POST['nazwisko'])) // sprawdzamy czy formularz zostal wyslany
	{
		$wszystko_ok=true;
		
		$plec = isset($_POST['plec']) ? $_POST['plec'] : 0;
		
		switch ($plec) {
			case 'Mężczyzna':
				$message_plec = ' Pana';
				break;
			case 'Kobieta':
				$message_plec = ' Pani';
				break;
			case 'Kobieta':
				$message_plec = '';
				break;
		};
		
		$talia = isset($_POST['talia']) ? $_POST['talia'] : 0;
		$biodra = isset($_POST['biodra']) ? $_POST['biodra'] : 0;
		$text1 = isset($_POST['text1']) ? $_POST['text1'] : 0;
		$text2 = isset($_POST['text2']) ? $_POST['text2'] : 0;
		$text3 = isset($_POST['text3']) ? $_POST['text3'] : 0;
		$text4 = isset($_POST['text4']) ? $_POST['text4'] : 0;
		$text5 = isset($_POST['text5']) ? $_POST['text5'] : 0;
		$text6 = isset($_POST['text6']) ? $_POST['text6'] : 0;
		$text7 = isset($_POST['text7']) ? $_POST['text7'] : 0;
		$text8 = isset($_POST['text8']) ? $_POST['text8'] : 0;
		$text9 = isset($_POST['text9']) ? $_POST['text9'] : 0;
		$text10 = isset($_POST['text10']) ? $_POST['text10'] : 0;
		$text11 = isset($_POST['text11']) ? $_POST['text11'] : 0;
		$text12 = isset($_POST['text12']) ? $_POST['text12'] : 0;
		
		
		$textradio13 = isset($_POST['text13']) ? $_POST['text13'] : 0;
		switch ($textradio13) {
			case 1:
				$text13 = '3 lub więcej porcje na dzień';
				break;
			case 2:
				$text13 = '1-2 porcje na dzień';
				break;
			case 3:
				$text13 = '4-6 porcje na tydzień';
				break;
			case 4:
				$text13 = '1-3 porcje na tydzień';
				break;
			case 5:
				$text13 = 'Wcale';
				break;
		}
		$textradio14 = isset($_POST['text14']) ? $_POST['text14'] : 0;
		switch ($textradio14) {
			case 1:
				$text14 = '3 lub więcej porcje na dzień';
				break;
			case 2:
				$text14 = '1-2 porcje na dzień';
				break;
			case 3:
				$text14 = '4-6 porcje na tydzień';
				break;
			case 4:
				$text14 = '1-3 porcje na tydzień';
				break;
			case 5:
				$text14 = 'Wcale';
				break;
		}
		$text15 = isset($_POST['text15']) ? $_POST['text15'] : 0;
		$text16 = isset($_POST['text16']) ? $_POST['text16'] : 0;
		$text17 = isset($_POST['text17']) ? $_POST['text17'] : 0;
		$text18 = isset($_POST['text18']) ? $_POST['text18'] : 0;
		$waga_docelowa = isset($_POST['waga_docelowa']) ? $_POST['waga_docelowa'] : null;
		$text19 = isset($_POST['text19']) ? $_POST['text19'] : 0;
		$text20 = isset($_POST['text20']) ? $_POST['text20'] : 0;
		$text21 = isset($_POST['text21']) ? $_POST['text21'] : 0;

		$sprzet1 = isset($_POST['sprzet1']) ? $_POST['sprzet1'] . ', ' : null;
		$sprzet2 = isset($_POST['sprzet2']) ? $_POST['sprzet2'] . ', ' : null;
		$sprzet3 = isset($_POST['sprzet3']) ? $_POST['sprzet3'] . ', ' : null;
		$sprzet4 = isset($_POST['sprzet4']) ? $_POST['sprzet4'] . ', ' : null;
		$sprzet5 = isset($_POST['sprzet5']) ? $_POST['sprzet5'] . ', ' : null;
		$sprzet6 = isset($_POST['sprzet6']) ? $_POST['sprzet6'] . ', ' : null;
		$sprzet7 = isset($_POST['sprzet7']) ? $_POST['sprzet7'] : null;
		$sprzet = $sprzet1 . $sprzet2 . $sprzet3 . $sprzet4 . $sprzet5 . $sprzet6 . $sprzet7; 
		
		$note = isset($_POST['note']) ? $_POST['note'] : 0;
		
		$imie = $_POST['imie'];                               
		if ((strlen($imie)<2) || (strlen($imie)>25))
		{
			$wszystko_ok=false;
			$_SESSION['e_imie']="Pole wymagane";
		}  
		else if (!preg_match("/^[a-żA-Ż\-\s]*$/",$imie))
		{
			$wszystko_ok=false;
			$_SESSION['e_imie']="Podaj poprawne imię";
		}
		$nazwisko = $_POST['nazwisko'];                  
		if ((strlen($nazwisko)<2) || (strlen($nazwisko)>35))
		{
			$wszystko_ok=false;
			$_SESSION['e_nazwisko']="Pole wymagane";
		}  
		else if (!preg_match("/^[a-żA-Ż\-\s]*$/",$nazwisko)) 
		{
			$wszystko_ok=false;
			$_SESSION['e_nazwisko']="Podaj poprawne nazwisko";
		}
		$nr = $_POST['nr'];
		if (empty($nr))
		{
			$wszystko_ok=false;
			$_SESSION['e_nr']="Pole wymagane";
		}
		else if (preg_match("/^[0-9\-\+\s]*$/",$nr)) {
			if ((strlen($nr)<9) || (strlen($nr)>16))
			{
				$wszystko_ok=false;
				$_SESSION['e_nr']="Podaj poprawny numer telefonu";
			}
		} else {
			$wszystko_ok=false;
			$_SESSION['e_nr']="Podaj poprawny numer telefonu";
		}
		$email = $_POST['email']; 
		if (empty($email))
		{
			$wszystko_ok=false;
			$_SESSION['e_email']="Pole wymagane";
		}
				
		$wiek = $_POST['wiek'];
		$wiek_tab = explode('-', $wiek);
		

		if ((strlen($wiek_tab[0]) == 2) && (strlen($wiek) == 10)) 
		{
			$wiek_po = $wiek_tab[2] . '-' . $wiek_tab[1] . '-' . $wiek_tab[0];
			$data = preg_match("/^[1-2][09][0-9][0-9][-][0-1][0-9][-][0-3][0-9]*$/",$wiek_po);
			if ($data == 0)			
			{
				$wszystko_ok=false;
				$_SESSION['e_wiek']="Podaj poprawną datę urodzenia (dd-mm-rrrr)";		
			}
		}			
		else 
		{
			$data = preg_match("/^[1-2][09][0-9][0-9][-\.][0-1][0-9][-\.][0-3][0-9]*$/",$wiek);	
			if (empty($wiek))
			{
				$wszystko_ok=false;
				$_SESSION['e_wiek']="Pole wymagane";
			}
			else if ($data == 0)			
			{
				$wszystko_ok=false;
				$_SESSION['e_wiek']="Podaj poprawną datę urodzenia (dd-mm-rrrr)";
			}			
		}			
				
		
		$waga = $_POST['waga'];                                 
		if (($waga<5) || ($waga>350))
		{
			$wszystko_ok=false;
			$_SESSION['e_waga']="Pole wymagane";
		}
		$wzrost = $_POST['wzrost'];                                 
		if (($wzrost<20) || ($wzrost>350))
		{
			$wszystko_ok=false;
			$_SESSION['e_wzrost']="Pole wymagane";
		}
				
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);

	
		  $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			$polaczenie->set_charset("utf8");

			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{       
				if ($wszystko_ok==true)
				{   
					if ($polaczenie->query("INSERT INTO pytania VALUES (NULL, '$imie', '$nazwisko', '$nr', '$email', '$plec', '$wiek', '$waga', '$wzrost', '$talia', '$biodra', '$text1', '$text2', '$text3', '$text4', '$text5', '$text6', '$text7', '$text8', '$text9', '$text10', '$text11', '$text12', '$text13', '$text14', '$text15', '$text16', '$text17', '$text18', '$waga_docelowa', '$text19', '$text20', '$sprzet', '$text21', '$note', NULL)"))
					{    
			  
						$email_to = "dietetyk@example.com";
						$email_subject = $imie . ' ' . $nazwisko . " - kwestionariusz osobowy";  
									
									
						$email_message = '<html><body>';
						$email_message .= '<h2>Kwestionariusz osobowy' . $message_plec . ' ' . $imie . ' ' . $nazwisko . '</h2>';
						$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
						$email_message .= "<tr><td style='background: #eee;'><strong>Imię</strong></td><td>" . $imie . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Nazwisko</strong></td><td>" . $nazwisko . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>E-mail</strong></td><td>" . $email . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Telefon</strong></td><td>" . $nr . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Płeć</strong></td><td>" . $plec . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Data urodzenia</strong></td><td>" . $wiek . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Waga</strong></td><td>" . $waga . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Wzrost</strong></td><td>" . $wzrost . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Obwód talii</strong></td><td>" . $talia . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Obwód bioder</strong></td><td>" . $biodra . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Zdiagnozowane choroby</strong></td><td>" . $text1 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Leki, suplementy, antykoncepcja</strong></td><td>" . $text2 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Dolegliwości układu pokarmowego</strong></td><td>" . $text3 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Alergie</strong></td><td>" . $text4 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Ciąża</strong></td><td>" . $text5 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Używki</strong></td><td>" . $text6 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Zawód oraz godziny pracy</strong></td><td>" . $text7 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Sport</strong></td><td>" . $text8 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Dieta</strong></td><td>" . $text9 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Aktualna ilość posiłków zjadanych w ciągu dnia</strong></td><td>" . $text10 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Nie lubię</strong></td><td>" . $text11 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Nie zrezygnuję z</strong></td><td>" . $text12 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Warzywa</strong></td><td>" . $text13 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Owoce</strong></td><td>" . $text14 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Mięso</strong></td><td>" . $text15 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Płyny</strong></td><td>" . $text16 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Słodycze i przekąski</strong></td><td>" . $text17 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Dania gotowe</strong></td><td>" . $text18 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Waga docelowa</strong></td><td>" . $waga_docelowa . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Ilość posiłków, które pacjent chciałby spożywać</strong></td><td>" . $text19 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Godziny i miejsce spożywania posiłków</strong></td><td>" . $text20 . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Sprzęt</strong></td><td>" . $sprzet . "</td></tr>";
						$email_message .= "<tr><td style='background: #eee;'><strong>Informacje dodatkowe</strong></td><td>" . $text21 . "</td></tr>";
						$email_message .= "</table>";
						$email_message .= "</body></html>";			
									
						// create email headers		       
						$headers = "From: " . $email . "\r\n";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
						@mail($email_to, $email_subject, $email_message, $headers); 
 
						$_SESSION['done']=true;
						header('Location: dzieki.php');
					} 
					else
					{
					throw new Exception($polaczenie->error);
					} 
				} 
			}      
		}      
  

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kwestionariusz żywieniowy - dietetyk Izabela Xyz</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="img/faviconnn.ico"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<style>
	body {
		font-family: 'Source Sans Pro', sans-serif;
	}

	.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
		background-color: #ffc107;
	}

	.header-bar {
		height: 35px;
	}

	.header-text {
		font-size: 30px;
	}

	.footer {
		padding: 1.2rem 2rem 1.5rem !important;
		margin-bottom: 0;
	}

	.footer h4 {
		font-size: 1.1rem;
	}

	.footer p {
		font-size: 15px;
		margin: 0;
	}

	.footer a {
		color: #000;
	}

	.footer a:hover {
		text-decoration: none;
	}

	.note-label {
		font-size: 14px;
	}

	#up {
		max-height: 243px;
	}

	.disp-flex {
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
	}

	.check-box {
		margin-right: 7px !important;
	}

	.header-bg {
		margin-bottom: 0;
		background-color: #fff;
		background-image: url(img/food.jpg);
		background-size: cover;
	}

	.header-text-bg {
		background: rgba(255, 255, 255, 0.8);
		display: inline-block;
		padding: 10px 40px;
		border-radius: 10px;
		-webkit-transform: skewX( -30deg);
		-ms-transform: skewX( -30deg);
		transform: skewX( -30deg);
	}

	.text_alig {
		text-align: center;
	}

	.wypr {
		-webkit-transform: skewX( 30deg);
		-ms-transform: skewX( 30deg);
		transform: skewX( 30deg);
	}

	.form_age {
		width: 45% !important;
		padding-right: 0px;
		padding-left: 5px;
	}

	.marg_top7 {
		margin-top: 70px;
	}

	.marg_top4 {
		margin-top: 40px;
	}

	.marg_top5 {
		margin-top: 50px;
	}

	.marg_top3 {
		margin-top: 30px;
	}

	.hr1 {
		margin: 30px 0px 40px;
	}

	.error {
		color: red;
		font-size: 14px;
	}

	.form_width1 {
		width: 15% !important;
	}

	.form_width2 {
		width: 20% !important;
	}

	.form_width3 {
		width: 30% !important;
	}

	.resp-form_width4,
	.form_width4 {
		width: 40% !important;
	}

	.part1-text {
		text-align: center;
		font-size: 23px;
		max-width: 1300px;
		margin: auto;
		margin-bottom: auto;
		margin-bottom: 50px;
	}

	.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
		background-color: #ffc107;
	}

	.my-radio > .custom-control-inline {
		min-width: 210px;
	}

@media only screen and (max-width: 1024px) {
    .form_age {
        width: 50% !important;
    }
}
	
@media only screen and (max-width: 768px) {
    .form_age {
        width: 38% !important;
    }
}

@media only screen and (max-width: 575px) {
    h1,
    h2 {
        font-size: 24px;
    }
    p {
        font-size: 15px;
    }
	.form_age {
        width: 34% !important;
    }
    .header-text-bg {
        -webkit-transform: skewX( 0deg);
		-ms-transform: skewX( 0deg);
        transform: skewX( 0deg);
        padding: 5px 40px;
        background: rgba(255, 255, 255, 0.6);
        border-radius: 0px;
        width: 100%;
    }
    .header-bar {
        height: 20px;
    }
    .wypr {
        -webkit-transform: skewX( 0deg);
		-ms-transform: skewX( 0deg);
        transform: skewX( 0deg);
    }
    .marg_top7 {
        margin-top: 30px;
    }
    .marg_top5 {
        margin-top: 30px;
    }
    #czesc2 {
        margin: 50px 0px 70px;
    }
    .footer h4 {
        font-size: 15px;
    }
    .footer p {
        font-size: 13px;
    }
    .resp-alig {
        text-align: center;
    }
    .resp-width8 {
        width: 80px;
    }
    .resp-width50 {
        width: 45%;
    }
    .disp-flex {
        display: block;
    }
    .resp-form_width4 {
        width: 70% !important;
        margin: 0 !important;
    }
    .form_width1 {
        width: 25% !important;
    }
    .header-text {
        font-size: 20px;
    }
    #up {
        max-height: 130px;
        padding: 10px 0px 0px 0px;
    }
    .part1-text {
        font-size: 16px;
    }
    .marg_top3 {
        margin-top: 15px;
    }
}

@media only screen and (max-width: 400px) {
    .form_age {
        width: 44% !important;
    }
}

		
	</style>

</head>

<body>

	<div id="up" class="jumbotron text-center header-bg">
		<div class="header-text-bg">
			<h1 class="wypr">Izabela Xyz - dietetyk kliniczny</h1>
			<p class="wypr header-text">Kwestionariusz żywieniowy</p>
		</div>
	</div>
	<div id="czesc1"></div>
	<div class="header-bar bg-warning">
	</div>

	<div id="czesc1" class="container-fluid marg_top3">
		<p class="part1-text">Proszę o rzetelne wypełnienie kwestionariusza żywieniowego.<br>Szczegółowe odpowiedzi pozwolą mi dokładniej dopasować jadłospis oraz zalecenia żywieniowe do Państwa potrzeb.</p>
		<h2 class="text-center">Część I - dane osobowe oraz parametry ciała</h2>

	</div>
	<form method="post" class="marg_top4">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4 offset-lg-2 pr-lg-4 align-self-center">
					<div class="form-group mb-4">
						<label for="imie">Imię</label>
						<input type="text" class="form-control <?php if (isset($_SESSION['e_imie'])) echo 'is-invalid';?>" id="imie" name="imie" <?php if (isset($imie)) echo 'value="' . $imie . '"' ?> >
						<?php            
						if (isset($_SESSION['e_imie']))
							{
								echo '<div class="error">'.$_SESSION['e_imie'].'</div>';
								unset($_SESSION['e_imie']);
							}
						?>
					</div>
					<div class="form-group mb-4">
						<label for="nazwisko">Nazwisko</label>
						<input type="text" class="form-control <?php if (isset($_SESSION['e_nazwisko'])) echo 'is-invalid';?>" id="nazwisko" name="nazwisko" <?php if (isset($nazwisko)) echo 'value="' . $nazwisko . '"' ?>>
						<?php            
						if (isset($_SESSION['e_nazwisko']))
							{
								echo '<div class="error">'.$_SESSION['e_nazwisko'].'</div>';
								unset($_SESSION['e_nazwisko']);
							}
						?>
					</div>
					<div class="form-group mb-4">
						<label for="nr">Nr telefonu</label>
						<input type="text" class="form-control <?php if (isset($_SESSION['e_nr'])) echo 'is-invalid';?>" id="nr" name="nr" <?php if (isset($nr)) echo 'value="' . $nr . '"' ?>>
						<?php            
						if (isset($_SESSION['e_nr']))
							{
								echo '<div class="error">'.$_SESSION['e_nr'].'</div>';
								unset($_SESSION['e_nr']);
							}
						?>
					</div>
					<div class="form-group mb-4">
						<label for="email">Adres e-mail</label>
						<input type="email" class="form-control <?php if (isset($_SESSION['e_email'])) echo 'is-invalid';?>" id="email" name="email" <?php if (isset($email)) echo 'value="' . $email . '"' ?>>
						<?php            
						if (isset($_SESSION['e_email']))
							{
								echo '<div class="error">'.$_SESSION['e_email'].'</div>';
								unset($_SESSION['e_email']);
							}
						?>

					</div>
					<div class="form-group mb-4">
						<label for="plec">Płeć</label>
						<select class="form-control" id="plec" name="plec">
						<option <?php if (isset($plec) && $plec == "Mężczyzna") echo "selected"; ?>>Mężczyzna</option>
						<option <?php if (isset($plec) && $plec == "Kobieta") echo "selected"; ?>>Kobieta</option>
						<option <?php if (isset($plec) && $plec == "Inna") echo "selected"; ?>>Inna</option>
						</select>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-4 pl-lg-5 align-self-center">
					<div class="form-group mb-4">
						<label for="wiek">Data urodzenia</label>
						<input type="date" class="text_alig form-control form_age <?php if (isset($_SESSION['e_wiek'])) echo 'is-invalid';?>" id="wiek" name="wiek" placeholder="dd-mm-rrrr" min="1918-01-01"<?php if (isset($wiek)) echo 'value="' . $wiek . '"' ?>>
						<?php            
						if (isset($_SESSION['e_wiek']))
							{
								echo '<div class="error">'.$_SESSION['e_wiek'].'</div>';
								unset($_SESSION['e_wiek']);
							}
						?>
					</div>
					<div class="form-group mb-4">
						<label for="waga">Masa ciała (kg)</label>
						<input type="text" class="text_alig form-control form_width3 <?php if (isset($_SESSION['e_waga'])) echo 'is-invalid';?>" id="waga" name="waga" <?php if (isset($waga)) echo 'value="' . $waga . '"' ?>>
						<?php            
						if (isset($_SESSION['e_waga']))
							{
								echo '<div class="error">'.$_SESSION['e_waga'].'</div>';
								unset($_SESSION['e_waga']);
							}
						?>
					</div>
					<div class="form-group mb-4">
						<label for="wzrost">Wzrost (cm)</label>
						<input type="text" class="text_alig form-control form_width3 <?php if (isset($_SESSION['e_wzrost'])) echo 'is-invalid';?>" id="wzrost" name="wzrost" <?php if (isset($wzrost)) echo 'value="' . $wzrost . '"' ?>>
						<?php            
						if (isset($_SESSION['e_wzrost']))
							{
								echo '<div class="error">'.$_SESSION['e_wzrost'].'</div>';
								unset($_SESSION['e_wzrost']);
							}
						?>
					</div>
					<div class="form-group mb-4">
						<label for="talia">Obwód talii (cm)</label>
						<input type="text" class="text_alig form-control form_width3" id="talia" name="talia" <?php if (isset($talia)) echo 'value="' . $talia . '"' ?>>
					</div>
					<div class="form-group">
						<label for="biodra">Obwód bioder (cm)</label>
						<input type="text" class="text_alig form-control form_width3" id="biodra" name="biodra" <?php if (isset($biodra)) echo 'value="' . $biodra . '"' ?>>
					</div>
				</div>
			</div>
		</div>
		<hr class="hr1">
		<div class="container-fluid text-center">
			<h2 class="mx-auto" style="max-width: 95%;">Część II - dane dotyczące stanu zdrowia, aktywności fizycznej oraz sposobu odżywiania</h2>
		</div>
		<div class="container">
			<div class="row marg_top7">
				<div class="col-md-12 col-lg-8 offset-lg-2">
					<div class="form-group mb-5">
						<label for="comment"><u>Zdiagnozowane</u> choroby</label>
						<textarea class="form-control" rows="3" id="comment" name="text1"><?php if (isset($text1)) echo $text1 ?></textarea>
					</div>
					<div class="form-group mb-5">
						<label for="comment2">Przyjmowane leki, suplementy diety, antykoncepcja hormonalna</label>
						<textarea class="form-control" rows="3" id="comment2" name="text2"><?php if (isset($text2)) echo $text2 ?></textarea>
					</div>
					<div class="form-group mb-5">
						<label for="comment3">Dolegliwości ze strony układu pokarmowego (np. wzdęcia, zgaga)</label>
						<textarea class="form-control" rows="3" id="comment3" name="text3"><?php if (isset($text3)) echo $text3 ?></textarea>
					</div>
					<div class="form-group mb-5">
						<label for="comment4">Alergie (pokarmowe, wziewne, skórne)</label>
						<textarea class="form-control" rows="3" id="comment4" name="text4"><?php if (isset($text4)) echo $text4 ?></textarea>
					</div>
					<div class="form-group mb-5">
						<label for="comment5">Czy jest Pani w ciąży? Jeśli tak, to w którym trymestrze?</label>
						<textarea class="form-control" rows="2" id="comment5" name="text5"><?php if (isset($text5)) echo $text5 ?></textarea>
					</div>
					<div class="form-group mb-5">
						<label for="comment6">Czy stosuje Pan/Pani jakieś używki? Jeśli tak to jakie i w jakiej ilości? (papierosy, alkohol)</label>
						<textarea class="form-control" rows="3" id="comment6" name="text6"><?php if (isset($text6)) echo $text6 ?></textarea>

					</div>
					<div class="form-group mb-5">
						<label for="comment7">Wykonywany zawód oraz godziny pracy dla każdego dnia tygodnia</label>
						<textarea class="form-control" rows="2" id="comment7" name="text7"><?php if (isset($text7)) echo $text7 ?></textarea>

					</div>
					<div class="form-group mb-5">
						<label for="comment8">Czy uprawia Pan/Pani regularnie sport? Jeśli tak to jaki i ile godzin w tygodniu?</label>
						<textarea class="form-control" rows="3" id="comment8" name="text8"><?php if (isset($text8)) echo $text8 ?></textarea>

					</div>
					<div class="form-group mb-5">
						<label for="comment9">Czy stostował(a) Pan/Pani kiedyś jakąś dietę? Jeśli tak to jaką, jak długo i z jakim efektem?</label>
						<textarea class="form-control" rows="3" id="comment9" name="text9"><?php if (isset($text9)) echo $text9 ?></textarea>

					</div>
					<div class="form-group mb-5">
						<label for="comment10">Proszę wybać ile posiłków dziennie Pan/Pani spożywa</label><br>
						<select class="form-control text_alig form_width1" id="comment10" name="text10">
						<option <?php if (isset($text10) && $text10 == "1") echo "selected"; ?>>1</option>
						<option <?php if (isset($text10) && $text10 == "2") echo "selected"; ?>>2</option>  
						<option <?php if (isset($text10) && $text10 == "3") echo "selected"; ?>>3</option>
						<option <?php if (isset($text10) && $text10 == "4") echo "selected"; ?>>4</option>
						<option <?php if (isset($text10) && $text10 == "5") echo "selected"; ?>>5</option>
						<option <?php if (isset($text10) && $text10 == "6") echo "selected"; ?>>6</option>
						<option <?php if (isset($text10) && $text10 == "7") echo "selected"; ?>>7</option>
						<option <?php if (isset($text10) && $text10 == "8") echo "selected"; ?>>8</option>
						</select>
					</div>
					<div class="form-group mb-5">
						<label for="comment11">Proszę wymienić produkty oraz dania, których Pan/Pani nie lubi</label>
						<textarea class="form-control" rows="3" id="comment11" name="text11"><?php if (isset($text11)) echo $text11 ?></textarea>

					</div>
					<div class="form-group mb-5">
						<label for="comment12">Proszę wymienić produkty oraz dania, z których Pan/Pani nie jest w stanie zrezygnować</label>
						<textarea class="form-control" rows="3" id="comment12" name="text12"><?php if (isset($text12)) echo $text12 ?></textarea>

					</div>
					
					<div class="form-group mb-5 my-radio">
						<p>Jak często spożywa Pan/Pani warzywa?</p>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="comment13a" name="text13" class="custom-control-input" value="1" <?php if (isset($text13) && $text13=="3 lub więcej porcje na dzień") echo 'checked="checked"'; ?>>
							<label class="custom-control-label" for="comment13a">3 lub więcej porcje na dzień</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" id="comment13b" name="text13" class="custom-control-input" value="2" <?php if (isset($text13) && $text13=="1-2 porcje na dzień") echo 'checked="checked"'; ?>>
						  <label class="custom-control-label" for="comment13b">1-2 porcje na dzień</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" id="comment13c" name="text13" class="custom-control-input" value="3" <?php if (isset($text13) && $text13=="4-6 porcje na tydzień") echo 'checked="checked"'; ?>>
						  <label class="custom-control-label" for="comment13c">4-6 porcje na tydzień</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" id="comment13d" name="text13" class="custom-control-input" value="4" <?php if (isset($text13) && $text13=="1-3 porcje na tydzień") echo 'checked="checked"'; ?>">
						  <label class="custom-control-label" for="comment13d">1-3 porcje na tydzień</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" id="comment13e" name="text13" class="custom-control-input" value="5" <?php if (isset($text13) && $text13 == "Wcale") echo 'checked="checked"'; ?>>
						  <label class="custom-control-label" for="comment13e">Wcale</label>
						</div>
					</div>
							
						
											
					<div class="form-group mb-5 my-radio">
						<p>Jak często spożywa Pan/Pani owoce?</p>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="comment14a" name="text14" class="custom-control-input" value="1" <?php if (isset($text14) && $text14=="3 lub więcej porcje na dzień") echo 'checked="checked"'; ?>>
							<label class="custom-control-label" for="comment14a">3 lub więcej porcje na dzień</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" id="comment14b" name="text14" class="custom-control-input" value="2" <?php if (isset($text14) && $text14=="1-2 porcje na dzień") echo 'checked="checked"'; ?>>
						  <label class="custom-control-label" for="comment14b">1-2 porcje na dzień</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" id="comment14c" name="text14" class="custom-control-input" value="3" <?php if (isset($text14) && $text14=="4-6 porcje na tydzień") echo 'checked="checked"'; ?>>
						  <label class="custom-control-label" for="comment14c">4-6 porcje na tydzień</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" id="comment14d" name="text14" class="custom-control-input" value="4" <?php if (isset($text14) && $text14=="1-3 porcje na tydzień") echo 'checked="checked"'; ?>>
						  <label class="custom-control-label" for="comment14d">1-3 porcje na tydzień</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
						  <input type="radio" id="comment14e" name="text14" class="custom-control-input" value="5" <?php if (isset($text14) && $text14=="Wcale") echo 'checked="checked"'; ?> >
						  <label class="custom-control-label" for="comment14e">Wcale</label>
						</div>
					</div>
					
			
					<div class="form-group mb-5">
						<label for="comment15">Jak często spożywa Pan/Pani mięso, jakie i jaki jest sposób jego przygotowania (gotowanie, smażenie, duszenie, pieczenie)?</label>
						<textarea class="form-control" rows="3" id="comment15" name="text15"><?php if (isset($text15)) echo $text15 ?></textarea>

					</div>
					<div class="form-group mb-5">
						<label for="comment16">Ile płynów dziennie Pan/Pani spożywa (wliczając wodę, kawę, herbatę oraz słodkie napoje)?</label>
						<textarea class="form-control" rows="3" id="comment16" name="text16"><?php if (isset($text16)) echo $text16 ?></textarea>
					</div>
					<div class="form-group mb-5">
						<label for="comment17">Jak często spożywa Pan/Pani słodycze oraz przekąski? Jakie?</label>
						<textarea class="form-control" rows="3" id="comment17" name="text17"><?php if (isset($text17)) echo $text17 ?></textarea>
					</div>
					<div class="form-group">
						<label for="comment18">Jak często spożywa Pan/Pani dania gotowe oraz dania typu fast food (kupne pierogi, krokiety, pizza, hamburger)?</label>
						<textarea class="form-control" rows="3" id="comment18" name="text18"><?php if (isset($text18)) echo $text18 ?></textarea>

					</div>
				</div>
			</div>
		</div>
		<hr class="hr1">
		<div class="container-fluid text-center">
			<h2 class="mx-auto" style="max-width: 95%;">Część III - preferencje przyszłej diety</h2>
		</div>
		<div class="container">
			<div class="row marg_top7">
				<div class="col-md-12 col-lg-8 offset-lg-2">
					<div class="form-group mb-5">
						<label for="waga_docelowa">Ile chciał(a)by Pan/Pani ważyć?</label>
						<input type="text" class="text_alig form-control form_width1" id="waga_docelowa" name="waga_docelowa" <?php if (isset($waga_docelowa)) echo 'value="' . $waga_docelowa . '"' ?>>
					</div>
					<div class="form-group mb-5">
						<label for="comment19">Proszę wybać ile posiłków chciał(a)by Pan/Pani mieć w diecie</label>
						<select class="form-control text_alig form_width1" id="comment19" name="text19">
						<option <?php if (isset($text19) && $text19 == "2") echo "selected"; ?>>2</option>
						<option <?php if (isset($text19) && $text19 == "3") echo "selected"; ?>>3</option>
						<option <?php if (isset($text19) && $text19 == "4") echo "selected"; ?>>4</option>
						<option <?php if (isset($text19) && $text19 == "5") echo "selected"; ?>>5</option>
						<option <?php if (isset($text19) && $text19 == "6") echo "selected"; ?>>6</option>
						<option <?php if (isset($text19) && $text19 == "7") echo "selected"; ?>>7</option>
						</select>
					</div>
					<div class="form-group mb-5">
						<label for="comment20">Proszę wymienić godziny oraz miejsce, w których Pan/Pani mógłby/mogłaby spożywać posiłki<br>(np I śniadanie godz. 8:00 - dom, II śniadanie godz. 11:30 - praca)</label>
						<textarea class="form-control" rows="4" id="comment20" name="text20"><?php if (isset($text20)) echo $text20 ?></textarea>

					</div>
					<div class="form-group mb-5">
						<p>Proszę zaznaczyć, które z poniższych sprzętów kuchennych Pan/Pani posiada</p>
						<div class="form-check form-check-inline custom-checkbox resp-width50">
							<input class="form-check-input custom-control-input mr-2" type="checkbox" id="sprzet1" name="sprzet1" value="mikser" <?php if (isset($sprzet1) && $sprzet1=="mikser, " ) echo "checked"; ?>>
							<label class="form-check-label custom-control-label" for="sprzet1">Mikser</label>
						</div>
						<div class="form-check form-check-inline custom-checkbox resp-width50">
							<input class="form-check-input custom-control-input mr-2" type="checkbox" id="sprzet2" name="sprzet2" value="blender" <?php if (isset($sprzet2) && $sprzet2=="blender, " ) echo "checked"; ?>>
							<label class="form-check-label custom-control-label" for="sprzet2">Blender</label>
						</div>
						<div class="form-check form-check-inline custom-checkbox resp-width50">
							<input class="form-check-input custom-control-input mr-2" type="checkbox" id="sprzet3" name="sprzet3" value="grill" <?php if (isset($sprzet3) && $sprzet3=="grill, " ) echo "checked"; ?>>
							<label class="form-check-label custom-control-label" for="sprzet3">Grill</label>
						</div>
						<div class="form-check form-check-inline custom-checkbox resp-width50">
							<input class="form-check-input custom-control-input mr-2" type="checkbox" id="sprzet4" name="sprzet4" value="sokowirówka" <?php if (isset($sprzet4) && $sprzet4=="sokowirówka, " ) echo "checked"; ?>>
							<label class="form-check-label custom-control-label" for="sprzet4">Sokowirówka</label>
						</div>
						<div class="form-check form-check-inline custom-checkbox resp-width50">
							<input class="form-check-input custom-control-input mr-2" type="checkbox" id="sprzet5" name="sprzet5" value="gofrownica" <?php if (isset($sprzet5) && $sprzet5=="gofrownica, " ) echo "checked"; ?>>
							<label class="form-check-label custom-control-label" for="sprzet5">Gofrownica</label>
						</div>
						<div class="form-check form-check-inline custom-checkbox resp-width50">
							<input class="form-check-input custom-control-input mr-2" type="checkbox" id="sprzet6" name="sprzet6" value="toster" <?php if (isset($sprzet6) && $sprzet6=="toster, " ) echo "checked"; ?>>
							<label class="form-check-label custom-control-label" for="sprzet6">Toster</label>
						</div>
						<div class="form-group mt-3 mb-5 disp-flex">
							<label for="sprzet7">inne (jakie?)</label>
							<textarea class="form-control resp-form_width4 ml-3" rows="2" id="sprzet7" name="sprzet7"><?php if (isset($sprzet7)) echo $sprzet7 ?></textarea>
						</div>
					</div>
					<div class="form-group mb-5">
						<label for="comment21">Informacje dodatkowe, sugestie</label>
						<textarea class="form-control" rows="4" id="comment21" name="text21"><?php if (isset($text21)) echo $text21 ?></textarea>
					</div>
					<div class="form-check custom-checkbox">
						<input class="form-check-input custom-control-input mr-2" type="checkbox" id="note" name="note" value="Akceptuję" required>
						<label class="form-check-label custom-control-label note-label" for="note">
						  Niniejszym oświadczam, że wyrażam zgodę na przetwarzanie moich danych, w tym danych szczególnej kategorii danych, tj. o stanie mojego zdrowia przez Izabelę Xyz w celach związanych z relizacją umowy o świadczenie usług dietetycznych, zgodnie z rozporządzeniem ogólnym o ochronie danych osobowych nr 2016/679.
						</label>
					</div>
				</div>
			</div>
			<div class="row marg_top7">
				<button type="submit" class="btn btn-warning btn-lg mx-auto" style="padding-right: 40px; padding-left: 40px;">Wyślij</button>
			</div>
		</div>
	</form>
	<div class="jumbotron footer text-center marg_top5">
		<!--<a href="#up" class="btn btn-outline-dark btn-sm mx-auto" role="button" style="margin-top: -60px;">Do góry</a>-->
		<h4>W razie pytań zachęcam do kontaktu:</h4>
		<p>Izabela Xyz<br>tel: <a href="tel:+48500400300">+48 500 400 300</a><br>e-mail: <a href="mailto:dietetyk@example.com">dietetyk@example.com</a></p>
	</div>

</body>

</html>
