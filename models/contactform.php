<?php
    $errEmail = '';
    $errOnderwerp = '';
    $errBericht = '';
    

	if (isset($_POST["submit"])) {
		$email = $_POST['email'];
        $onderwerp = $_POST['onderwerp'];
		$bericht = $_POST['bericht'];
		$from = 'Er is contact opgenomen via de StarterPoint website.'; 
		$to = 'info@starterpoint.nl'; 
		$subject = 'Bericht van de Starterpoint website';
		
		$body = " Email: $email\n Onderwerp: $onderwerp\n Bericht: $bericht\n ";
		
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Vul aub een correcte e-mailadress in';
		}
        
        if (!$_POST['onderwerp']) {
			$errOnderwerp = 'Vul uw onderwerp aub in';
		}
		
		if (!$_POST['bericht']) {
			$errBericht = 'Vul uw bericht aub in';
		}

// If there are no errors, send the email
if (!$errEmail && !$errOnderwerp && !$errBericht) {
	if (mail ($to, $subject, $body, $from)) {
        
        echo '<script>';
        echo 'alert("Bedankt, Uw bericht is verstuurd.");';
        echo 'location.href="../index.html"';
        echo  '</script>';
	} else {
    
		echo '<script>';
        echo 'alert("Er is een probleem ontstaan.");';
        echo 'location.href="../index.html"';
        echo  '</script>';
	}
}
	}
?>