<?php  
	session_start();
	if (!$_SESSION["LoginAdmin"])
	{
		header('location:../login/login.php');
	}
		require_once "../connection/connection.php";
	?>
<?php 
 	if (isset($_POST['btn_save'])) {
 		$teacher_id=$_POST["teacher_id"];
 		$basic_salary=$_POST["basic_salary"];
 		$query="insert into teacher_salary_allowances(teacher_id,basic_salary)values('$teacher_id','$basic_salary')";
 		$run=mysqli_query($con, $query);
 		if ($run) {
 			echo "Verileriniz gönderildi";
 		}
 		else {
 			echo "Verileriniz gönderilmedi";
 		}
 	}
 	if (isset($_POST['btn_sub'])) {
 		$teacher_id=$_POST["teacher_id"];
 		$query="select * from teacher_salary_allowances where teacher_id='$teacher_id'";
 		$run=mysqli_query($con, $query);
 		while ($row=mysqli_fetch_array($run)) {
 			$total_amount=$row['basic_salary'];
 			$query1="INSERT INTO teacher_salary_report(teacher_id,status) VALUES ('$teacher_id','Paid')";
 			$run1=mysqli_query($con, $query1);
	 		if ($run1) {  ?>
	 			<script type="text/javascript">
	 				alert("Maaş Ödendi: "+<?php echo $row['teacher_id'] ?>);
	 			</script>
	 		<?php }
	 		else { ?>
	 			<script type="text/javascript">
	 				alert("Maaş Ödenirken Sorun yaşandı");
	 			</script>
	 		<?php }
 	    }
 	}
?>
<!doctype html>
<html lang="en">
	<head>
		<title>Admin - Teacher Salary</title>
	</head>
	<body>
		<?php include('../common/common-header.php') ?>
		<?php include('../common/admin-sidebar.php') ?>
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 w-100">
			<div class="sub-main">
				<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<div class="d-flex">
						<h4 class="mr-5">Öğretmen Maaş Yönetim Sistemi </h4>
						<button type="button" class="btn btn-primary ml-5 mr-5" data-toggle="modal" data-target=".bd-example-modal-lg">Maaş</button>
						<button type="button" class="btn btn-primary ml-5" data-toggle="modal" data-target=".add_salary">Maaş Ekle</button>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 ml-2">
						<section class=" mt-3">
							<div class="row">
								<div class="col-md-8"></div>
								<div class="col-md-3 ml-5 ">
									<div class="col-md-12 pt-3 ml-5">
										<!-- Large modal -->
										<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header bg-info text-white">
														<h4 class="modal-title text-center">Maaş Ekle</h4>
													</div>
													<div class="modal-body">
														<form action="teacher-salary.php" method="post">
															<div class="row mt-3">
																<div class="col-md-6 pr-5">
																	<div class="form-group">
																		<label for="exampleInputEmail1">Öğretmen I'd: </label>
																		<input type="text" name="teacher_id" class="form-control" placeholder="Öğretmen ID Giriniz">
																	</div>
																</div>
																<div class="col-md-6 pr-5">
																	<div class="form-group">
																		<label for="exampleInputEmail1">Temel Maaş:</label>
																		<input type="text" name="basic_salary" class="form-control" placeholder="Temel Maaş Giriniz">
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<input type="submit" class="btn btn-primary" name="btn_save" value="Kaydet">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
															</div> 	
														</form>
													</div>
												</div>
										</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8"></div>
								<div class="col-md-3 ml-5 ">
									<div class="col-md-12 pt-3 ml-5">
										<!-- Large modal -->
										<div class="modal fade add_salary" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header bg-info text-white">
														<h4 class="modal-title text-center">Maaş Ekle</h4>
													</div>
													<div class="modal-body">
														<form action="teacher-salary.php" method="post">
															<div class="row mt-3">
																<div class="col-md-12 pr-5">
																	<div class="form-group">
																		<label for="exampleInputEmail1">Teacher I'd: </label>
																		<input type="text" name="teacher_id" class="form-control" placeholder="Öğretmen ID Giriniz">
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<input type="submit" class="btn btn-primary" name="btn_sub" value="Kaydet">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
															</div> 	
														</form>
													</div>
												</div>
										</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<table class="w-100 table-elements table-three-tr" cellpadding="3">
										<tr class="table-tr-head table-three text-white">
											<td colspan="9" class=" text-center text-white"><h4>Bütün Öğretmenler Maaş Raporu</h4></td>
										</tr>
										<tr class="table-tr-head">
											<th>Maaş Fişi</th>
											<th>I'd</th>
											<th>İsim</th>
											<th>Temel Maaşı</th>	
										</tr>
										<?php  
											$query="select tsr.teacher_id,ti.first_name,middle_name,last_name,salary_id,basic_salary,Date(paid_date) as paid_date,total_amount from teacher_salary_allowances tsa inner join teacher_salary_report tsr on tsa.teacher_id=tsr.teacher_id inner join teacher_info ti on ti.teacher_id=tsr.teacher_id";
											$run=mysqli_query($con,$query);
											while ($row=mysqli_fetch_array($run)) { ?>
												<tr>
													<td><?php echo $row['salary_id'] ?></td>
													<td><?php echo $row['teacher_id'] ?></td>
													<td><?php echo $row["first_name"]." ".$row["middle_name"]." ".$row["last_name"] ?></td>
													<td><?php echo $row['basic_salary'] ?></td>
												</tr>		
											<?php
											}
										?>
									</table>
								</div>
							</div>				
						</section>
					</div>
				</div>
			</div>
		</main>
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>

