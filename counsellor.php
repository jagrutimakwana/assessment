<?php
include_once('header.php');
?>

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Counsellor</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Counsellor</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Counsellor Start -->
    

    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">STUDENT MANGEMNET SYSTEM</h4><br/>
                
             </div>

        </div>
             
            
     <!-- CONTENT-WRAPPER SECTION END-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <ul type="square">
                       <li>Coffee</li>
                       <li>Tea</li>
                       <li>Milk</li>
                   </ul>
					<p>1.Add student</p>
					<p>2.Remove student</p>
					<p>3.View all student</p>
					<p>4.View specific student</p>
				
                </div>
            </div>
        </div>

        
    
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-9">
                </div>
                <div class="topnav">

                    <div class="search-container">
                     <form action="" method="post">
                        <input type="text" name="find" required="">
      
      <button type="submit" name="submit" >Submit</button>
    </form>
    <?php
    if(isset($_REQUEST['submit']))
    {
        $var=$_REQUEST['find'];
        if($var=="1")
        {
            echo"<script>
            alert('add Student');
            window.location='student';
            </script>";
        }
       
        else if($var=="2")
        {
            echo"<script>
            alert('Remove Student');
            window.location='manage_student';
            </script>";
        }
         else if($var=="3")
        {
            echo"<script>
            alert('View All Student');
            window.location='viewallstudent';
            </script>";
        }
        else if($var=="4")
        {
            echo"<script>
            alert('View Specific Student');
            window.location='viewspecificstudent';
            </script>";
        }
      
    }
        

        
        ?>
  </div>
</div>



            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  
</body>
</html>

