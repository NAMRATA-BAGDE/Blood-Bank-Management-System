<html>
       <body>
           <?php 
           $a=$_GET["p1"];
           $b=$_GET["p2"];
           $c=$_GET["p3"];
           $d=$_GET["p4"];
           
           $con=mysqli_connect('localhost' , 'root' , '','bloodbank');
           $query="insert into patient_info values('NULL','$a','$b','$c','$d')";
           $result=mysqli_query($con,$query);
           if($result){
               echo"<script>
               alert('USER SUCCESSFULLY REGISTRED')
               window.location='patientlog.php'
               </script> ";
               
           }else{
   
               echo"ERROR IN REGISTRATION";
           }
           ?>
       </body>
   </html>
         
      
      