<html>
    <body>
        <?php
            $id = $_GET['id'];
            $name = $_GET['t1'];
            $email = $_GET['t2'];
            $password = $_GET['t3'];
            $mobile = $_GET['t4'];

            $con = mysqli_connect('localhost','root','','bloodbank');
            $query = "Update patient_info set patient_name = '$name', patient_email = '$email', password = '$password', patient_mobile = '$mobile' where id = '$id'";
            $result = mysqli_query($con, $query);
            if($result){
                echo "<script>alert('Database is Updated')
                window.location='Apatientlist.php'</script>"; 
            }
            else{
                echo "<script>alert('Database is having an ERROR')</script>";
            }
        ?>
    </body>
</html>