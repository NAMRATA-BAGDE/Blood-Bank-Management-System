<html>
    <body>
        <?php 
        $a=$_GET["t1"];
        $b=$_GET["t2"];
        $c=$_GET["t3"];
        $d=$_GET["t4"];
        $e=$_GET["t5"];
        $f=$_GET["t6"];
        $g=$_GET["t7"];
        $con=mysqli_connect('localhost' , 'root' , '','bloodbank');
        $query="insert into donar_info values('NULL','$a','$b','$c','$d','$e' ,'$f','$g')";
        $result=mysqli_query($con,$query);
        if($result){
            echo"USER SUCCESSFULLY REGISTRED";
        }else{

            echo"ERROR IN REGISTRATION";
        }
        ?>
    </body>
</html>