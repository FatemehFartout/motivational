<html>
    <head>
</head>
<body>
    <?php include("include/header.php");
    if(
				isset($_GET['poductid'])&& !empty($_GET['poductid'])
				&& isset($_GET['name'])&& !empty($_GET['name'])
				&& isset($_GET['count'])&& !empty($_GET['count'])
				&& isset($_GET['price'])&& !empty($_GET['price'])
				&& isset($_GET['image'])&& !empty($_GET['image'])
				)
				{
					$name=$_POST['poductid'];
					$username=$_GET['name'];
					$password=$_GET['count'];
					$repassword=$_GET['price'];
					$email=$_GET['image'];
				}
				else 
					exit('فیلد های خالی را پر کنید!');
					$link=mysqli-connect("localhost","root","","motivational");
				if(mysqli-connect-errorno()
				exit('خطای اتصال');
				)
				INSERTINTO motivational.product
				VALUES('productid','name','count','price','count','image');
				$query="INSERT INTO motivational.usesr
				VALUES('$poductid','$name','$count','$price','$image')";
				if(mysqli_$query($link,$query)===true)
				exit("کاربر گرامی ثبت نام شما با موفقیت انجام شد".$queryname);
				else
				exit("");
				?>
</body>
</html>