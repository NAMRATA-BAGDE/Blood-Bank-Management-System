<html>
    <head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    </head>
    <body>
    <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><a href="#"><i class="fa-solid fa-hand-holding-droplet" style="font-size:25px;"></i> LIFE SAVER</a></div>
                <ul>  
                    <li><a href="frontpage.php">Home</a></li>
                    <li><a href="adminlogin.php">Admin</a></li>
                    <li><a href="../Donor/Donarlogin.php">Donar</a></li>
                    <li><a href="../Patient/patientlog.php">Patient</a></li>
                </ul>
            </div>
        </nav>
        <form action="LOGINA.php">
            <div class="con">
                <center>
                <p class="a">Admin Login Page</p><br>
                <p class="b">Admin Name :</p><input type="text" name="a1" ><br>
                <p class="b">Password :</p><input type="text" name="a2"><br><br>
                <input type="submit" class="but"  value="LOGin">
                </center>
            </div>
        </form>

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
            margin-top: 100px;
            position:sticky;
            background-color:crimson;
            margin-top:120px;
            color: white;
            height:58px ;    
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
        .a{
            margin: 0px;
            margin-top:30px ;
            font-size:30px ;
            font-weight: bold;
        }
        .b{
            margin-top:10px ;
            font-size:25px ;
            font-weight:bold;  
        }
        .but{
            width: 100px;
            height: 45px;
            background-color: salmon;
            color: white;
        }
        input{
            width:250px;
            height:30px;
            border-radius: 5px;
            background-color: lightcoral;
        }
      
        .put{
            width: 80px;
            height: 30px;
        }
        .reg{
            margin-left: 500px;
            font-size: 20px;
        }
    </style>

</html>