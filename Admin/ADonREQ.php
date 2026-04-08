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
                          echo"<script> window.location='Adonarlist.php' </script>";
                        }
                        $a=$_SESSION['k'];
                        echo"Admin Name : $a";
                        ?>
                    </a>
                </li>
                <li><a href="Adashboard.php">Dashboard</a></li>
                <li><a href="Adonarlist.php">Donar</a></li>
                <li><a href="Apatientlist.php">patients</a></li>
                <li><a href="ADonREQ.php">Donations</a></li>
                <li><a href="Apatientbloodreq.php">Request</a></li>
                <li><a href="frontpage.php">Logout</a></li>
                </ul>
            </div>
        </nav>

       <center>
          <h2>Manage Donation Request.</h2>
        
        <?php
        $con=mysqli_connect('localhost','root','','bloodbank');
        $query= "select * from donation_request";
        $rl=mysqli_query($con,$query);
    
        echo"<table cellpadding='6' cellspacing='2'><th>Donar Id</th> <th> blood_group</th> <th>Unit</th>  <th>Dieases</th>  <th>ACTION</th> <th>status</th>";
        while($row=mysqli_fetch_array($rl))
        {
          
                 echo"<tr>
                 <td>$row[ID]</td>
                 <td>$row[blood_group]</td>
                 <td>$row[units]</td>
                 <td>$row[dieases]</td>
                 <td>
                 <a href='Accept.php?id=$row[ID]'><button>ACCEPT</button></a>
                 <a href='Reject.php?id=$row[ID]'><button>REJECT</button></a>
                 </td>
                 <td>$row[status]</td>
                 </tr>";
               
        }
        echo"</table>";
         ?>
         </center>
    
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
        .btn-a{

        color: green;

        }

        .btn-r{
           color: crimson;
        }
        table {
    width: 90%;
    margin-top: 20px;
    border-collapse: collapse;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
}

table th {
    background: crimson;
    color: white;
    padding: 12px;
    text-align: center;
    font-size: 14px;
}

table td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

table tr:hover {
    background: #f9f9f9;
}

table button {
    padding: 6px 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 12px;
    margin: 2px;
}


table button:last-child {
    background: #e74c3c;
    color: white;
}

table button:last-child:hover {
    background: #c0392b;
}

        
    </style>    

</html>