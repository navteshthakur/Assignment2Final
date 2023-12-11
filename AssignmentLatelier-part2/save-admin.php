<?php
	
	require 'database.php';
	session_start();
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	
	$ok = true;
	require './includes/nav.php';
		if (empty($first_name)) {
			echo '<p>First name required</p>';
			$ok = false;
		}
		if (empty($last_name)) {
			echo '<p>Last name required</p>';
			$ok = false;
		}
		if (empty($username)) {
			echo '<p>Username required</p>';
			$ok = false;
		}
		if ((empty($password)) || ($password != $confirm)) {
			echo '<p>Invalid passwords</p>';
			$ok = false;
		}
	if ($ok){
		$password = hash('sha512', $password);
		$sql = "INSERT INTO signin (first_name, last_name, username, password) 
		VALUES ('$first_name', '$last_name', '$username', '$password');";
		$conn->exec($sql);
    	echo '<section class="success-row">';
		echo '<div>';
		echo '<h3>Admin Saved</h3>';
		echo '</div>';
    	echo '</section>';
		header("Location: index.php"); 
		
	}
	?>
	
<?php require './includes/footer.php'; ?>
