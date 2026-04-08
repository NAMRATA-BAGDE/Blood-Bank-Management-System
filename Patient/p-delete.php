<html>
    <body>
        <?php
            $id = $_GET['patient_id'];
            $con = mysqli_connect('localhost','root','','bloodbank');
            $query = "delete from requests where patient_id = '$id'";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>alert('Database is DELETED')
                window.location='p-request-history.php'</script>";
            }
            else{
                echo "<script>alert('Database is having an ERROR')</script>";
            }
        ?>
    </body>
</html>