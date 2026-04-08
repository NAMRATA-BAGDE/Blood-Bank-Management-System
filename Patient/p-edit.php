<html>
    <body>
        <nav class="head">
            <li class="li1">Blood Bank Management System</li>
            <li class="li2"><span class="name">Name: </span><span class="user"></span></li>
            <li class="li3">
                <a href="patiendDashboard.php" class="a1">Dashboard</a>
                <a href="patient-request.php" class="a">Request Blood</a>
                <a href="p-request-history.php" class="a">Request History</a>
                <a href="../frontpage.php" class="a">Logout</a>
            </li>
        </nav>
        <div class="main">
            <div class="content">
                <form action="p-editDB.php">
                    <?php
                        $id = $_GET['id'];
                        $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                        $query = "Select * from requests where id= '$id'";
                        $result = mysqli_query($con,$query);
                        while( $row = mysqli_fetch_array($result) ){
                            echo "
                            <p>Update Page</p>
                            <input type='hidden' name='id' value='$row[id]'>
                            <span  class='txt'>Blood Group :</span><br>
                            <input type='text' name='t1' value='$row[blood_group]' class='td'><br><br>
                            <span  class='txt'>Units(in ml) :</span><br>
                            <input type='text' name='t2' value='$row[no_units]' class='td'><br><br>
                            <span class='txt'>Disease</span><br>
                            <textarea rows='5' cols='35' class='txtarea' name='t3' value='$row[reason]'></textarea><br><br>";
                        }
                    ?>
                    <input type="submit" value="Submit" class="btt">
                </form>
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
                margin-left: 90px;
            }
            .a{
                margin-left: 20px;
            }
            .main{
                width: 100%;
                height: 545px;
            }
            .content{
                width: 450px;
                height: 450px;
                margin-left: 520px;
                margin-top: 50px;
                border-radius: 30px;
                border-style: solid;
                border-width: 2px;
                border-color: black;
                box-shadow: 2px 2px 9px gray;
            }
            p{
                font-size: 35px;
                text-align: center;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            .txt{
                margin-left: 20px;
                font-size: 20px;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            .txtarea{
                margin-left: 20px;
                font-size: 17px;
                border-radius: 4px;
                border-style: solid;
                border-width: 1px;
                border-color: gainsboro;
            }
            .td{
                margin-left: 20px;
                width: 370px;
                height: 30px;
                border-color: ghostwhite;
                border-radius: 5px;
                font-size: 15px;
                font-weight: bold;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            .btt{
                margin-left: 20px;
                width: 80px;
                height: 30px;
                border: none;
                border-radius: 5px;
                background-color: brown;
                color: white;
                font-size: 20px;
                font-family: Georgia, 'Times New Roman', Times, serif;
                cursor: pointer;
            }
            .btt:hover{
                transform: scale(1.05);
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