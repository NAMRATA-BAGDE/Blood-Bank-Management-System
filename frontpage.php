<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><a href="#"><i class="fa-solid fa-hand-holding-droplet" style="font-size:25px;"></i> LIFE SAVER</a></div>
                <ul>
                    <li><a href="frontpage.php">Home</a></li>
                    <li><a href="adminlogin.php">Admin</a></li>
                    <li><a href="Donarlogin.php">Donar</a></li>
                    <li><a href="patientlog.php">Patient</a></li>
                </ul>
            </div>
        </nav>
        <div class="main">
            <div class="desc">
                <h2>WHAT IS BLOOD BANK MANAGMENT SYSTEM ?</h2>
                <p>A blood bank management system (BBMS) is a software system that helps manage blood donations and blood samples. It can also help with blood bag handling, blood testing, and reporting.
                Tracks blood donations, blood types, and inventory levels ,Helps manage blood bags, including blood testing and delivery to patients ,Generates reports such as blood stock reports, donor reports, and donation totals 
                Helps bridge the gap between blood supply and demandWhat is the main purpose of a blood bank ,A blood bank is a place where blood is collected and stored before it is used for transfusions. Blood banking takes place in the lab. This is to make sure that donated blood and blood products are safe before they are used. .
                </p>
                <button>Read More ...</button>
            </div>
            <div class="hero-image">
            <img src="heroimage.jpg" alt="Blood Donation">
        </div>

    </div> 
     </div>
           
        </div> 
        <footer>
            <ul class="p">
                <li>HOME</li> <span>|</span>
                <li>Email-<a href="#">namratabagde22@gmail.com</a></li> <span>|</span>
                <li>contact number : 7974413495</li>
            </ul>
        </footer>
    </body>

    <style>
       body{
            margin:0px;
            body {
    /* Image ka naam aur extension wahi rakhein jo folder mein hai */
    background-image: url('bagimg.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    
    margin: 0;
}
        }
        *{
            text-decoration: none;
        }
        .navbar{
            position:sticky;
            top: 0px;
            background-color: crimson;
            font-family:Arial, Helvetica, sans-serif;
            padding-right:15px;
            padding-left: 15px;
        }
        .navdiv{
            display:flex;
            align-items:center;
            justify-content: space-between;
        }
        .logo a{
            font-size:30px;
            list-style:none;
            display: inline-block;
            color: white;
        }
        li{
            list-style:none;
            display:inline-block;
        }
        li a{
            color:white;
            font-size: 18px;
            font-weight: bold;
            margin-right :25px;
        }
        footer{
            position:sticky;
            background-color:crimson;
            color: white;
            height:58px ;    
        }
        .p{
            margin-left:400px;   
        }
        .p li{
            margin-top:20px;
        }
        .main {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 76vh; /* Screen ki height ke hisab se */
         padding: 20px;
}

/* Ye wrapper text aur image ko side-by-side layega */
      .content-wrapper {
    display: flex;
    align-items: center;
    gap: 120px; /* Text aur Image ke beech ki doori */
    max-width: 1200px;
}
        .desc{ 
          
            margin-left:100px;
            background-color:lightcoral;
            color:black;
            width:800px ;
            height:350px ;
            border-radius:10px;
        }
        h2{
            margin: 0px;
            margin-top:30px ;
            margin-left:20px ;
        }
        p{
            margin: 0px;
            margin-top: 20px;
            margin-left:20px ;
            margin-right: 20px;
            font-family: sans-serif;
            font-size: 15px;
        }
        button{
            margin-top:20px;
            margin-left: 20px;
            background-color: red;
            color: white;
            width:150px;
            height: 30px;
            border-radius:10px;

        }
        .hero-image img {
                  margin-left:150px ;
                  width: 350px; 
                   height: auto;
                  border-radius: 15px;
                  box-shadow: 10px 10px 20px rgba(0,0,0,0.2);
}

    </style>
</html>