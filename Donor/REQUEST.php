<html>
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
                            echo"<script> window.location='donation.php' </script>";
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
        <center>
        <p><h1>List of Request</h1> </p>
       <?php
       $con=mysqli_connect('localhost','root','','bloodbank');
       $query="select * from donation_request";
       $result=mysqli_query($con,$query);
       echo"<table cellpadding='6' cellspacing='2'><th>Donar Id</th> <th> blood_group</th> <th>Unit</th>  <th>Dieases</th>  <th>STATUS</th>";
       while($row=mysqli_fetch_array($result))
       {
           echo"<tr>
               <td>$row[ID]</td>
               <td>$row[blood_group]</td>
               <td>$row[units]</td>
               <td>$row[dieases]</td> 
               <td>$row[status]</td>
            </tr>";
       }
       echo"</table>";
       ?>
       </center>
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
        /* Table ka main container */
     table {
    width: 85%;
    margin: 30px auto;
    border-collapse: collapse; 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1); 
    background-color: white;
}


table th {
    background-color: crimson;
    color: white;
    padding: 15px;
    text-align: left;
    text-transform: uppercase;
    font-size: 14px;
}

/* Table Data (td) ki styling */
table td {
    padding: 12px 15px;
    border-bottom: 1px solid #ddd;
    color: #333;
    font-size: 15px;
}

/* Zebra Striping (Ek row ke baad ek color) */
table tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Hover effect: Mouse le jane par row highlight hogi */
table tr:hover {
    background-color: #e9ecef;
}


.status-pending { color: orange; font-weight: bold; }
.status-approved { color: green; font-weight: bold; }

.title-text {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-top: 20px;
    text-decoration: underline;
}   
footer {
        background-color: black;
        color: white;
        padding: 15px;
        text-align: center;
        margin-top: 275px;
    }
    .p { margin: 0; padding: 0; }
    .p li { margin: 0 10px; font-size: 14px; }
    .fx{
        margin-left: 400px;
    }
    </style>
</html>