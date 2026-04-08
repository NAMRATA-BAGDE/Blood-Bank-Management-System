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
                    <li><a href="Donarlogin.php">Donar</a></li>
                    <li><a href="../Patient/patientlog.php">Patient</a></li>
                </ul>
            </div>
        </nav>
        <div class="fx" >
            <form action="DonaregDB.php">
                <h2>Registration page</h2>  
                <p>Username :</p><input type="text" name="t1">
                <p>Email id :</p><input type="text" name="t2">
                <p>Mobile Number :</p><input type="text" name="t3">
                <p>Age :</p><input type="text" name="t4">
                <p>Gender :</p><input type="radio" name="t5" value="male">Male
                <input type="radio" name="t5" value="female">Female<br>
                <P>Blood Group :</P><select name="t6"><br>
                <option>A+</option>
                <option>B+</option>
                <option>AB+</option>
                <option>A-</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                 </select><br>
                <p>Password:</p><input type="text" name="t7"><br><br>
                <input type="submit" class="but" value="save">
                <span>if u are already registerd ?<a href="Donarlogin.php">LOGIN</a></span>
             </form>
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
            background-color:black;
            color: white;
            height:58px ;    
        }
        .p{
            margin-left:400px;   
        }
        .p li{
            margin-top:20px;
        }
        input[type="text"], select {
        width: 100%; /* Full width taaki heading ke neeche dikhe */
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    form {
        background-color: rgba(255, 255, 255, 0.95); /* White background with slight transparency */
        padding: 20px 150px;
        border-radius: 15px;
        width: 400px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
    }

    form h2 {
        text-align: center;
        color: crimson;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    /* Text box ko heading ke neeche lane ka logic */
    form p {
        margin: 10px 0 5px 0;
        font-weight: bold;
        color: #333;
    }
    .but {
        width: 100%;
        background-color: crimson;
        color: white;
        padding: 12px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        margin-top: 15px;
        transition: 0.3s;
    }

    .but:hover { background-color: #a00d2a; }

    span { display: block; text-align: center; margin-top: 15px; font-size: 14px; }
    span a { color: crimson; font-weight: bold; }

   
    footer {
        background-color: black;
        color: white;
        padding: 15px;
        text-align: center;
    }
    .p { margin: 0; padding: 0; }
    .p li { margin: 0 10px; font-size: 14px; }
    .fx{
        margin-left: 400px;
    }
</style>
        
    </style>

    
</html>