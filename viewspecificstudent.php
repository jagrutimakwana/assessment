<?php
    include_once('header.php');
	?>
	<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>




        <!-- /. NAV SIDE  -->
       
						<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header ">
				
				<h2 class="text-center">Search student</h2>
            </div>

               </div>

            <div class="right-div">
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
               <form action="" method="post" enctype="multipart/form-data">
			<select name="student_id" class="form-control" required="">
				<option>----- Select By Id -----</option>
				<?php
				foreach($std_arr as $data)
				{
				?>
				<option value="<?php echo $data->student_id?>"><?php echo $data->student_id?></option>
				<?php	
				}
				?>
			</select>	
			
			<input type="submit" name="submit" value="search" class="btn btn-primary" >
			</br>
			</br>


           
				
			
		</form>

		<div class="row why-grids">	
		
			<?php
			 if(isset($_REQUEST['submit']))
			 {
				 $search=$_REQUEST['student_id'];
				 $std_arr=$this->select_search('students','student_id',$search);
			 if($std_arr){
				foreach($std_arr as $data)
				{
			?>	
						
			<table width="100%">
                  <tr>
					<td>student_id: <?php echo $data->student_id?></td>
				</tr>
				<tr>
					<td>firstname: <?php echo $data->firstname?></td>
                    
				</tr>
				<tr>
					<td >lastname: <?php echo $data->lastname?></td>
				</tr>
				<tr>
					<td>cont_no: <?php echo $data->cont_no?></td>
				</tr>
				<tr>
					<td>subject: <?php echo $data->subject?></td>
				</tr>
				<tr>
					<td>marks: <?php echo $data->marks?></td>
				</tr>
				<tr>
					<td>fees: <?php echo $data->fees?></td>
				</tr>
				
				
				
				
<!-- 				 -->
				
				<tr>
					<td colspan="1">-----------------------------------------------------------------------------------------------------------------------</td>
				</tr>
				</table>
			
			
			<?php	
				}} else
				{
					echo "done
					// <script>
					// alert('Sorry.. account not  not avialble');
					// window.location='serach_customer';
					// </script>
					";
				}
			}
			?>
		</div>
	</div>
</section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12">
               
    </div>http://localhost/assement/assement-1/bank/Assisment-1/serach_customer
    </div>




