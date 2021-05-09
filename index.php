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
                    <?php include('menu.php');?>
                    <center><a style="color:maroon;" href="Donation"><em>* <u>Banker now connects to Helping hands </em><- Click here to visit the page</u>..</a></center>
                    <div class="row">

                        <div class="col-2">
                        <h1>Welcome to the New World of Banking !!</h1>
                        <p>Banker not only gives you the convenience to sit back<br> at home and manage accounts  but also allows you <br> to do online transfers..
                        </p>
                        <a href="services.php" class="btn">Explore Now &#8594 </a>
                    </div>
                    <div class="col-2">
                        <img style="border: none;
                        border-radius: 50px;
                        padding: 5px;
                        width: 100%;" src="images/index.png" alt="image">
                    </div>
                </div>
            </div>

            </div>


            <!-- ----------TESTIMONIAL--------------- -->
            <div class="testimonial">
                <div class="small-container">
                    <div class="row">
                        <div class="col-3">
                            <i class="fa fa-quote-left"></i>
                            <p>It is a great option if you need to move money internationally, and can help you send money fast. It is among the best international money transfer platforms, with good rates.Thank you Banker</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <img src="images/user-1.png" >
                            <h3>Sean Parker</h3>
                        </div>
                        <div class="col-3">
                            <i class="fa fa-quote-left"></i>
                            <p>Amazing!!Money Transfer has some great features, and can be a real lifesaver .</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <img src="images/user-2.png" >
                            <h3>Sean Parker</h3>
                        </div>
                        <div class="col-3">
                            <i class="fa fa-quote-left"></i>
                            <p>Money Transfer has some great features, and can be a real lifesaver if you want to move money internationally, and at good rates. </p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <img src="images/user-3.png" >
                            <h3>Sean Parker</h3>
                        </div>
                    </div>
                </div>
            </div>


            <!-- --------footer---------- -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                         <div class="footer-col-1">
                            <h3>Download Our App</h3>
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
            <!-- -------js for toggle menu--- -->
            <script>
                var MenuItems=document.getElementById("MenuItems");
                MenuItems.style.maxHeight="0px";
                function menutoggle()
                {
                    if(MenuItems.style.maxHeight=="0px")
                    {
                        MenuItems.style.maxHeight="200px";
                    }else{
                        MenuItems.style.maxHeight="0px";
                    }
                    
                }
            </script>

        </body>

    </html>