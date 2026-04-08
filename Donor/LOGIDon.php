<html>
    <body>
        <?php 
            $a=$_GET["b1"];
            $b=$_GET["b2"]; 
            $con= mysqli_connect('localhost','root','','bloodbank');
            $query="select * from donar_info where username='$a' and password='$b'";
            $result=mysqli_query($con,$query);
            if($row=mysqli_fetch_array($result))
            {
                session_start();
                $_SESSION['donar']=$a;
                echo"<script>
                window.location='DONdashboard.php';
                </script>";
            }
            else
            {
                echo"<script>
                window.location='DonarReg.php';
                </script>";
            }

        ?>
    </body>
</html>