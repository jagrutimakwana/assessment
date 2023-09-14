<?php 
   function active ($currect_page)
   {
	   $url_array=explode('/', $_server['REQUEST_URI']);
	   $url=end($url_array);
	   if($currect_page == $url)
	   {
		   echo 'active'; //class name in css
	   }
   }
   ?>

<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <title>Student Management System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free php Templates" name="keywords">
    <meta content="Free php Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="" class="text-decoration-none">
                    <h3 class="m-0"><span class="text-primary">S</span>tudent Management System</h3>
                </a>
            </div>
           
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
   
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">S</span>tudent Management System</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
					
					<?php
				  if(isset($_SESSION['firstname']))
				  {
					  echo " / Welcome.. ". $_SESSION['firstname'];
				  }
				  ?>
					
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
						<li class="nav-item active <?php active('counsellor.php')?>">
                            <a href="counsellor" class="nav-item nav-link active">Counsellor</a>
							</li>
							<li class="nav-item active <?php active('faculty.php')?>">
                            <a href="faculty" class="nav-item nav-link">Faculty</a>
							</li>
							<li class="nav-item active <?php active('student.php')?>">
                            <a href="student" class="nav-item nav-link">Student</a>
                            </li>
							
		                  </div>
						   <div class="login_btn-contanier ml-0 ml-lg-5">
                <?php
				if(isset($_SESSION['student_id']))
				{	
				?>	
				<a href="profile">
                  <span>
                    My Account  
                  </span>
                </a>
				<a href="logout">
                  <span>
                   Logout
                  </span>
                </a>
				<?php
				}
				else
				{
				?>	
				
				<a href="login" class="btn btn-danger pull-right">
                  <span>
                    Login
                  </span>
                </a>
				
				<?php
				}
				?>
            </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
