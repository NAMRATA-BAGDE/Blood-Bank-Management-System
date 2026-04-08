<html>
    <body>
        <?php
            $id = $_GET['id'];
            $blood = $_GET['t1'];
            $units = $_GET['t2'];
            $disease = $_GET['t3'];
            $con = mysqli_connect('localhost', 'root', '', 'bloodbank');
            $query = "Update requests set blood_group = '$blood', no_units = '$units', reason = '$disease'";
            $result = mysqli_query($con, $query);
            if($result){
                echo "<script>alert('Database is Updated')
                window.location='p-request-history.php'</script>"; 
            }
            else{
                echo "<script>alert('Database is having an ERROR')</script>";
            }
        ?>
    </body>
</html>