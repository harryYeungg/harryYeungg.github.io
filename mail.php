<?php  
$email = $_POST["email"];
echo "what is happening " . $email;

if (mail($email, "hi" , "fdfdf")) {
	echo "you have succeeded";
}


?>