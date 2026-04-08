<html>
    <body>
        <?php
            $id = $_GET['id'];
            $name = $_GET['t1'];
            $email = $_GET['t2'];
            $password = $_GET['t3'];
            $mobile = $_GET['t4'];

            $con = mysqli_connect('localhost','root','','bloodbank');
            $query = "Update donar_info set username = '$name', email_id = '$email', password = '$password', mobile_number = '$mobile' where id = '$id'";
            $result = mysqli_query($con, $query);
            if($result){
                echo "<script>alert('Database is Updated')
                window.location='Dlistedit.php'</script>"; 
            }
            else{
                echo "<script>alert('Database is having an ERROR')</script>";
            }
        ?>
    </body>
</html>