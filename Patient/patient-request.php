<!DOCTYPE html>
<html lang="en">
<head>
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
        .main{
                width: 100%;
                height: 583px;
            }
            .item1{
                float: left;
                width: 25%;
                height: 420px;
                background-color: azure;
                margin-top: 30px;
                margin-left: 100px;
                box-shadow: 2px 2px 5px lightskyblue;
                border-radius: 15px;
                border-style: solid;
                border-width: 1px;
                border-color: darkblue;
            }
            .item1 center p{
                font-size: 35px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-weight: 600;
            }
            .item1 span{
                margin-left: 4px;
                font-size: 17px;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            select{
                margin-left: 10px;
                width: 94%;
                height: 30px;
                font-size: 17px;
                border-radius: 4px;
                border-color: gainsboro;
                
            }
            .txt{
                margin-left: 10px;
                width: 94%;
                height: 30px;
                font-size: 17px;
                border-radius: 4px;
                border-style: solid;
                border-width: 1px;
                border-color: gainsboro;
            }
            .txtarea{
                margin-left: 10px;
                font-size: 17px;
                border-radius: 4px;
                border-style: solid;
                border-width: 1px;
                border-color: gainsboro;
            }
            .btt{
                width: 80px;
                height: 30px;
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                color: white;
                background-color: brown;
                border-radius: 5px;
                border: none;
                margin-left: 10px;
            }
            .item2{
                background-color: black;
            }
            .I{
                width: 40%;
                height: 420px;
                margin-left: 200px;
                margin-top: 30px;
                border-radius: 15px;
            }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><a href="#"><i class="fa-solid fa-hand-holding-droplet" style="font-size:25px;"></i> LIFE SAVER</a></div>
                <ul>
                    <li><a class=x>
                            <?php 
                            session_start();
                            if(isset($_SESSION['name'])==false)
                            {
                            echo"<script> window.location='patiendDashboard.php' </script>";
                            }
                            $a=$_SESSION['name'];
                            echo"Patient Name : $a";
                            ?>
                        </a>
                    </li>
                    <li><a href="patiendDashboard.php">Dashboard</a></li>
                    <li><a href="patient-request.php">Request</a></li>
                    <li><a href="p-request-history.php">Request History</a></li>
                    <li><a href="frontpage.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    <div class="main">
            <form action="p-req-save.php">
                <div class="item1">
                    <center><p>Blood Donation Form</p></center>
                    <span>No. of Units : </span><br>
                    <input type="text" name="t1" class="txt" placeholder="No. of Units (in ml)"><br><br>
                    <span>Blood Group : </span><br>
                    <select name="s">
                        <option>-Select-</option>
                        <option value="A">A</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B">B</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select><br><br>
                    <span>Reason (if any)</span><br>
                    <textarea name="t2" class="txtarea" placeholder="Mention the reason" rows="5" cols="35"></textarea><br><br>
                    <input type="submit" value="Submit" class="btt">
                </div>
            </form>
           
        </div>
</body>
</html>