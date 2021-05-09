<?php 
 include("config.php"); 
$sql = "SELECT * FROM transfers";
$result = $conn->query($sql);

?>
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
                include('menu.php');
            ?>
            <div class="row">
                <div class="container">
                    <div class="small-container cart-page">
                        <table>
                            <tr>
                                <th> Transferred From &nbsp;&nbsp;  </th>
                                <th> To &nbsp;&nbsp;&nbsp; </th>
                                <th> Amount &nbsp;&nbsp; </th>
                                <th> Date &nbsp;&nbsp; </th>
                            </tr>
                            <?php
                            if ($result->num_rows> 0) {
                                while($row = mysqli_fetch_array($result)){
                                    $cus = $row["From_Customer"];
                                    $cus1 = $row["To_Customer"];
                                    $sql1 = "Select * FROM customer where id = $cus ";
                                    $result1 = $conn->query($sql1);
                                    $row1 = mysqli_fetch_array($result1);
                                    $sql2 = "Select * FROM customer where id = $cus1 ";
                                    $result2 = $conn->query($sql2);
                                    $row2 = mysqli_fetch_array($result2);

                                    ?>           
                                <tr>
                                    <td>
                                        <div class="cart-info "> <small>&nbsp;&nbsp; 
                                            <a href="actions.php?view=<?php echo $row1["id"]?>"><?php echo $row1['name'];?></a></small>
                                        </div>    
                                    </td>
                                    <td>
                                        <div class="cart-info"> <small>&nbsp;&nbsp;
                                        <a href="actions.php?view=<?php echo $row2["id"]?>"><?php echo $row2['name'];?></a></small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-info"> <small>&nbsp;&nbsp;
                                            <?php echo $row['Amount'];?></small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-info"> <small>&nbsp;&nbsp;
                                            <?php echo $row['Date'];?></small>
                                        </div>
                                    </td> 
                                </tr>
                                <?php } ?>
                                <?php
                                    }else{?>
                                    <td style="text-align: left;"><?php echo "0 Results... ";?></td>
                            <?php   } ?>

                        </table>
                        <hr>
                    </div>  

                </div> </div></div>
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