<html>
    <body>
        <?php
            $id = $_GET['id'];
            $con = mysqli_connect('localhost','root','','bloodbank');
            $query = "delete from donar_info where id = '$id'";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>alert('Database is DELETED')
                window.location='Adonarlist.php'</script>";
            }
            else{
                echo "<script>alert('Database is having an ERROR')</script>";
            }
        ?>
    </body>
</html>