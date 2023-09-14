<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 0);

include_once('model.php');
class control extends model
{
        function __construct()
		{
			session_start();

			model::__construct();

			$path=$_SERVER['PATH_INFO'];

			switch ($path)
			 {
				case '/index':
			    include_once('index.php');
			    break;

			    case'/login':
			    if(isset($_REQUEST['submit']))
					{
						$email=$_REQUEST['email'];
						$password=md5($_REQUEST['password']);

						$arr=array("email"=>$email,"password"=>$password);

						$res=$this->select_where('admin',$arr);
						$chk=$res->num_rows;

						if($chk==1)
						{
							$fetch=$res->fetch_object(); // data fetch after function call
                            $_SESSION['email']=$fetch->email;
							$_SESSION['password']=$fetch->password;
							
							 echo"<script>
							 alert('Login Sucess');
							 window.location='counsellor';
							 </script>
							 ";
						}
						else
						{
							echo"<script>
							 alert('Login Failed');
							</script>
							";
						}
					}
					include_once('login.php');
					break;	

                    case '/counsellor':
			        include_once('counsellor.php');
			        break;

                    case '/faculty':
			        include_once('faculty.php');
			        break;

                    case '/student':
					if(isset($_REQUEST['submit']))
					{
						$student_id=$_REQUEST['student_id'];
						$firstname=($_REQUEST['firstname']);
						$lastname=$_REQUEST['lastname'];
						$cont_no=$_REQUEST['cont_no'];
						$subject=$_REQUEST['subject'];
						$marks=$_REQUEST['marks'];
						$fees=$_REQUEST['fees'];
					    
						$arr=array("student_id"=>$student_id,"firstname"=>$firstname,"lastname"=>$lastname,"cont_no"=>$cont_no,"subject"=>$subject,"marks"=>$marks,"fees"=>$fees);
						$res=$this->insert('students',$arr);

						if($res)
						{
							echo"
							<script>
							alert('Add Student Sucess');
							window.location='student';
							</script>
							";
						}
						else
						{
							echo"<script>
							 alert('Student Does Not Exist');
							</script>
							";
						}
                    }   
			        include_once('student.php');
			        break;	
					
					case '/manage_student':
			        $data_students=$this->select('students');
			        include_once('manage_student.php');
			        break;

                    case '/delete':
			         if(isset($_REQUEST['delstudent_id']))
			        {
				    $student_id=$_REQUEST['delstudent_id'];
				
				    $where=array("student_id"=>$student_id);
				    $res=$this->delete_where('students',$where);
				         if($res)
				         {
					          echo "<script> 
					          alert('Delete Success'); 
						      window.location='manage_student';
					          </script>";
				         }
						else
						{
							  echo "<script> 
					          alert('Delete Failed'); 
						      window.location='manage_student';
					          </script>";
						}
						 
			        }				
                 
			       case'/viewspecificstudent':
			       $std_arr=$this->select('students');
			       include_once('viewspecificstudent.php');
		           break;
					
			       case '/viewallstudent':
			       $data_students=$this->select('students');
			       include_once('viewallstudent.php');
			       break;
			
			       default:
			       echo "<h1>Page Not Found</h1>";
		           break;
		}
	
		}
	}	

$obj=new control;
?>