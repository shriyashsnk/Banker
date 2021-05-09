<?php include("config.php"); ?>
<!DOCTYPE html>
    <html>

        <head>
            <title> Admin|Action - MyGrocery | Ecommerce Website</title>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>

        </head>
        <body class="header">
            <?php
            if (isset($_GET['delete']))
             {
                $id = $_GET['delete'];
                $sql= "DELETE FROM `customer` WHERE id = '$id'";
                $sql_1= "DELETE FROM transfers where From_Customer = '$id' OR To_Customer = '$id'";

                if ($conn->query($sql) === TRUE && $conn->query($sql_1) === TRUE) {
                header('location:services.php?message=deleted');
            }
            else{
                echo "Error deleting record: " . $conn->error;
            }        
            
            }elseif(isset($_GET['view'])) {
                $id =$_GET["view"];

                $sql = "SELECT * FROM customer WHERE id ='$id'";
                $result = $conn->query($sql);
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        $name = $row["name"];
                        $email = $row["email"];
                        $acc = $row["Account_Number"];
                        $balance = $row["Balance"];
                        $acc_created = $row["Date"];
                }
            }
            ?>  
            <div class="account-page">    
                <div class="form-container">    
                    <p>Viewing Details of <?php echo $name ?>.. </p>    
                    <form>
                        <label for="username"><h5>Account Holder's Name</h5></label>                          
                        <input type="text" name="Name" id="Name" value=<?php echo $name ?> readonly="readonly">
                        <label for="email"><h5>Account Holder's Email</h5></label> 
                        <input type="email" name="email" value=<?php echo $email ?> readonly="readonly">
                        <label for="Account Number"><h5>Account Number</h5></label>                          
                        <input type="text" name="Account Number" id="Account Number" value=<?php echo $acc ?> readonly="readonly">
                        <label for="Balance"><h5>Balance</h5></label>                          
                        <input type="text" name="Balance" id="Balance" value=<?php echo $balance ?> readonly="readonly">
                        <label for="Date"><h5>Date</label>                          
                        <input type="text" name="Date" id="Date" value=<?php echo $acc_created ?> readonly="readonly">
                        
                        <a href="services.php" class="btn">Back</a>
                    </form> 
                </div>
            </div>
            <?php
        }elseif(isset($_GET['transact'])){
                
            $id =$_GET["transact"];
            $sql = "SELECT * FROM customer WHERE id ='$id'";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    $Balance = $row["Balance"];
                    $username = $row["name"];
                    $acc = $row["Account_Number"];
                }
            }
            if(isset($_POST['transfer'])){
                $to_id = $_POST["option"];
                $amount = $_POST["amt"];
                if($amount > $Balance){
                    echo '<script>alert("Amount is greater than balance")</script>';
                }else{
                    $sql_tran = "Select * from customer where id = '$to_id'";
                    $result_tran = $conn->query($sql_tran);
                    $row_tran = $result_tran->fetch_assoc();
                    $amount_rec_b = $row_tran["Balance"];
                    $amount_rec_a = $amount_rec_b + $amount ;
                    $balance_deducted  = $Balance - $amount;
                    $sql1= " UPDATE customer SET Balance='$amount_rec_a'   WHERE id ='$to_id'" ;
                    $sql2 =  " UPDATE customer SET Balance='$balance_deducted' WHERE id =$id ";
                    $sql3 = "INSERT INTO transfers(From_Customer,TO_Customer,Amount) values('$id','$to_id','$amount')";
                    if($conn->query($sql1) ===TRUE && $conn->query($sql2) ===TRUE && $conn->query($sql3) ===TRUE ){
                    header('location:services.php?message=transfer_sucess');
                    }else{
                        echo "Error updating record :" . $conn->error;
                    }
                }
            }
            $sql_t = "SELECT * FROM customer";
            $result_t = $conn->query($sql_t);
            ?>
            
            <div class="account-page">    
                <div class="form-container">    <br>
                    <p>Transferring Amount <br> From <?php echo $username ?>.. </p>    <br><br>
                    <form  method="POST" action=""> 
                        <label for="option">Select To</label><br>
                        <select name="option" id="option">
                        <?php
                        while($row_t3 = $result_t->fetch_assoc()){
                            if($row_t3["Account_Number"] == $acc){
                                continue;
                            }else{
                            ?>
                            <option value="<?php echo $row_t3["id"] ?>"> <?php echo $row_t3["name"] ?> </option>

                            <?php } 
                            } ?>
                        </select><br><br>
                        <label for="amt">Transfer Amount</label>
                        <input type="text" id="amt" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Enter Amount" name="amt" required><br>
                        <button type="submit" name="transfer" class="btn" style="max-width=50px!important;">Transfer</button>
                    </form> 
                </div>
            </div>
            <?php
                }
            ?>

        </body>
    </html>