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
               
                <?php include ("include/footer.php");
				if(
				isset($_GET['name'])&& !empty($_GET['name'])
				&& isset($_GET['username'])&& !empty($_GET['username'])
				&& isset($_GET['password'])&& !empty($_GET['password'])
				&& isset($_GET['repassword'])&& !empty($_GET['repassword'])
				&& isset($_GET['email'])&& !empty($_GET['email'])
                && isset($_GET['type'])&& !empty($_GET['type'])
				)
				{
					$name=$_GET['name'];
					$username=$_GET['username'];
					$password=$_GET['password'];
					$repassword=$_GET['repassword'];
					$email=$_GET['email'];
                    $email=$_GET['type'];
				}
				else 
                {
                    exit('فیلد های خالی را پر کنید!');
                }
                if($password!=$repassword)
                {
                    exit("رمز عبور و تکرار آن یکسان نیست");
                }
				$link=mysqli_connect("localhost","root","","motivational");
				if(mysqli_connect_errno())
                    exit( mysqli_connect_error()."خطایی با این مشخصات یافت شد");
                $query="INSERT INTO users(name,username,password,repassword,email,type)
                    VALUES('$name','$username','$password','$repassword','$email','1')";
                    if(mysqli_query($link,$query)===true) 
                    {
                        exit("کاربر گرامی ثبت نام شما با موفقیت انجام شد");
                    } 
                    else
                    {
                        exit("کاربر گرامی ثبت نام شما انجام نشد");
                    }
                mysqli_close($link);
				?>		
</div>
</div>
</div>
</body>
</html>