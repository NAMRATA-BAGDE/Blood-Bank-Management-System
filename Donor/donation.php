<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
    <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><a href="#"><i class="fa-solid fa-hand-holding-droplet" style="font-size:25px;"></i> LIFE SAVER</a></div>
                <ul> <li><a class=x>
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
                    <li><a href="#">Donate</a></li>
                    <li><a href="REQUEST.php">Request</a></li>
                    <li><a href="frontpage.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="Dform">
            <form action="donationDB.php">
                <center>
                <h2>Blood Donation Form</h2>
                <span>Blood Group :</span><select name="t1"><br>
                <option>A+</option>
                <option>B+</option>
                <option>AB+</option>
                <option>A-</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                 </select><br>
                <span>NO .OF units</span><input type="text" name="t2"><br><br>
                <span>Dieases (if any)</span><input type="text"  name="t3"><br><br><br>
                <input type="submit" class="but" value="submit">
                </center>
            </form>
        </div>
       
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
        footer{
            position:sticky;
            background-color:black;
            color: white;
            height:58px ;  
            margin: top 50px;;  
        }
        .p{
            margin-left:400px;   
        }
        .p li{
            margin-top:20px;
        }
          .Dform {
    width: 400px; 
    margin: 80px auto; 
    padding: 30px;
    background-color: white;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.15); /* Modern shadow */
    border: 1px solid #ddd; /* Patla border */
    font-family: Arial, sans-serif;
}

.Dform input[type="text"], 
.Dform select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


.Dform span {
    display: block;
    text-align: left;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
}
.but {
    width: 100%;
    background-color:crimson;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}
</style>
</html>