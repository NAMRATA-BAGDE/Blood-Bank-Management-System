 <?php
                    $con = mysqli_connect("localhost","root","","bloodbank");
                    $query = "Select * from admin_info";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($result)){
                        echo "<span class='user'>$row[Name]</span>";
                    }
                ?>



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
                <a href="Adashboard.php" class="a1">Dashboard</a>
                <a href="Adonarlist.php" class="a">Donor</a>
                <a href="Apatientlist.php" class="a">Patient</a>
                <a href="ADonREQ.php" class="a">Donation</a>
                <a href="Apatientbloodreq.php" class="a">Requests</a>
                <a href="frontpage.php" class="a">Logout</a>
            </li>
        </nav>