
<!DOCTYPE html>
<html>
<head>
    <title>Patient Dashboard</title>
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
                            echo"<script>
                            alert('session failed ');
                            window.location='patientlog.php'</script>";
                            }
                            $a=$_SESSION['name'];
                            echo"Patient Name : $a";
                            ?>
                        </a>
                    </li>
                    <li><a href="patiendDashboard.php">Dashboard</a></li>
                    <li><a href="patient-request.php">Request</a></li>
                    <li><a href="p-request-history.php">Request History</a></li>
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