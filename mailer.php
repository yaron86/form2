<?php

if(isset($_POST['send'])){

// echo "sdf";
	if (!$_POST['name']) {
		$error .= "נא למלא שם";
	}

	if (!$_POST['phone']) {
		$error .= "<br>נא למלא טלפון";
	}


	if($error){
		$result = $error;
		echo $result;
	} else {
		$to = "yaron86@gmail.com , yaronseller@gmail.com";
		$subject = "פניה מדף נחיתה";
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$headers = "From: שקוף";
		$body = "שם: $name\nטלפון: $phone";
		mail($to, $subject, $body ,$headers);

		echo "<h2>הפניה נשלחה</h2>";
	}

}




// $headers= "From: The Sending Name <noreply@rilburskryler.net>\r\n";
// $headers.= "Reply-To: The Reply To Name <noreply@rilburskryler.net>\r\n";
// $headers.= "X-Mailer: PHP/" . phpversion()."\r\n";
// $headers.= "MIME-Version: 1.0" . "\r\n";
// $headers.= "Content-type: text/html; charset=iso-8859-1\r\n";
// $headers.= "BCC: $emailList";

?>


