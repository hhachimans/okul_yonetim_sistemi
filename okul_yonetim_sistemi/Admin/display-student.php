<!---------------- Session starts form here ----------------------->
<?php  
	session_start();
	
	if ($_SESSION["LoginAdmin"])
	{
		$roll_no=$_GET['roll_no'] ?? $_SESSION['LoginStudent'];
	}
	else if(!$_SESSION["LoginAdmin"] && $_SESSION['LoginStudent']){
		$roll_no=$_SESSION['LoginStudent'];
	}
	else{ ?>
		<script> alert("Your Are Not Authorize Person For This link");</script>
	<?php
		header('location:../login/login.php');
	}
	require_once "../connection/connection.php";
	?>
<!---------------- Session Ends form here ------------------------>


<!doctype html>
<html lang="en">
	<head>
		<title>Admin - Student Information</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
	<?php
	$query="select * from student_info where roll_no='$roll_no'";
	$run=mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($run)) {
		?>
		<div class="container  mt-1 border border-secondary mb-1">
			<div class="row text-white bg-primary pt-5">
				<div class="col-md-4">
					<?php  $profile_image= $row["profile_image"] ?>
					<img class="ml-5 mb-5" height='290px' width='250px' src=<?php echo "images/$profile_image"  ?> >
				</div>
				<div class="col-md-8">
					<h3 class="ml-5"><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'] ?></h3><br>
					<div class="row">
						<div class="col-md-6">
							<h5>Baba Adı:</h5> <?php echo $row['father_name']  ?><br><br>
							<h5>Email:</h5> <?php echo $row['email']  ?><br><br>
							
						</div>
						<div class="col-md-6">
							<h5>Rol ID:</h5> <?php echo $row['roll_no']  ?><br><br>
							<h5>Telefon:</h5> <?php echo $row['mobile_no']  ?><br><br>
						</div>		
					</div>
				</div>
				<hr>
			</div>
			
			<div class="row pt-3">
				<div class="col-md-4"><h5>Telefon:</h5> <?php echo $row['mobile_no']  ?></div>
			    <div class="col-md-4"><h5>Kayıt Tarihi</h5><?php echo$row['admission_date']?></div>
	            <div class="col-md-4"><h5>Cinsiyeti:</h5> <?php echo $row['gender']  ?></div>
			</div>
			<div class="row pt-3">
				
				<div class="col-md-4"><h5>Kursu:</h5> <?php echo $row['course_code']  ?></div>
				<div class="col-md-4"><h5>Sınıfı:</h5> <?php echo $row['session']  ?></div>
			</div>
			
			
			
		
		</div>
	<?php } ?>
</body>
</html>
