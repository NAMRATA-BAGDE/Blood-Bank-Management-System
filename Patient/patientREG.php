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
        <form action="patientDB.php">
            <h2>Patient Registration Form</h2>
            <span>Patient Name:</span><input type="text" name="p1"><br>
            <span>patient EMAIL:</span><input type="text" name="p2"><br>
            <span>patient Mobile:</span><input type="text" name="p3"><br>
            <span>password:</span><input type="text" name="p4"><br><br>
            <input type= "submit" class="but" value="submit">
            <p>if u already registerd?<a href="patientlog.php">LOGIN</a></p>
        </form>
        <footer>
            <ul class="p">
                <li>HOME</li> <span>|</span>
                <li>Email-<a href="#">namratabagde22@gmail.com</a></li> <span>|</span>
                <li>contact number : 7974413495</li>
            </ul>
        </footer>
    </body>
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
        form {
            background-color: rgba(255, 255, 255, 0.95); /* Light transparent white */
            width: 100%;
            max-width: 500px;
            padding: 30px;
            margin-left: 500px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            border-top: 6px solid crimson;
        }

        form h2 {
            text-align: center;
            color: crimson;
            margin-bottom: 25px;
            font-size: 24px;
            text-transform: uppercase;
        }

        /* Input ko heading ke niche lane ka logic */
        form span {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
            font-size: 14px;
        }

        form input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: 0.3s;
        }

        form input[type="text"]:focus {
            border-color: crimson;
            box-shadow: 0 0 8px rgba(220, 20, 60, 0.2);
        }

        /* Submit Button */
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
            transition: 0.4s;
            margin-top: 10px;
        }

        .but:hover {
            background-color: #a00d2a;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        form p {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }

        form p a {
            color: crimson;
            font-weight: bold;
        }
    </style>
</html>