<div class="row w-100">
	<button class="show-btn button-show ml-auto">
	<i class="fa fa-bars py-1" aria-hidden="true"></i>
    </button>

</div>
    <nav id="sidebarMenu" class="">
    	<div class="col-xl-2 col-lg-3 col-md-4 sidebar position-fixed border-rigth">
    		<div class="sidebar-header">
    			<div class="nav-item">
    				<a href="../Student/student-index.php" class="nav-link text-white">
    				<span class="home"></span>
    				<i class="fa fa-home mr-2" aria-hidden="true"></i> Dashboard
    				</a>
    			</div>
    		</div>
    		<ul class="nav flex-column">
    			<li class="nav-item">
    				<a href="../admin/display-student.php" class="nav-link">
    					<span data-feather="file"></span>
    					<i class="fa fa-user mr-2" aria-hidden="true"></i>Kişisel Profil
    				</a>
    			</li>
    			
                <li class="nav-item">
                	<a href="../student/student-personal-information.php" class="nav-link">
                		<span data-feather="file"></span>
                		<i class="fa fa-info-circle mr-2" aria-hidden="true"></i>Kişisel Bilgi
                	</a>
                </li>

                <li class="nav-item">
                	<a href="../student/student-result.php" class="nav-link">
                		<span data-feather="shopping-cart"></span>
                		<i class="fa fa-th-list mr-2" aria-hidden="true"></i>Öğrenci Sonucu 
                	</a>
                </li>

                <li class="nav-item">
                	<a class="nav-link" href="../student/student-transcript.php">
                		<span data-feather="shopping-cart"></span>
                		<i class="fa fa-th-list mr-2" aria-hidden="true"></i>Öğrenci Transkripti
                	</a>
                </li>

               <li class="nav-item">
               	<a href="../student/studen-fee.php" class="nav-link">
               		<span data-feather="users"></span>
               		<i class="fa fa-credit-card-alt mr-2" aria-hidden="true"></i>Öğrenci Ücreti
               	</a>
               </li>

               <li class="nav-item">
               	<a href="../student/student-password.php">
               		<span data-feather="bar-chart-2"></span>
               		<i class="fa fa-key mr-2" aria-hidden="true"></i>Şifre Değiştir
               	</a>
               </li>

    		</ul>


</div>
</nav>

<script>
	const toggleBtn=document.querySelector(".show-btn");
	const sidebar=document.querySelector(".sidebar");

	toggleBtn.addEventListener("click",function(){
		sidebar.classList.toogle("show-sidebar");
	});
</script>