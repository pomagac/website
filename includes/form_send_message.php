<?php	
	if(empty($_POST['ime']) && strlen($_POST['ime']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['sporocilo']) && strlen($_POST['sporocilo']) == 0)
	{
		return false;
	}
	
	$ime = $_POST['ime'];
	$email = $_POST['email'];
	$tema = $_POST['tema'];
	$sporocilo = $_POST['sporocilo'];
	$form_not_a_robot = $_POST['form_not_a_robot'];
	
	$to = 'info@pomagac.si'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Novo sporočilo";
	$email_body = "Prejeli smo novo sporočilo s spletne strani pomagac.si! \n\n".
				  "Ime: $ime \nEmail: $email \nTema: $tema \nSporocilo: $sporocilo \nForm_Not_A_Robot: $form_not_a_robot \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: online-form@pomagac.si\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
