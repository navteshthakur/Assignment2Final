<?php
    session_start();
    if (!isset($_SESSION['username'])) {
		header('location:index.php');
		exit();
	}else {  
	require('database.php');
  $pageTitle = 'View Images';
  $pageDesc = 'On this page we will be able to view the images that we have uploaded';
  $stmt = $conn->prepare('select * from images');
  $stmt->execute();
  $imagelist = $stmt->fetchAll();
  $file_extension = pathinfo("select from images.'image'", PATHINFO_EXTENSION);
  $file_extension = strtolower($file_extension);

  if(!empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $database->deleteRecord($deleteId);
    
  }
}
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
        <article>
                <table class="t2">
                <tr>
				<th>PO#</th>
				<th>Generic-ID</th>
				<th>Color</th>
                <th>Size</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Edit</th>
			    </tr>
                <?php
       // 
       
       $res1 = $database->read1();
        if ($res1!=null){
        foreach ($res1 as $r1) {
        //  
          ?>
					<tr>
						<td><?php echo $r1['purchaseOrder']; ?></td>
						<td><?php echo $r1['gid']; ?></td>
						<td><?php echo $r1['colour'] ?></td>
                        <td><?php echo $r1['size'] ?></td>
                        <td><?php echo $r1['price'] ?></td>
                        <td><?php echo $r1['quantity'] ?></td>
                        <td>
              <button class="icons"><a href="edit.php?editId=<?php echo $r1['id'] ?>">
                  <i class="fa fa-pencil text-white" ></i></a></button>
              <button class="icons"><a href="view.php?deleteId=<?php echo $r1['id'] ?>" onclick="return confirm('Are you sure?'); return false;">
                  <i class="fa fa-trash text-white" ></i>
                </a></button>
            </td>
					</tr>
				<?php
				}
            }
			?>
             <?php
        if (isset($_GET['msg2']) == "update") {
        echo "<div>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration updated successfully
            </div>";
      }
      if (isset($_GET['msg3']) == "delete") {
       echo "<div>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Record deleted successfully
            </div>";
      }?>
                </table>

            </article>
            <button class="logout"><a href="logout.php" style="text-decoration:none;">Logout</a></button>
            <h1 class="images">IMAGES</h1>
            <article style="display:table; overflow-wrap:normal; justify-content: space-around;">
            
            <?php
  foreach($imagelist as $image) {
 ?>
    <figure style="display:table-cell; justify-content: space-around;"> 
      <img src="<?=$image['image']?>" alt="<?=$image['name'] ?>" class="img-fluid" style="height:40%;width:40%;" >
      <figcaption><?php echo $image["name"]; ?></figcaption>
  </figure>
<?php
}
?>
            </article>
        </section>

    </main>
    
    <footer>
    <?php include('C:\xampp\htdocs\AssignmentLatelier\includes\footer.php'); ?>
    </footer>
</body>
</html>