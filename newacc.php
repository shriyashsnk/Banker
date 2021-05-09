<!DOCTYPE html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>| Banking System | </title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
        <script src='main.js'></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="header">
            <div class="container">
                <?php
                include('menu.php');?>
                <div class="container">
                    <h1 class="message">
                    <?php if(isset($_GET["message"])){
                        if(($_GET["message"])=="taken")
                        {
                            echo"*<strong>Account</strong> already exists";
                        }
                    }
                    ?></h1> 
                    <form action="services.php" method="POST" name="c_acc">
                    <label for="name">Account Holder's Name</label>
                    <input type="text" placeholder="Enter Your Name" name="name" id="name" required><br>
                    <label for="email">Account Holder's Email</label>
                    <input type="email" placeholder="Enter Your Email" name="email" id="email" required><br>
                    <label for="acc">Account Number</label>
                    <input type="text" id="acc" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Your Account Number" name="acc" required><br>
                    <label for="balance">Initial Balance</label>
                    <input type="text" id="balance" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Your Balance" name="balance" required><br>
                    <button type="submit" name="c_acc" 
                    class="btn" style="max-width=50px!important;">Create</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- --------footer---------- -->
        <div class="footer">
                <div class="container">
                    <div class="row">
                         <div class="footer-col-1">
                            <h3>Download Our App</h3>
                            <p>For the food lovers.</p>
                            <div class="app-logo">
                                <img src="images/play-store.png" >
                                <img src="images/app-store.png" >
                            </div>
                        </div>
                        <div class="footer-col-2">
                            <img src="images/logo_bank(white).png" >
                            <p>Banker's gives different treasures .</p>                     
                        </div>
                        <div class="footer-col-3">
                            <h3>Useful Links</h3>
                            <ul>
                            <li>Blog Post</li>
                            <li>Join Affiliate</li>
                            </ul>
                        </div>
                        <div class="footer-col-4">
                            <h3>Follow</h3>
                            <ul>
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Twitter</li>
                            <li>Youtube</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <p class="copyright">&#xA9; Copyright 2021 | <b>𝑆ℎ𝑟𝑖𝑦𝑎𝑠ℎ 𝐾𝑎𝑟𝑒𝑘𝑎𝑟 <b>| Banker</p>
                </div>
            </div>
           
    </body>
</html>