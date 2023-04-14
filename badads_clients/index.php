<?php

session_start();
require_once "config.php";

if(isset($_SESSION['client-id']) && isset($_SESSION['subs-stats'])){

if(isset($_SESSION['preload'])){
	unset($_SESSION['preload']);
}	

$clientID = $_SESSION['client-id'];
$sql = "SELECT * FROM clients WHERE client_id='$clientID'";
$result = mysqli_query($connection, $sql);
$client_data = mysqli_fetch_assoc($result);
$middle_name_converted = substr($client_data['middle_name'], 0, 1);

?>
<!DOCTYPE html>
<html lang="en" class="semi-dark">
<head>
	<?php require 'header.php' ?>
	<title>BAD ADVERTISEMENT</title>
</head>
<body style="background: #373E4C;">
	<div class="wrapper">
		<!-- Child Header -->
		<?php require 'child-header.php' ?>
		<!-- Sidebar -->
		<?php require 'sidebar.php' ?>
		<!-- Start Content -->
		<?php require 'content.php' ?>
	</div>
	<!-- JS Scripts -->
	<?php require 'script.php' ?>
	<!-- Toast -->
	<?php require 'toast.php' ?>
</body>	
</html>
<?php

}
else {
	header("Location: sign-in.php");
	exit();
}

?>
