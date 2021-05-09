<?php
include('config.php');
    function val($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
    
        return $data;
    }
    
    if(isset($_POST['c_acc'])){       
        $username=val($_POST["name"]);
        $email=$_POST["email"];
        $acc_n=val($_POST["acc"]);
        $balance=val($_POST["balance"]);
        $sql_check = "SELECT * FROM customer WHERE Account_Number = '$acc_n'";
        $result_check = $conn->query($sql_check);
        $num = mysqli_num_rows($result_check);

        if($num>=1)
        { header('location:newacc.php?message=taken');
            ?>
            
        <?php }else{
        
        $sql = "INSERT INTO customer(name,email,Account_Number, Balance) values('$username','$email','$acc_n','$balance')";
        if($conn->query($sql)===TRUE)
            {
                header('location:services.php?message=new_acc');
           }else
           {
            echo "Error Occoured While creating Account".$sql."<br>".$conn->error;
        }
    }
}
    $sql_display = "SELECT * FROM `customer`";
    $result = $conn->query($sql_display);
    $num_row = mysqli_num_rows($result);   
    
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
                include('menu.php');?>
            <div class="row">
            <div class="container">
            <h1 class="message message-sucess">
                <?php if(isset($_GET["message"])){
                                if(($_GET["message"])=="deleted")
                                {
                                    echo"*<strong>Account</strong> Deleted Sucessfully..";
                                }
                                elseif(($_GET["message"])=="new_acc")
                                {
                                    echo"*<strong>New Account</strong> Created Sucessfully..";
                                }
                            }
                            ?></h1> 
                <div class="small-container cart-page">
                <a href="newacc.php"  class="btn">Add New Account</a><br>    
                
                    <table>
                        <tr>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>ACTIONS</th>
                        </tr>
                        <?php
                        if ($num_row > 0) {
                            while($row = mysqli_fetch_array($result)){
                                ?>           
                                <tr>
                                    <td>
                                        <div class="cart-info "> <small> 
                                            <?php echo $row['name'];?></small>
                                        </div>    
                                    </td>
                                    <td>
                                        <div class="cart-info"> <small>
                                            <?php echo $row['email'];?></small>
                                        </div>
                                    </td>
                                    <td>                        
                                        <a  href="actions.php?delete=<?php echo $row['id']; ?>" class="btn" > <span>   <i class="fa fa-trash" aria-hidden="true"></i></span> Delete</a>
                                        <a  href="actions.php?transact=<?php echo $row['id']; ?>" class="btn" > <span>   <i class="fa fa-exchange" aria-hidden="true"></i></span> Transact</a>                            
                                        <a href="actions.php?view=<?php echo $row['id']; ?>" class="btn" > <span>   <i class="fa fa-eye" aria-hidden="true"></i></span> View</a>                  
                                    </td>       

                                </tr>   
                            <?php } ?>
                            <?php
                        }else{?>
                            <td style="text-align: left;"><?php echo "0 Results... ";?></td><?php   } ?>

                    </table>
                    <hr>
                </div>               

            </div></div></div>
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