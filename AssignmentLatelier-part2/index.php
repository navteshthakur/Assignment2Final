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
    <script src="javaScript/loginjs.js" defer></script>
    <title>Home | L'Atelier</title>
</head>
<body>
    <header>
        <?php include('C:\xampp\htdocs\AssignmentLatelier\includes\nav.php');?>
    </header>
    <main>
        <section class="flip">
            <div class="inner-box" id="card" >
                <article class="one" style="background-image:url('images/backf.jpg') ;">
                    <form  action="./includes/validate.php" method="post" name="form1">
                        <fieldset>
                            <h2><strong>LOGIN</strong></h2>
                            <label for="username">Username</label>
                            <input class="form-control" name="username" type="text" placeholder="Username"id="username" required />
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                            <button type="submit" name="b1">Login</button>
                            <p>Don't have an account?,<span class="btn" onclick="openInventory()">click here to Sign-up!</span></p>
                        </fieldset>
                    </form>
                </article>
                <article class="two"  style="background-image:url('images/backf.jpg') ;">
                    <form action="save-admin.php" method="post" name="form2">
                        <fieldset>
                            <h2><strong>SIGN UP</strong></h2>     
                            <label for="first_name">First Name</label>
                            <input id="first_name" name="first_name" type="text" placeholder="First Name" required/>
                            <label for="last_name">Last Name</label>
                            <input name="last_name" type="text" id="last_name"placeholder="Last Name" required />
                            <label for="username">Username</label>
                            <input class="form-control" name="username" type="text" placeholder="Username"id="username" required />
                            <label for="password">Password</label>
                            <input class="form-control" name="password" type="password" placeholder="Password" id="password" required />
                            <label for="confirm">Confirm Password</label>
                            <input class="form-control" name="confirm" type="password" placeholder="Confirm Password" id="confirm" required />
                            <button type="submit" name="b2">Sign-Up</button>
                            <p>Already have an account?,<span class="btn" onclick="openLogin()">click here to Login!</span></p>                            
                        </fieldset>
                    </form>
                </article>
            </div>
        </section>
        <section class="add">
            <p>To add to the Inventory, Click here :<a href="inventory.php"><button type="submit">ADD INVENTORY</button><a></p>
            
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