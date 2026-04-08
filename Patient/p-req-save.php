<html>
    <body>
        <?php
            session_start();
            $id = $_SESSION['patient_id'];
            $t1 = $_GET['t1'];
            $s = $_GET['s'];
            $t2 = $_GET['t2'];

            $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
            $query = "insert into requests value(NULL, $id, $t1, '$s', '$t2', 'pending')";
            echo"$query";
            $result = mysqli_query($con, $query);
            if($result){
                echo "<script>alert('Request Sent'); 
                window.location = 'patient-request.php'</script>";
            }
        ?>
    </body>
</html>