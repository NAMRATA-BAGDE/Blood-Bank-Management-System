<html>
    <body>
        <?php
         $a=$_GET["x"];
         $b=$_GET["y"]; 
         $con= mysqli_connect('localhost','root','','bloodbank');
         $query="select * from patient_info where patient_name='$a' and password='$b'";
         $result=mysqli_query($con,$query);
         if($row=mysqli_fetch_array($result))
         {
            session_start();
            $_SESSION['patient_id'] = $row['id'];
            $_SESSION['name']=$row['patient_name'];
             echo"<script>
             window.location='patiendDashboard.php';
             </script>";
         }
         else
         {
             echo"<script>
             window.location='.php';
             </script>";
         }
         ?>
    </body>
</html>