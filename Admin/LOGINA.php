<html>
    <body>
        <?php
        $a=$_GET["a1"];
        $b=$_GET["a2"]; 
        $con= mysqli_connect('localhost','root','','bloodbank');
        $query="select * from admin_info where Name='$a' and password='$b'";
        $result=mysqli_query($con,$query);
        if($row=mysqli_fetch_array($result))
        {
            session_start();
            $_SESSION['k']=$a;
            echo"<script>
            window .location='Adashboard.php';
            </script>";
        }
        else
        {
            echo"<script>
            window .location='.php';
            </script>";
        }

        ?>
    </body>
</html>