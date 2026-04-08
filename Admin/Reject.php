<html>//donar req list dashboad
    <body>
           <?php 
           $b=$_GET["id"];
           $con=mysqli_connect('localhost','root','' , 'bloodbank');
           $query="update donation_request set status='rejected' where ID='$b'";
           $result=mysqli_query($con,$query);
           if($result){
               echo"Response has been rejected";
           } else{
               echo"Response not rejected";
           }
          ?> 

    </body>
</html>