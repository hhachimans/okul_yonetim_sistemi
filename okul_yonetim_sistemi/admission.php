<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
</head>
<body>
	<?php include('common/header.php') ?>
	<div class="container-fuild">
		<div class="row pt-2">
			<div class="col-xl-12 col-lg-12 col-md-12 w-100">
				<div class="bg-info text-center">
					<div class="table-one flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
						<h4>Online Addmission Form</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-md-12">
				<form action="student.php" method="POST" enctype="multipart/form-data">
					<div class="row mt-3">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputMail1">Applicant First Name:*</label>
								<input type="text" name="first_name" class="form-control" required> 
							</div>
						</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="exampleInputPassword1">Applicant Middle Name:*</label>
									<input type="text" name="middle_name" class="form-control">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="exampleInputPassword1" required>Applicant Last Name:*</label>
									<input type="text" name="last_name" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								<label for="exampleInputEmail1">Father Name:*</label>
								<input type="text" name="father_name" class="form-control" required>
	
								</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Applicant Email:*</label>
								<input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Mobile No:*</label>
								<input type="number" name="mobile_no" class="form-control" required>
							</div>
						</div>
						</div>

						<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Course which you want?: </label>
								<select class="browser-default custom-select" name="course_code">
									<option >Select Course</option>
									<?php
										$query="select course_code from courses";
										$run=mysqli_query($con,$query);
										while($row=mysqli_fetch_array($run)) {
											echo	"<option value=".$row['course_code'].">".$row['course_code']."</option>";
										}
									?>
								</select>
							</div>
						</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="exampleInputPassword1">Select Session :</label>
									<select class="browser-default custom-select" name="session">
										<option>Select Session</option>
										<?php
										$query="select session from sessions";
										$run=mysqli_query($con,$query);
										while ($row=mysqli_fetch_array($run)) {
											echo "<option value=".$row['session'].">".$row['session']."</option>";
										}?>
									</select>

								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Your Profile Image:</label>
								<input type="file" name="profile_image" placeholder="Student Age" class="form-control">
							</div>
						</div>
					</div>

					

				

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputEmail1">Date of Birth: </label>
								<input type="date" name="dob" class="form-control">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Other Phone:</label>
								<input type="number" name="other_phone" class="form-control">

							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleInputPassword1">Gender:</label>
								<select class="browser-default custom-select" name="gender">
									<option>Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>
						</div>
					</div>

					<div>
						<input type="hidden" name="password" value="student123*">
						<input type="hidden" name="role" value="Student">
					</div>

					<div class="modal-footer">
						<input type="submit" name="btn_save" class="btn btn-primary px-5">

					
					</div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 w-100 p-5">
				<h4 class="bg-secondary p-3 text-center text-white">Undertaking</h4>
				<h5>Candidates awaiting results are required to sign the following undertaking:</h5>
				<p class="tet-justify">
					I solemnly declare that I have submitted the application with the consent of my father / guardian. I pledge to abide by the Rules and Regulations of the ICBS Lahore and shall not take part in political activities of any kind. If I do so the ICBS Administration will have the right to strike my name off the ICBS Rolls. I pledge that I will not keep in my possession weapons of any kind whether licensed or unlicensed. I affirm that I was never expelled / rusticated by any Institution at any time. I understand that if my class attendance percentage is not up to the required standard of the ICBS, I will not be eligible to sit in the final examinations. I affirm that if at any stage the documents submitted by me for admission are proved forged, fake, or erroneous I shall be responsible for that and the ICBS Administration shall be rightful to cancel my admission and to take necessary action against me.
					I solemnly declare that I have submitted the application with the consent of my father / guardian. I pledge to abide by the Rules and Regulations of the ICBS Lahore and shall not take part in political activities of any kind. If I do so the ICBS Administration will have the right to strike my name off the ICBS Rolls. I pledge that I will not keep in my possession weapons of any kind whether licensed or unlicensed. I affirm that I was never expelled / rusticated by any Institution at any time. I understand that if my class attendance percentage is not up to the required standard of the ICBS, I will not be eligible to sit in the final examinations. I affirm that if at any stage the documents submitted by me for admission are proved forged, fake, or erroneous I shall be responsible for that and the ICBS Administration shall be rightful to cancel my admission and to take necessary action against me..
				</p>
			</div>
		</div>	
	</div>

</body>
</html>