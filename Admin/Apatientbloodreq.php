<?php
session_start();
$con = mysqli_connect("localhost","root","","bloodbank");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Blood Requests</title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f9;
        }

        /* NAVBAR */
        .navbar {
            position: sticky;
            top: 0;
            background-color: crimson;
            padding: 12px 20px;
        }

        .navdiv {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo a {
            font-size: 30px;
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            list-style: none;
            display: inline-block;
        }

        li a {
            color: white;
            font-weight: bold;
            font-size: 18px;
            margin-right: 20px;
            text-decoration: none; /* underline removed */
        }

        li a:hover {
            opacity: 0.8;
        }

        .user {
            font-weight: bold;
        }

        /* MAIN */
        .main {
            padding: 20px;
        }

        .title {
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            color: #333;
        }

        .content {
            width: 95%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        th {
            background-color: crimson;
            color: white;
            padding: 12px;
            font-weight: 500;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* BUTTONS */
        .btt1 {
            background-color: #28a745;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btt2 {
            background-color: #dc3545;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btt1:hover {
            background-color: #218838;
        }

        .btt2:hover {
            background-color: #c82333;
        }

        /* FOOTER */
        footer {
            margin-top:320px;
            background-color: crimson;
            color: white;
            text-align: center;
            padding: 18px;
        }

        footer a {
            color: white;
            text-decoration: none;
        }
        .user {
    color: white;
    font: weight 18px;;
    display: block;
    text-align: center;
    margin-right: 150PX;
    }

    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="navdiv">
        <div class="logo">
            <a href="#"><i class="fa-solid fa-hand-holding-droplet"></i> LIFE SAVER</a>
        </div>

        <ul>
            <li>
                <?php
                $query = "SELECT * FROM admin_info";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_assoc($result)){
                  echo "<span class='user'>Name: {$row['Name']}</span>";
                }
                ?>
            </li>
            <li><a href="Adashboard.php">Dashboard</a></li>
            <li><a href="Adonarlist.php">Donar</a></li>
            <li><a href="Apatientlist.php">Patients</a></li>
            <li><a href="ADonREQ.php">Donations</a></li>
            <li><a href="Apatientbloodreq.php">Request</a></li>
            <li><a href="../frontpage.php">Logout</a></li>
        </ul>
    </div>
</nav>

<!-- MAIN -->
<div class="main">
    <div class="title">Manage Blood Requests</div>

    <div class="content">

        <table>
            <tr>
                <th>S.No</th>
                <th>Request ID</th>
                <th>Patient Name</th>
                <th>Mobile No</th>
                <th>Blood Group</th>
                <th>Units (ml)</th>
                <th>Status</th>
                <th>Disease</th>
                <th colspan="2">Action</th>
            </tr>

            <?php
            $sno = 1;

            $query = "
            SELECT 
                r.id AS request_id,
                p.patient_name,
                p.patient_mobile,
                r.blood_group,
                r.no_units,
                r.status,
                r.reason
            FROM requests r
            JOIN patient_info p 
            ON r.patient_id = p.id
            ";

            $result = mysqli_query($con, $query);

            while($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                    <td>$sno</td>
                    <td>{$row['request_id']}</td>
                    <td>{$row['patient_name']}</td>
                    <td>{$row['patient_mobile']}</td>
                    <td>{$row['blood_group']}</td>
                    <td>{$row['no_units']}</td>
                    <td>{$row['status']}</td>
                    <td>{$row['reason']}</td>
                    <td>
                        <a href='P-approve.php?id={$row['request_id']}'>
                            <button class='btt1'>Approve</button>
                        </a>
                    </td>
                    <td>
                        <a href='P-reject.php?id={$row['request_id']}'>
                            <button class='btt2'>Reject</button>
                        </a>
                    </td>
                </tr>
                ";
                $sno++;
            }
            ?>
        </table>

    </div>
</div>

<!-- FOOTER -->
<footer>
    HOME | Email: <a href="#">namratabagde22@gmail.com</a> | Contact: 7974413495
</footer>

</body>
</html>