<?php require_once('connection.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CERTIFICATE VERIFICATION FORM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
<!--===============================================================================================-->
</head>
<body>


	
				<span class="verify100-form-title">
					APPROVAL Page 
				</span>

				
				<label class="label-input100" for="first-name">Candidates</label>
				 
               
				<div class = "table-responsive-m">
				<table class = "table" >	
					<thead>
						<tr>
							<th scope = "col">Name</th>
							<th scope = "col">Institution mail</th>
							<th scope = "col">Certificate</th>
							<th scope = "col">Status</th>
							<th scope = "col">Matric No</th>
							<th scope = "col">Approve</th>
							<th scope = "col">Reject</th>
						</tr>
						<tr>
							<td>Adedamola</td>
							<td>afemiopadere@yahoo.com</td> 
							<td>Doc1.docx</td>
							<td>1</td>
							<td>RUN/CMP/14/3324</td>
							<td>YES</td>
							<td>NO</td>
						</tr>
						<tr>
							<td>Tobiloba Dada</td>
							<td>afemiopadere@yahoo.com</td> 
							<td>cert.docx</td>
							<td>0</td>
							<td>RUN/CMP/14/5758</td>
							<td>NO</td>
							<td>YES</td>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td scope = "col"><?php echo $row['lastname'], ' ', $row['firstname'];?></td>
							<td scope = "col"><?php echo $row['inst_email'];?></td>
							<td scope = "col"><a href="uploads/<?php echo $row['cert_file'];?>" target="_blank">View</a></td>
							<td scope = "col"><?php if($row['status'] == 1){echo '<span class="text-success">Accepted</span>';}elseif($row['status'] == 0){ echo '<span class="text-warning">Waiting...</span>';}else{ echo '<span class="text-danger">Rejected</span>';}?></td>
							<td scope = "col"><?php echo $row['matric_no'];?></td>
							<td scope = "col"><a href="verify-claim.php?token=<?php echo $row['token'];?>&status=1">Approve</a></td>
							<td scope = "col"><a href="verify-claim.php?token=<?php echo $row['token'];?>&status=0">Reject</a></td>
						</tr> -->
					</tbody>
					</table>
				</div>
				
		
				
				
				
			
		
	



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/verify.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
