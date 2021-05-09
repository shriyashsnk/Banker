<div class="navbar">
    <div class="logo">
        <a href="index.php"><img src="images/logo_bank(default).png" alt="Logo" width="120px" height="90px"></a>
    </div>
    <nav>
        <ul id="MenuItems">
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Quick Transfers</a></li>           
            
        </ul>
        <a href="tran_hist.php"><i class="fa fa-history fa-big" aria-hidden="true"></i></a>   
    </nav>
    <img src="https://i.ibb.co/BNhFYyD/menu.png" alt="menu" class="menu-icon" onclick="menutoggle()" >

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
        
        