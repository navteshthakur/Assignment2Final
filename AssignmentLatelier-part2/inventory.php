<?php
  require "database.php";
  
  //
  $uploadSuccess = false; 
  $valid_file=true;
  if(isset($_POST['submit'])) {
    // Count total files
    $countfiles = count($_FILES['files']['name']);
    // Prepared statement
    $query = "INSERT INTO images (name,image) 
    VALUES(?,?)";
    $statement = $conn->prepare($query);
    // Loop all files
    for($i = 0; $i < $countfiles; $i++) {
      // File name
      $filename = $_FILES['files']['name'][$i];
      // Location
      $target_file = './uploads/'.$filename;
      // file extension
      $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
      $file_extension = strtolower($file_extension);
      // Valid image extension
      $valid_extension = array("png","jpeg","jpg","gif");
      if(in_array($file_extension, $valid_extension)) {
        // Upload file
        if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_file)){
          // Execute query
          $statement->execute(
          array($filename,$target_file));
          $uploadSuccess = true; 
          
        }  
      }
      else{
        $valid_file=false;
      }
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Navtesh Thakur">
	<meta name="description" content="PHP Assignment 1: There are 2 forms: one takes the user entry and the other takes the entry for inventory.">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Home | L'Atelier</title>
</head>
<body>
    <header>
        <?php include('C:\xampp\htdocs\AssignmentLatelier\includes\nav.php');?>
    </header>
    <main>
        <section>
            <div>
                <article class="three"  style="background-image:url('images/backf.jpg') ;">
                    <form action="add.php" method="post" name="form2">
                        <fieldset>
                            <h2><strong>ADD TO INVENTORY</strong></h2>
                            <label for="purchaseOrder">Purchase Order</label>
                            <input type="text" id="purchaseOrder" name="purchaseOrder" placeholder="PO#" required>
                            <label for="gid">Generic ID</label>
                            <input type="text" id="gid" name="gid">
                            <label for="colour">Colour</label>
                            <select id="colour" name="colour">
                                <option value="sagesse">Sagesse</option>
                                <option value="fieryRed">Fiery Red</option>
                                <option value="heatherCharcoal">Heather Charcoal</option>
                                <option value="modernTaupe">Modern Taupe</option>
                                <option value="richMochaBrown">Rich Mocha Brown</option>
                                <option value="cloudWhite">Cloud White</option>
                                <option value="black">Black</option>
                                <option value="mulberryPurple">Mulberry Purple</option>
                            </select>
                            <label for="size">Size</label>
                            <select id="size" name="size">
                                <option value="2XS">2XS</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="2XL">2XL</option>
                            </select>
                             <label for="price">Price</label>
                            <input type="number" id="price" name="price">
                            <label for="quantity">Quantity</label>
                            <input type="text" id="quantity" name="quantity">
                            <button type="submit" name="b2">Insert</button>
                            
                        </fieldset>
                    </form>
                </article>
            </div>
        </section>
        <section class="add">
        <form method='post' action='' enctype='multipart/form-data'>
                    <label for="file">Insert Images</label>
                    <input type='file' name='files[]' multiple id="file"/>
                    <input class="btn btn-dark" type='submit' value='Submit' name='submit'/>
                    </form>
                    <?php 
    if($uploadSuccess){
      echo "<p>File uploaded successfully</p>"; 
    }
    if(!$valid_file){
      echo "<p>Upload image files only</p>";
    }?>
            
        </section>
        <section class="info">
            <figure>
                <img src="images//clothes.gif" alt="background" height=319 width=319>
            </figure>
            <p>"Beauty begins the moment you decide to be yourself."<em>-L'Atelier</em></p>
        </section>
    </main>
    <footer>
        <?php include('C:\xampp\htdocs\AssignmentLatelier\includes\footer.php'); ?>
    </footer>
</body>
</html>