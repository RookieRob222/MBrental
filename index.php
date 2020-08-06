<!DOCTYPE html>
<html>         
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Myrtle Beach Rental">
        <meta name="keywords" content="2 bedroom, condo, sleeps 6, north myrtle beach, barefoot">
        <meta name="author" content="Rick Roberts">
        <title>5751 Oyster Catcher Dr. N. Myrtle Beach</title>
        <link rel="icon" href="./images/SCicon.png" type="image">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">N. Myrtle Beach</span> Vacation Rental</h1>
                </div>
            <nav>
                <ul>
                    <li class="current"><a href="index.php">Home</a></li> 
                    <li><a href="photogallery.html">Photo Gallery</a></li>
                    <li><a href="aboutus.html">About Us</a></li>  
                </ul>
                
            </nav>
            </div>
        </header>
        <section id="showcase">
            <div class="container">
                <h1>Your Home Away From Home!</h1>
                <p>Located in the Heart of Barefoot Landing area
                <h3>2 Bed 2 Fullbath Condo Sleeps 6</h3>
                </p>
            </div>
        </section>

        <section id="moreInfo">
            <div class="container">
                <h1>Enter your name and email to receive more information.</h1>
                <form action= "<?php $_SERVER["SCRIPT_NAME"] ?>" method="post">          
                    <input type="text" name="fname"placeholder="First Name" required>
                    <input type="text" name="lname" placeholder="Last" required>
                    <input type="email" name="email" placeholder="Enter Email..." required>
                    <input type="text" name="comment" placeholder="Comments" rows="5" cols="10">
                    <button type="submit" class="button_1">Submit</button>
                </form>
                <?php /*  Validating Form Input */
                    $fname = $lname = $email = $comment = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $fname = test_input($_POST["fname"]);
                        $lname = test_input($_POST["lname"]);
                        $email = test_input($_POST["email"]);
                        $comment = test_input($_POST["comment"]);

                        /*  Use Form Data to Email  */
                        $subject = "Inquiry for Myrtle Beach";
                        $to = "rickroberts@live.com";
                        $fullname= $fname. " " . $lname;

                        mail($to, $subject, $fullname . " \n" . $email . " \n" .$comment);            
                    }

                    function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    
                ?>
            </div>
        </section>
        <section id="boxes">
            <div class="container">
                <div class="box">
                    <img src="./images/resortgolf.jpg"alt="Barefoot Resort">
                    <h3>Golf</h3>
                    <p>Barefoot resort is home to the Greg Norman, Fazio, Love and Pete Dye courses.</p>
                </div>      
                <div class="box">
                    <img src="./images/AlligatorAdventure.png" alt="Alligator Adventure">
                    <h3>Attractions</h3>
                    <p>Plenty of family attractions like, Pirate's Voyage, Alabama Theatre and Live fireworks at Barefoot Landing.</p>
                </div>
                <div class="box">
                    <img src="./images/hob.png" alt="House of Blues">
                 <h3>Restuarants</h3>
                 <p>Barefoot Landing has many places for all your dining pleasures.</p>
             </div>             
        </section>

        <footer>
            <p> <span>RJR</span> &nbsp; Web Design, Copyright &copy; 2020</p>
        </footer>
    </body>
</html>
