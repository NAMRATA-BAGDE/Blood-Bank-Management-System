<html>
    <body>
        <nav class="head">
            <li class="li1">Blood Bank Management System</li>
            <li class="li2"><span class="name">Name: </span>
                <?php
                    $con = mysqli_connect("localhost","root","","bloodbank");
                    $query = "Select * from admin_info";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($result)){
                        echo "<span class='user'>$row[Name]</span>";
                    }
                ?>
            </li>
            <li class="li3">
                <a href="DONdashboard.php" class="a1">Dashboard</a>
                <a href="Adonarlist.php" class="a">Donor</a>
                <a href="Apatientlist.php" class="a">Patient</a>
                <a href="ADonREQ.php" class="a">Donation</a>
                <a href="Apatientbloodreq.php" class="a">Requests</a>
                <a href="frontpage.php" class="a">Logout</a>
            </li>
        </nav>
        <div class="main">
            <div class="content">
                <form action="D-editDB.php">
                    <?php
                        $id = $_GET['id'];

                        $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
                        $query = "Select * from donar_info where id = '$id'";
                        $result = mysqli_query($con,$query);
                        while( $row = mysqli_fetch_array($result) ){
                            echo "
                            <p>Update Page</p>
                            <span  class='txt'>Name :</span><br>
                            <input type='hidden' name='id' value='$row[id]'>
                            <input type='text' name='t1' value='$row[username]' class='td'><br><br>
                            <span  class='txt'>Email ID :</span><br>
                            <input type='text' name='t2' value='$row[email_id]' class='td'><br><br>
                            <span  class='txt'>Password :</span><br>
                            <input type='text' name='t3' value='$row[password]' class='td'><br><br>
                            <span  class='txt'>Mobile No. :</span><br>
                            <input type='text' name='t4' value='$row[mobile_number]' class='td'><br><br>";
                        }
                    ?>
                    <input type="submit" value="Submit" class="btt">
                </form>
            </div>
        </div>
         <footer>
            <ul class="p">
                <li>HOME</li> <span>|</span>
                <li>Email-<a href="#">namratabagde22@gmail.com</a></li> <span>|</span>
                <li>contact number : 7974413495</li>
            </ul>
        </footer>
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
                margin-left: 30px;
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