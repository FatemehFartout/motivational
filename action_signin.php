<html>
    <head>
        <meta charset="UTF-8">
        <title="beautyonline">
            <link href="css/s.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="divTable">
        <div class="divTableRow">
            <div class="divTableCell">
                <?php include ("include/header.php");?>
                <?php include ("include/nav.php");?>
                <?php include ("include/footer.php");
				if(
				isset($_GET['username'])&& !empty($_GET['username'])
				&& isset($_GET['password'])&& !empty($_GET['password'])
				)
				{
					$username=$_GET['username'];
					$password=$_GET['password'];
				}
				else 
                {
                    exit('فیلد های خالی را پر کنید!');
                }
				$link=mysqli_connect("localhost","root","","motivational");
				if(mysqli_connect_errno())
                    exit( mysqli_connect_error()."خطایی با این مشخصات یافت شد");
                $query="SELECT * FROM users 
                WHERE username='$username'&& password='$password'";
                $result=mysqli_query($link,$query);
                $row=mysqli_fetch_array($result);
                if($row)
                {
                    $_SESSION["state_login"]=true;
                    if($row["type"]==0)
                    {
                    $_SESSION["user_type"]="public";
                    }
                    else if($row["type"]==1){
                    $_SESSION["user_type"]="admin";?>
                    <script>
                        location.replace="product.php"
                        </script>
                    <?php
                    }
                    ?>
                    <form name="action_signin" method="GET">
                        <?php exit($row["name"]);?><br>
                         </form>
                   <?php  exit("خوش آمدید");?>
                    
                <?php
                }
                else
                {
                    exit("نام کاربری یا رمز ورود اشتباه است");
                    mysqli_close($link);
                }
				?>		
</div>
</div>
</div>
</body>
</html>