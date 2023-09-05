<nav class="divTable">
    <div class="divTableRow">
        <div class="topnav">
            <a href="index.php" > Home </a>
            <a href="contents.php"> Contacts </a>
            <a href="Products.php"> Products </a>
            <?php
            if(isset($_SESSION['state_login'])&& $_SESSION['state_login']==true && $_SESSION["user_type"]=="admin")
            {
                ?>
                <a href="Product.php"> Product </a>
                <?php
            }
           { ?>
               
            <?php
            }
            
            {?>
                <a href="signin.php"> signin </a>
            <?php
            }?>
            <a href="signup.php">signup </a>
           
        </div>
    </div>
</nav>