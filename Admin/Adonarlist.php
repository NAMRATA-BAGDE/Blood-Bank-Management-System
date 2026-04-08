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
            </a></li>
            <li><a href="Adashboard.php">Dashboard</a></li>
            <li><a href="Adonarlist.php">Donar</a></li>
            <li><a href="Apatientlist.php">patients</a></li>
            <li><a href="ADonREQ.php">Donations</a></li>
            <li><a href="Apatientbloodreq.php">Request</a></li>
            <li><a href="frontpage.php">Logout</a></li>
        </ul>
    </div>
</nav>

<div class="table-container">

<p class="title">List Of All Donors</p>

<center>
<?php
$con=mysqli_connect('localhost','root','','bloodbank');
$query="select * from donar_info";
$rl=mysqli_query($con,$query);

echo"<table>
<thead>
<tr>
<th>Name</th> 
<th>Email</th> 
<th>Mobile</th>  
<th>Age</th> 
<th>Gender</th> 
<th>Blood Group</th> 
<th>Action</th>
</tr>
</thead>
<tbody>";

while($row=mysqli_fetch_array($rl))
{
    echo"<tr>
        <td>$row[username]</td>
        <td>$row[email_id]</td>
        <td>$row[mobile_number]</td>
        <td>$row[age]</td>
        <td>$row[gender]</td>
        <td>$row[blood_group]</td>
        <td>
            <a href='Dlistedit.php?id=$row[id]'>
                <button class='btn btn-edit'>Edit</button>
            </a>
            <a href='Delete.php?id=$row[id]'>
                <button class='btn btn-delete'>Delete</button>
            </a>
        </td>
     </tr>";
}
echo"</tbody></table>";
?>
</center>

</div>

</body>

<style>
body{
    margin:0px;
    background:#f4f6f8;
}
*{
    text-decoration: none;
}

/* ===== NAVBAR (same) ===== */
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

/* ===== TITLE ===== */
.title{
    text-align:center;
    margin-top:30px;
    font-size:24px;
    font-weight:bold;
    font-family:sans-serif;
}

/* ===== TABLE ===== */
.table-container{
    width:90%;
    margin:30px auto;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

table{
    width:100%;
    border-collapse: collapse;
    font-family: Arial;
}

thead{
    background: crimson;
    color:white;
}

thead th{
    padding:12px;
    text-align:center;
}

tbody td{
    padding:12px;
    text-align:center;
    border-bottom:1px solid #ddd;
}

tbody tr:hover{
    background:#f9f9f9;
}

/* ===== BUTTONS ===== */
.btn{
    padding:6px 12px;
    border:none;
    border-radius:5px;
    cursor:pointer;
    font-size:13px;
}

.btn-edit{
    background:#3498db;
    color:white;
}

.btn-edit:hover{
    background:#2c80b4;
}

.btn-delete{
    background:#e74c3c;
    color:white;
}

.btn-delete:hover{
    background:#c0392b;
}

</style>
</html>