
<?php  
	session_start();

	if ($_SESSION["LoginAdmin"] && !$_SESSION['LoginTeacher'])
	{
		$teacher_id=$_GET['teacher_id'];
	}
	else if(!$_SESSION["LoginAdmin"] && $_SESSION['LoginTeacher']){
		$teacher_email=$_SESSION['LoginTeacher'];
		$teacher_id="";
	}
	else{ ?>
		<script> alert("Your Are Not Autorize Person For This link");</script>
	<?php
		header('location:../login/login.php');
	}
	require_once "../connection/connection.php";
?>



<!doctype html>
<html lang="en">
	<head>
		<title>Admin - Teacher Information</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
	<?php
		if($teacher_id){
			$query="select * from teacher_info where teacher_id='$teacher_id'";
		}
		else{
			$query="select * from teacher_info where email='$teacher_email'";
		}
		
		$run=mysqli_query($con,$query);
		while ($row=mysqli_fetch_array($run)) {
	?>
		<div class="container  mt-1 border border-secondary mb-1">
			<div class="row text-white bg-primary pt-5">
				<div class="col-md-4">
					<?php  $profile_image= $row["profile_image"] ?>
					<img class="ml-5 mb-5" height='270px' width='250px' src=<?php echo "images/$profile_image"  ?> >
				</div>
				<div class="col-md-8">
					<h3 class="ml-5"><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name'] ?></h3><br>
					<div class="row">
						<div class="col-md-6">
					        <h5>Öğretmen ID:</h5> <?php echo $row['teacher_id']  ?><br><br>							
							<h5>Telefon:</h5> <?php echo $row['phone_no']  ?><br><br>
						</div>
						<div class="col-md-6">
							<h5>Cilt No:</h5> <?php echo $row['cnic']  ?><br><br>
							<h5>Email:</h5> <?php echo $row['email']  ?><br><br>
						</div>		
					</div>
				</div>
				<hr>
			</div>
			<div class="row pt-3">
			
				<div class="col-md-4"><h5>Cinsiyet:</h5> <?php echo $row['gender']  ?></div>
                <div class="col-md-4"><h5>Kayıt Tarihi</h5><?php echo $row['hire_date'] ?></div>
				<div class="col-md-4"><h5>Doğum Tarihi:</h5> <?php echo $row['dob']  ?></div>
			</div>

			
			
			
		</div>
	<?php } ?>
</body>
</html>
