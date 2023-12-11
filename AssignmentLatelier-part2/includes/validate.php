<?php
class validate{
  public function checkEmpty($data, $fields){
	$msg = null;
	foreach ($fields as $value){
	  if (empty($data[$value])){
		$msg .= "<p>$value field empty</p>";
	  }
	}
	return $msg;
  }
  // check our quantity field
  public function validQuantity($quantity){
	  // check to see if the quantity is numeric
	  if (preg_match("/^[0-9]+$/", $quantity)){
		return true;
	  }
	  return false;
	}
  // check to see if our email follows the email format
  public function validEmail($email){
	if (filter_var($email, FILTER_VALIDATE_EMAIL)){
	  return true;
	}
	return false;
  }
}
//store the user inputs in variables and hash the password
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);

//connect to db
require '../database.php';

//set up and run the query
$sql = "SELECT username FROM signin 
WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
//store the number of results in a variable
$count = $result -> rowCount();
//check if any matches found
if ($count == 1){
	echo 'Logged in Successfully.';
	$row = $result->fetch();
	// foreach  ($result as $row){
		//access the existing session created automatically by the server
		session_start();
		//take the user's id from the database and store it in a session variable
		$_SESSION['username'] = $row['username'];
		//redirect the user
		Header('Location: ../view1.php');
	// }
}
else {
	echo 'Invalid Login';
}
$conn = null;
?>
