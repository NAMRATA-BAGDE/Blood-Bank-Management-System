<html>
    <body>
        <?php
            $id = $_GET['id'];

            $con = mysqli_connect('localhost','root','','bloodbank');
            $query = "delete from patient_info where id = '$id'";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>alert('Database is DELETED')
                window.location='Apatientlist.php'</script>";
            }
        ?>
    </body>
</html>