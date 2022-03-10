<?php require_once('connection.php');?>
<?php function getToken($len = 10){
	$charSet = "abcdefghijklmnopqrstuvwABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	srand((double)microtime()*1000000);
	$token = '';
	/*for($i = 0; $i < $len; $i++){
		$token .= $charSet[rand() % strlen(charSet)];
	}*/
	$token = substr(str_shuffle($charSet), 0, $len);
	
	return $token;
}?>
<?php 
if(isset($_POST)){
	$lastname = filter_var(trim($_POST['lastname']),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	$firstname = filter_var(trim($_POST['firstname']),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	$matric_no = filter_var(trim($_POST['matric_no']),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	$grad_year = filter_var(trim($_POST['grad_year']),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	$inst_email = filter_var(trim($_POST['inst_email']),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	
	$cert_file_name = $_FILES['certificate_upload']['name'];
	move_uploaded_file($_FILES['certificate_upload']['tmp_name'], 'uploads/'.$_FILES['certificate_upload']['name']);
	
	$token = getToken(32);
	
	$sql = "INSERT INTO applications (matric_no, lastname, firstname, grad_year, inst_email, cert_file, token) VALUES ('{$matric_no}', '{$lastname}', '{$firstname}', '{$grad_year}', '{$inst_email}', '{$cert_file_name}', '{$token}')";
	if($connection->query($sql) === true){
		$message = 'We received an application from '. $_POST['lastname'].' '.$_POST['firstname'].', a graduate from your institution with matric No.: '. $_POST['matric_no'].'. Kindly help us verify his/her claim through this link <a href="'.$_SERVER['HOST_NAME'].'/approvalpage.php?token='.$token.'">VERIFY CLAIM</a> ';
		@mail($inst_email, 'afemiopadere@yahoo.com', $message);
		header('Location: confirmation.php');
	}else{
		echo $connection->error;
	}
	
	$connection->close();
}
?>