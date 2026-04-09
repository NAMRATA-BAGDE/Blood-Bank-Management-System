<html>
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
    
        <div class="main"><br>
            <center><span>List of all Patient</span></center>
            <div class="content"><br><br>
                <table>
                    <tr>   
                        <td><span class="head1">S.No</span></td>
                        <td><span class="head2">Patient ID</span></td>
                        <td><span class="head2">Patient Name</span></td>
                        <td><span class="head2">Patient Email</span></td>
                        <td><span class="head2">Mobile No</span></td>
                        <td><span class="head2">Action</span></td>
                    </tr>
                </table>
                <hr>
                <?php
                    $sno = 1;
                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select * from patient_info";
                    $result = mysqli_query($con,$query);
                    echo "<table>";
                    while($row = mysqli_fetch_array($result)){
                        echo "
                            <tr>
                                <td><span class='txt1'>$sno</span></td>
                                <td><span class='txt2'>$row[id]</span></td>
                                <td><span class='txt3'>$row[patient_name]</span></td>
                                <td><span class='txt4'>$row[patient_email]</span></td>
                                <td><span class='txt5'>$row[patient_mobile]</span></td>
                                <td><a href='admin_patient_edit.php?id=$row[id]'><input type='button' value='Edit' class='btt1'></a></td>
                                <td><a href='admin_patient_delete.php?id=$row[id]'><input type='button' value='Delete' class='btt2'></a></td>
                            </tr>
                        ";
                        $sno++;
                    }
                ?>
                </table>
            </div>
        </div>
        <footer>
            <ul class="p">
                <li>HOME</li> <span>|</span>
                <li>Email-<a href="#">namratabagde22@gmail.com</a></li> <span>|</span>
                <li>contact number : 7974413495</li>
            </ul>
        </footer>
       
        <style>
            body{
                margin: 0;
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
            margin: top 700px; ;
            position:sticky;
            background-color:crimson;
            color: white;
            height:58px ;    
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
                width: 100%;
                height: 595px;
            }
            .main span{
                font-size: 30px;
                font-family:  sans-serif;
               
            }
            .content{
                width: 60%;
                height: 500px;
                margin-left: 360px;
            }
            .content span{
                font-size: 15px;
                font-family:  sans-serif;
                
            }
            hr{
                border-width: 1px;
                border-color: black;
            }
            .head1{
                font-size: 30px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .head2{
                font-size: 30px;
                font-family: sans-serif;
                margin-left: 70px;
            }
            .txt1{
                font-size: 15px;
                font-family:  sans-serif;
                margin-left: 5px;
            }
            .txt2{
                font-size: 15px;
                font-family:  sans-serif;
                margin-left: 145px;
            }
            .txt3{
                font-size: 15px;
                font-family: sans-serif;
                margin-left: 80px;
            }
            .txt4{
                font-size: 15px;
                font-family:  sans-serif;
                margin-left: 100px;
            }
            .txt5{
                font-size: 15px;
                font-family:sans-serif;
                margin-left: 15px;
            }
            .btt1{
                width: 45px;
                height: 30px;
                border: none;
                background-color: green;
                border-radius: 5px;
                color: white;
                font-size: 20px;
                font-family: sans-serif;
                margin-left: 30px;
                cursor: pointer;
            }
            .btt1:hover{
                transform: scale(1.05);
            }
            .btt2{
                width: 65px;
                height: 30px;
                border: none;
                background-color: red;
                border-radius: 5px;
                color: white;
                font-size: 20px;
                font-family: sans-serif;
            }
            .btt2:hover{
                transform: scale(1.05);
            }
            .footer{
                width: 100%;
                height: 50px;
                background-color: brown;
                text-align: center;
            }
            
        </style>
    </body>
</html>
            