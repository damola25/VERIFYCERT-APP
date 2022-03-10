<?php require_once('connection.php');?>
<?php 
	if(!isset($_GET['token']) && !isset($_GET['status'])){
		header('Location: index.html');
	}
	$token = $_GET['token'];
	$status = $_GET['status'];
	
	$sql = "SELECT * FROM applications WHERE token = '{$token}'";
	$result = $connection->query($sql);
	if($result->num_rows > 0){		
		$sql = "UPDATE applications SET token = NULL, status = '{$status}' WHERE token = '{$token}'";
		if($connection->query($sql) === true){
			$row = $result->fetch_assoc();
			//$message = "thak you ";
			//@mail(registrar@redeemerUniversity.edu.ng, $row['inst_mail'], $message);
			echo "Verification completed. Thank you";
		}else{
			echo $connection->error;
		}
		
	}else{
		header('Location: index.html');
	}
	
	$connection->close();
?>