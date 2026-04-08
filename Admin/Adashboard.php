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
                        if(isset($_SESSION['k'])==false)
                        {
                          echo"<script> window.location='Adashboard.php' </script>";
                        }
                        $a=$_SESSION['k'];
                        echo"Admin Name : $a";
                        ?></a>
                    </li>
                    <li><a href="Adashboard.php">Dashboard</a></li>
                    <li><a href="Adonarlist.php">Donar</a></li>
                    <li><a href="Apatientlist.php">patients</a></li>
                    <li><a href="ADonREQ.php">Donations</a></li>
                    <li><a href="Apatientbloodreq.php">Request</a></li>
                    <li><a href="../frontpage.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="main">
            <div class="blood-grp1">
                <h3>A</h3>
                <p>Bloods Available</p>
                <p id="">Total:  <?php
                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select sum(units) as units from donation_request where blood_group = 'A' and status = 'approved'";
                    $result = mysqli_query($con, $query);
                    if($row = mysqli_fetch_array($result)){
                        echo "$row[units]";
                    }
                ?> <span>units</span></p>
            </div>
            <div class="blood-grp2">
                <h3>A+</h3>
                <p>Bloods Available</p>
                <p id="">Total:  <?php
                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select sum(units) as units from donation_request form where blood_group = 'A+' and status = 'approved'";
                    $result = mysqli_query($con, $query);
                    if($row = mysqli_fetch_array($result)){
                        echo "$row[units]";
                    }
                ?> <span>units</span></p>
            </div>
            <div class="blood-grp3">
                <h3>A-</h3>
                <p>Bloods Available</p>
                <p id="">Total:  <?php
                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select sum(units) as units from donation_request where blood_group = 'A-' and status = 'approved'";
                    $result = mysqli_query($con, $query);
                    if($row = mysqli_fetch_array($result)){
                        echo "$row[units]";
                    }
                ?> <span>units</span></p>
            </div>
            <div class="blood-grp4">
                <h3>B</h3>
                <p>Bloods Available</p>
                <p id="">Total:  <?php
                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select sum(units) as units from donation_request where blood_group = 'B' and status = 'approved'";
                    $result = mysqli_query($con, $query);
                    if($row = mysqli_fetch_array($result)){
                        echo "$row[units]";
                    }
                ?> <span>units</span></p></div>
            <div class="blood-grp5">
                <h3>B+</h3>
                <p>Bloods Available</p>
                <p id="">Total:  <?php
                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select sum(units) as units from donation_request where blood_group = 'B+' and status = 'approved'";
                    $result = mysqli_query($con, $query);
                    if($row = mysqli_fetch_array($result)){
                        echo "$row[units]";
                    }
                ?> <span>units</span></p></div>
            <div class="blood-grp6">
                <h3>B-</h3>
                <p>Bloods Available</p>
                <p id="">Total:  <?php
                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select sum(units) as units from donation_request where blood_group = 'B-' and status = 'approved'";
                    $result = mysqli_query($con, $query);
                    if($row = mysqli_fetch_array($result)){
                        echo "$row[units]";
                    }
                ?> <span>units</span></p></div>
            <div class="blood-grp7">
                <h3>AB+</h3>
                <p>Bloods Available</p>
                <p id="">Total:  <?php
                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select sum(units) as units from donation_request  where blood_group = 'AB+' and status = 'approved'";
                    $result = mysqli_query($con, $query);
                    if($row = mysqli_fetch_array($result)){
                        echo "$row[units]";
                    }
                ?> <span>units</span></p></div>
            <div class="blood-grp8">
                <h3>AB-</h3>
                <p>Bloods Available</p>
                <p id="">Total:  <?php
                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select sum(units) as units from  donation_request form where blood_group = 'AB-' and status = 'approved'";
                    $result = mysqli_query($con, $query);
                    if($row = mysqli_fetch_array($result)){
                        echo "$row[units]";
                    }
                ?> <span>units</span></p>
            </div>
            <div class="blood-grp9">
                <h3>O+</h3>
                <p>Bloods Available</p>
                <p id="">Total:  <?php
                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select sum(units) as units from donation_request  where blood_group = 'O-' and status = 'approved'";
                    $result = mysqli_query($con, $query);
                    if($row = mysqli_fetch_array($result)){
                        echo "$row[units]";
                    }
                ?> <span>units</span></p></div>
            <div class="blood-grp10">
                <h3>O-</h3>
                <p>Bloods Available</p>
                <p id="">Total:  <?php
                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select sum(units) as units from donation_request form where blood_group = 'O-' and status = 'approved'";
                    $result = mysqli_query($con, $query);
                    if($row = mysqli_fetch_array($result)){
                        echo "$row[units]";
                    }
                ?> <span>units</span></p></div>
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
      
        .p{
            margin-left:400px;   
        }
        .p li{
            margin-top:20px;
        }
        .x{
            color:white;
            font-size: 18px;
            font-weight: bold;
            margin-right :200px;
            
        }
        .main{
                width: 90%;
                height: 395px;
                display: grid;
                grid-template-columns: auto auto auto auto auto;
            }
            .main div{
                width: 250px;
                height: 150px;
                border-radius: 5px;
                border-width: 2px;
                border-style: solid;
                border-color: black;
                font-family: 'Arial, sans-serif';
                box-shadow: 2px 2px 2px black;
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
            }
            .blood-grp6{
                margin-left: 20px;
            }
            
    </style>


</html>