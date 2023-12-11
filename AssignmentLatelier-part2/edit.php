<?php

// Include database file
include 'database.php';

$items = [];

//Edit customer record
if(!empty($_GET['editId'])) {
  $editId = $_GET['editId'];
  $items = $database->displayRecordById($editId);
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
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
                    <form method="post" name="form2">
                        <fieldset>
                            <h2><strong>UPDATE INVENTORY</strong></h2>
                            <label for="purchaseOrder">Purchase Order</label>
                            <input type="text" name="purchaseOrder" value="<?php echo $items['purchaseOrder']; ?>" required="" readonly>
                            <label for="gid">Generic ID</label>
                            <input type="text"  name="ugid" value="<?php echo $items['gid']; ?>" required="">
                            <label for="colour">Colour</label>
                            <select  name="ucolour" value="<?php echo $items['colour']; ?>" required="">
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
                            <select  name="usize" value="<?php echo $items['size']; ?>" required="">
                                <option value="2XS">2XS</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="2XL">2XL</option>
                            </select>
                             <label for="price">Price</label>
                            <input type="number"  name="uprice" value="<?php echo $items['price']; ?>" required="">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="uquantity" value="<?php echo $items['quantity']; ?>" required="">
                            <input type="hidden" name="id" value="<?php echo $items['id']; ?>">
                            <button type="submit" name="b2" name="update" value="Update">Update</button>
                            
                        </fieldset>
                    </form>
                </article>
            </div>
        </section>
        <?php
            // Update Record in customer table
              if(!empty($_POST)) {
                $purchaseOrder = $_POST['purchaseOrder'];
                $ugid= $_POST['ugid'];
                $ucolour = $_POST['ucolour'];
                $usize = $_POST['usize'];
                $uprice = $_POST['uprice'];
                $uquantity = $_POST['uquantity'];
                $id = $_POST['id'];
                $database->updateRecord($purchaseOrder,$ugid,$ucolour,$usize,$uprice,$uquantity,$id);
              }
            ?>
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


