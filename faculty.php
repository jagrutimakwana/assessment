<?php
if(isset($_SESSION['user']))
{
	echo "<script>
	window.location='index';
	</script>";
}
 include_once('header.php');
  ?>

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Faculty</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Faculty</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <div class="container">
            <div class="row">
                <div class="col-md-12">
               
					<p>1.Add marks to student</p>
					<p>2.View all student</p>
					
				
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
            alert('Add Student Marks');
            window.location='student';
            </script>" ;
        }
		else if($var=="2")
        {
            echo"<script>
            alert('View All Student');
            window.location='viewallstudent';
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

       
    

   