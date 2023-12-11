<?php
	require_once('database.php');
    $res1 = $database->read1();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Navtesh Thakur" />
	<meta name="description" content="PHP Assignment 1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="javaScript/loginjs.js" defer></script>
    <title>View | L'Atelier</title>
</head>
<body class="viewbg">
    <header>
        <?php include('C:\xampp\htdocs\AssignmentLatelier\includes\nav.php'); ?>
    </header>
    <br>
        <br>
    <main class="view">
        <section>
        <?php 
                        require_once('database.php');
                        if(isset($_POST['b2'])){
							$purchaseOrder = $_POST['purchaseOrder'];
							$gid = $_POST['gid'];
							$colour = $_POST['colour'];
							$size = $_POST['size'];
                            $price = $_POST['price'];
                            $quantity = $_POST['quantity'];
							$res1   = $database->create1($purchaseOrder, $gid, $colour, $size, $price, $quantity );
							if($res1){
								echo "<p>Successfully inserted data!</p>";
							}else{
								echo "<p>Failed to insert data</p>";
							}
                        }
					?>
        </section>
    </main>
    
    <footer class="addfoot">
    <?php include('C:\xampp\htdocs\AssignmentLatelier\includes\footer.php'); ?>
    </footer>
</body>
</html>