<?php
//print_r($_POST);
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];

if(isset($_POST['firstname'])==true){
	$data=$fname." ".$lname. PHP_EOL ."";
	$fp = fopen('fulldata.txt', 'a');
	
	fwrite($fp, $data);
	fclose($fp);
	echo"Successfully registered. Welcome $fname.";
	echo"<br><br><a href='index.php'>Take me back to registration page.</a>";
}
else{
	echo"registration failed...try again";
}
?>
