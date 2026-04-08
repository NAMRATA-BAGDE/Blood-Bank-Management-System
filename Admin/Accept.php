<html>
    <body>
    <?php
        $a=$_GET['id'];
        $con=mysqli_connect('localhost','root','','bloodbank');
        $query="Update donation_request set status ='approved' where ID = '$a'";
        $result=mysqli_query($con,$query);
        if($result){
            echo"<script>alert('UPDATED');
            window.location='ADonREQ.php';</script>";
        } else{
            echo"Data not updated";
        }
        ?>
    </body>
</html>