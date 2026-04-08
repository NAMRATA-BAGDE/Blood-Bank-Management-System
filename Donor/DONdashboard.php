<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
    <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><a href="#"><i class="fa-solid fa-hand-holding-droplet" style="font-size:25px;"></i> LIFE SAVER</a></div>
                <ul>
                    <li><a class=x>
                            <?php 
                            session_start();
                            if(isset($_SESSION['donar'])==false)
                            {
                            echo"<script> window.location='DONdashboard.php' </script>";
                            }
                            $a=$_SESSION['donar'];
                            echo"Donar Name : $a";
                            ?>
                        </a>
                    </li>
                    <li><a href="DONdashboard.php">Dashboard</a></li>
                    <li><a href="donation.php">Donate</a></li>
                    <li><a href="REQUEST.php">Request</a></li>
                    <li><a href="../frontpage.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="main">
            <div class="blood-grp1">
                <h3>Blood donated</h3>
                <p id="">Total:  <span>units</span></p>
            </div>
            <div class="blood-grp2">
                <h3>Total Requests</h3>
                <p id="">Total: </p>
            </div>
            <div class="blood-grp3">
                <h3>Request Pending</h3>
                <p id="">Total: </p>
            </div>
            <div class="blood-grp4">
                <h3>Request Accepted</h3>
                <p id="">Total: </p>
            </div>
            <div class="blood-grp5">
                <h3>Request Rejected</h3>
                <p id="">Total: </p>
            </div>
        </div>
        <div class="fake"></div>
      
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
        .x{
            color:white;
            font-size: 18px;
            font-weight: bold;
            margin-right :200px;
           
        }
        .main {
           display: flex; 
           flex-wrap: wrap; 
           gap: 20px; 
          padding: 20px;
           justify-content: flex-start; 
              }
        .main div{
                width: 250px;
                height: 150px;
                border-radius: 8px;
                border-width: 1px ;
                border-style: solid;
                border-color: black;
                font-family: 'Arial, sans-serif';
                box-shadow: 2px 2px 9px black;
                display: flex;
                 flex-direction: column;
                 justify-content: center;
            }
            .main div p{
                margin-left: 30px;
                font-size: 17px;
                font-weight: bold;
            }
            h3{
                margin-left: 30px;
                font-size: 22px;
                color: red;
            }
            .blood-grp1{
                margin-left: 20px;
                margin-top: 20px;
            }
            .blood-grp2{
                margin-top: 20px;
            }
            .blood-grp3{
                margin-top: 20px;
            }
            .blood-grp4{
                margin-top: 20px;
            }
            .blood-grp5{
                margin-top: 20px;
                margin-left: 20px;
            }
        footer{
            position:sticky;
            background-color:black;
            color: white;
            height:58px ; 
            margin-top:380px;
               
        }
        .p{
            margin-left:400px;   
        }
        .p li{
            margin-top:20px;
        }
       
    </style>

</html>