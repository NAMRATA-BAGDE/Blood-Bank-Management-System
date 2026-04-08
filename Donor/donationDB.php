<html>
    <body>
        <?php
        $a=$_GET['t1'];
        $b=$_GET['t2'];
        $c=$_GET['t3'];
        $con=mysqli_connect('localhost','root','','bloodbank');
        $query="insert into donation_request values(NULL,'$a','$b','$c','pending')";
        $result=mysqli_query($con,$query);
        if($result){
            echo"blood donation request sucessfully added";
        }else{

            echo"ERROR IN REGISTRATION";
        }
         ?>
    </body>
</html>