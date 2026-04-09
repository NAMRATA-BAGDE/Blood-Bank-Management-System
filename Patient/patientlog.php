<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
    <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><a href="#"><i class="fa-solid fa-hand-holding-droplet" style="font-size:25px;"></i> LIFE SAVER</a></div>
                <ul>
                    <li><a href="../frontpage.php">Home</a></li>
                    <li><a href="../Admin/adminlogin.php">Admin</a></li>
                    <li><a href="../Donor/Donarlogin.php">Donar</a></li>
                    <li><a href="patientlog.php">Patient</a></li>
                </ul>
            </div>
        </nav>
        <div class="con">
            <center><form action="patientLGP.php">
                <h1>patient Login</h1>
                <p>Patient name:</p><input type="text" name="x">
                <p>Password</p><input type="text" name="y"><br><br>
                <input type="submit" class="but" value="LogIn">
            </form>
            <p>if u dont have account ? <a href="patientREG.php">Register</a></p>
        </center>
        </div>   
        <footer>
            <ul class="p">
                <li>HOME</li> <span>|</span>
                <li>Email-<a href="#">namratabagde22@gmail.com</a></li> <span>|</span>
                <li>contact number : 7974413495</li>
            </ul>
        </footer>
    </body>
    <style>
        body{
            margin:0px;
        }
        *{
            text-decoration: none;
        }
        .navbar{
            position:sticky;
            top: 0px;
            background-color: crimson;
            font-family:Arial, Helvetica, sans-serif;
            padding-right:15px;
            padding-left: 15px;
        }
        .navdiv{
            display:flex;
            align-items:center;
            justify-content: space-between;
        }
        .logo a{
            font-size:30px;
            list-style:none;
            display: inline-block;
            color: white;
        }
        li{
            list-style:none;
            display:inline-block;
        }
        li a{
            color:white;
            font-size: 18px;
            font-weight: bold;
            margin-right :25px;
        }
        footer{
            position:sticky;
            background-color:crimson;
            color: white;
            height:58px ; 
            margin-top: 90px;   
        }
        .p{
            margin-left:400px;   
        }
        .p li{
            margin-top:20px;
        }
        .con{
            width:500px ;
            height:400px;
            background-color: pink;
            margin-top:100px ;
            margin-left:480px ;
            border-radius:10px;   
        }
        input{
            width:200px ;
            height:30px ;
        }
        .but{
            width: 100px;
            height: 45px;
            background-color: salmon;
            color: white;
            border-radius: 10px;
        }
        p{
            font-size: 20px;
        }
    </style>
</html>