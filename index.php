<?php
if(isset($_SESSION['user']))
{
	echo "<script>
	window.location='login';
	</script>";
}
 include_once('header.php');
  ?>