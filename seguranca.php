<?php
ob_start();
if(($_SESSION['user'] == "") || ($_SESSION['senha'] == "")){
		unset($_SESSION['user'],
			$_SESSION['senha']);

	
	echo "<script>
			window.location='login.php';
			 </script>";
}

?>
