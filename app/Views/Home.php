<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body{
            
            background-color: #E0FFFF;
        }
        h1{
            
            margin:1.5% auto;
            color:darkblue;
        }
        .box{
            margin-top:3%;
            margin-left:20%;
            width:750px;
            height:80px;
            border-style:solid;
            border-color:darkblue;
            border-radius:10px;
        }
        .con{
            height:100%;
            width:100%;
            
        }
        .img1{
            margin-top:60px;
            margin-left:10%;
            width:500px;
            height:350px;
            border-style:solid;
            border-width: 2px;
        }
        .c1{
            width:50%;
        }
        .c2{
        
           margin-right:30px; 
          width:50%;
          float:right;
          margin-top:-350px;
        }
        p{
            color:darkblue;
            font-size:30px;
            font-family:cursive;
        }
      
    </style>
        
</head>
<body>
    <div class="con">
    <div class="box"> 
    <h1><center><i>COLLEGE MANAGEMENT SYSTEM</i></center></h1>
    </div>
    <div class="content">
        <div class="c1">
            <img src="<?php echo base_url('public/Uploads/5.jpg'); ?>" class="img1">
        </div>
        <div class="c2">
             <p><i>Hey...Welcome to my Website. <br>This is a college management System developed with the functionalities such as
                User Signup/Login, Admin Login, User Details, Faculty Details etc.</i><p>
        </div>
    </div>
    </div>
    
</body>
</html>