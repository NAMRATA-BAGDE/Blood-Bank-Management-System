<html>
    <body>
    <nav class="head">
            <li class="li1">Blood Bank Management System</li>
            <li class="li2"><span class="name">Name: </span>
                <?php
                    session_start();
                    $k = $_SESSION['name'];

                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select * from patient_info where patient_name = '$k'";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($result)){
                        echo "<span class='user'>$row[patient_name]</span>";
                    }
                    session_abort();
                ?>
            </li>
            <li class="li3">
                <a href="patiendDashboard.php" class="a1">Dashboard</a>
                <a href="patient-request.php" class="a">Request Blood</a>
                <a href="p-request-history.php" class="a">Requests History</a>
                <a href="../frontpage.php" class="a">Logout</a>
            </li>
        </nav>
        <div class="main"><br>
            <center><span><u>Blood Request</u></span></center>
            <div class="content"><br><br>
                <span>S.No</span>
                <span class="head1">Patient ID</span>
                <span class="head2">Units (in ml)</span>
                <span class="head3">Status</span>
                <span class="head4">Action</span>
                <hr>
                <?php
                    session_start();
                    $u = $_SESSION['patient_id'];
                    $sno = 1;
                    $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                    $query = "Select * from requests where patient_id = '$u'";
                    $result = mysqli_query($con,$query);
                    echo "<table>";
                    while($row = mysqli_fetch_array($result)){
                        echo "
                            <tr>
                                <td><span class = 'txt1'>$sno</span></td>
                                <td><span class = 'txt2'>$row[id]</span></td>
                                <td><span class = 'txt3'>$row[no_units]</span></td>
                                <td><span class = 'txt4'>$row[status]</span></td>
                                <td><a href = 'p-edit.php?id=$row[id]' class = 'link1'>Edit</a><span>|</span><a href = 'p-delete.php?id=$row[id]' class = 'link2'>Delete</a></td>
                            </tr>
                        ";
                    }
                ?>
                </table>
            </div>
        </div>
        <div class="footer"><br>
<!--for copyright symbol © hold Alt and type 0169 --><p>© 2024 AakashBBMS</p>
        </div>
        <style>
            body{
                margin: 0;
            }
            .head{
                width: 100%;
                height: 50px;
                background-color: red;
                color: white;
                font-size: 25px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: 100;
            }
            .head a{
                text-decoration: none;
                color: white;
                font-size: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: 100;
            }
            .head a:hover{
                letter-spacing: 1px;
                color: black;
                font-weight: bold;
            }
            .li1{
                display: inline-block;
                padding: 11px;
            }
            .li2{
                display: inline-block;
                padding: 11px;
                margin-left: 80px;
            }
            .name{
                font-size: 20px;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-weight: bold;
            }
            .user{
                font-size: 16px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-weight: 100;
            }
            .li3{
                display: inline-block;
                padding: 11px;
                margin-left: 270px;
            }
            .a1{
                margin-left: 50px;
            }
            .a{
                margin-left: 20px;
            }
            .main{
                width: 100%;
                height: 595px;
            }
            .main span{
                font-size: 35px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-weight: bold;
            }
            .content{
                width: 38%;
                height: 500px;
                margin-left: 480px;
            }
            .content span{
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-weight: 700;
            }
            .head1{
                margin-left: 40px;
            }
            .head2{
                margin-left: 40px;   
            }
            .head3{
                margin-left: 40px;
            }
            .head4{
                margin-left: 60px;
            }
            .txt1{
                margin-left: 5px;
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            .txt2{
                margin-left: 90px;
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            .txt3{
                margin-left: 100px;
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            .txt4{
                margin-left: 110px;
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
            .link1{
                margin-left: 40px;
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-weight: 500;
            }
            .link2{
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-weight: 500;
            }
            b{
                font-size: 20px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bolder;
            }
            hr{
                border-width: 1px;
                border-color: darkblue;
            }   
            .footer{
                width: 100%;
                height: 50px;
                background-color: brown;
                text-align: center;
            }
            .footer p{
                margin-top: 5px;
                color: whitesmoke;
                font-size: 15px;
                font-family: Arial, Helvetica, sans-serif;
            }
        </style>
    </body>
</html>