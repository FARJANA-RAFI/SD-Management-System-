
<?php 
	if(!isset($_SESSION)){ 
        session_start(); 
    }
    
	if(!isset($_SESSION['user_email'])){
		header("location: index.php");
	}

	if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'admin'){
		header('location: index.php');
	}
 ?>
<?php 
	$id = $_REQUEST['id'];
	$name = $_REQUEST['username'];
	
	$data_delete = "DELETE FROM users WHERE id = $id";
	
	if (mysqli_query($conn, $data_delete)) {
		header('location: manage_users.php');

	}
?>
