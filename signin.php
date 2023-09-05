
<html>
    <head>
<meta charset="UTF-8">  
<title="کاربر جدید"></title>
    <style>
        .divTable{
    display: table;
    width: 1024px;
    font-size: 13pt;
    font-family: tahoma;
    margin-left: auto;
    margin-right: auto;
    direction: rtl;
}
.divTableRow{
    display: table-row;
}
.divTableCell{
    display: table-cell;
    border: 1px solid #999999;
    padding: 3px 10px;
}
.topnav {
                overflow: hidden;
                background-color: #c4e4dc;
            }
            .topnav a {
                float: left;
                display: block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
            .topnav a:hover {
                background-color: rgb(171, 204, 201);
                color: black;
            }
            .topnav a.active {
                background-color: #4e7fa8;
                color: rgb(255, 255, 255);
            }
            .topnav input[type=text] {
                float: right;
                padding: 6px;
                border: none;
                margin-top: 8px;
                margin-right: 16px;
                font-size: 17px;
            }
             @media screen and (max-width: 600px) {
                .topnav a, .topnav input[type=text] {
                    float: none;
                    display: block;
                    text-align: left;
                    width: 100%;
                    margin: 0;
                    padding: 14px;
                }
                .topnav input[type=text] {
                    border: 1px solid #ccc;
                }
            }
            .header {
        background: linear-gradient(190deg,rgb(171 204 201 / 67%) 2%,#cccccc63 80%);
    padding: 10px;
    color: rgb(34 116 108);
    line-height: 3rem;
    text-align: center;
    font-size: 19px;
    border-rasius: 10px;
  }
  .b{
    background-color: rgb(145, 181, 218);
    border: solid;
    color: rgb(162, 31, 125);
    text-align: center;
    padding: 15px;
    font-size: 16px;
    cursor: default;
    border-radius: 5px;
}
        </style>
</head>
    <body>
    <div class="divTable">
        <div class="divTableRow">
        <div class="divTableCell">
                <?php include ("include/header.php");
                if(isset($_SESSIO["state_login"])&& $_SESSION["state_login"]===true){
                    ?>
                    <script type="text/javascript">
                        <!--
                        location.replace("index.php");
                        -->
                        </script>
                        <?php
                }?>
                <script type="text/javascript">
                    <!--
                    function check_empty()
                    {
                        var username="";
                        username=document.getElementById("username").value;
                        if(username=="")
                        alert('وارد کردن نام کاربری الزامی است')
                        else{
                            var r=confirm(?);
                            if(r==true){
                            document.register.submit();
                        }
                        }
                    }
                    -->
                    </script>
                    
                <div class="header">
             <h1>ثبت نام در سایت
</div>
                <?php include ("include/nav.php");?>
<form name="signin" action="action_signin.php" method="GET">
    <table style="margin-left:auto;margin-right:auto;height:100%;width:100%;" >
    <tr>
    <br><br>
        <td style="width:40%;"> نام کاربری<span style="color:red;">*</span></td>
        <td style="width:60%;"><input type="text" id=" username" name="username"/></td>
</tr>
<tr>
        <td style="width:40%;">کلمه عبور <span style="color:red;">*</span></td>
        <td style="width:60%;"><input type="text" id="password" name="password"/></td>
</tr>

    <td><br/> <br/></td><br>
        <input class="b" type="submit" value="ورود " onclick="check_empty();"/>
   </td>
</tr>
</table>
</form>  
</body>
</html>
