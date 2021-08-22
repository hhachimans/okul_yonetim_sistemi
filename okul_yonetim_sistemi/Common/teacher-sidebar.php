<div class="row w-100">
	<button class="show-btn button-show ml-auto">
		<i class="fa fa-bars py-1" aria-hidden="true"></i>
	</button>
</div>
    
    <nav class="sidebarMenu" class="">
    	<div class="col-xl-2 col-lg-3 col-md-4 sidebar position-fixed border-rigth">
    		<div class="sidebar-header">
    			<a href="../teacher/teacher-index.php" class="nav-link text-white">
    			<span class="home"></span>
    			<i class="fa fa-home mr-2" aria-hidden="true"></i>Gösterge Paneli
    			</a>
    		</div>
    		<ul class="nav flex-column">
    			<li class="nav-item">
    				<a href="../admin/display-teacher.php" class="nav-link">
    					<span data-feather="file"></span>
    				<i class="fa fa-user mr-2" aria-hidden="true"></i>Kişisel Profil
    				</a>
    			</li>

    			<li class="nav-item">
    				<a href="../teacher/teacher-personal-information.php" class="nav-link">
    					<span data-feather="file"></span>
    				<i class="fa fa-info-circle mr-2" aria-hidden="true"></i> Kişisel Bilgi
    			</a>
    			</li>

    			<li class="nav-item">
    				<a href="../teacher/teacher-courses.php" class="nav-link">
    					<span data-feather="shopping-cart"></span>
    					<i class="fa fa-address-book mr-2" aria-hidden="true"></i>Öğretmen Kursları
    				</a>
    			</li>

    			<li class="nav-item">
    				<a href="../teacher/student-attendance.php" class="nav-link">
    					<span data-feather="users"></span>
    					<i class="fa fa-check-circle mr-2" aria-hidden="true"></i> Öğrenci Katılımı
    				</a>
    			</li>

    			<li class="nav-item">
    				<a href="../teacher/class-result.php" class="nav-link">
    					<span data-feather="users"></span>
    					<i class="fa fa-user mr-2" aria-hidden="true"></i>Sınıf Sonucu
    				</a>
    			
    			</li>
    			<li class="nav-item">
						<a class="nav-link" href="../teacher/teacher-password.php">
						<span data-feather="bar-chart-2"></span>
						<i class="fa fa-key mr-2" aria-hidden="true"></i> Şifre Değiştir
						</a>
					</li>
    			
    		</ul>
    	</div>

    </nav>

    <script>
    	const toggleBtn=document.querySelector(".show-btn");
    	const sidebar=document.querySelector(".sidebar");

    	toggleBtn.addEventListener("click"function(){
    		sidebar.classList.toggle("show-sidebar");
    		});
    </script>