<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#E0FFFF;
        }
        h1{
            margin-left: 5%;
        }
        p{
            font-size: 20px;
            font-weight: bold;
            margin-left: 5%;
        }
        form{
            float:initial;
            padding: 20px;
            
        }
        .a{
            margin-left: 60px;
        }
        .b{
            margin-left: 60px;
            
        }
        .c{
            margin-left: 60px;
        }
        .card{
            margin-top:-40px;
            margin-left:35%;
            margin-bottom:40px;
            width:450px;
            border-style:solid;
            border-width:2px;
            border-color:black;
            border-radius:10px;
        }
        img{
            border-style:solid;
        }
        .o{
           margin-top:-30px;
            height:100px;
        }
        .btn{
            float:right;
            margin-top:-50px;
        }
    </style>
</head>
<body>
   
    <br>
    <center><h2><u>STUDENT DETAILS</u></h2></center><br>
    <div class="o">
    <form method="post" action="<?php echo base_url("Update/edit_details/".session("user")->id);?>">
        <input type="submit" value="Edit Profile" class="btn btn-primary">
    </form>
    <form method="post" action="<?php echo base_url("change_password");?>">
        <input type="submit" value="Change Password" class="btn btn-secondary">
    </form>
    <form method="post" action="<?php echo base_url("logout/index");?>">
        <input type="submit" value="Logout" class="btn btn-danger">
    </form>
    </div>
<div class="card">
    <div class="card-body">
    <center><img src="<?php echo "public/Uploads/".session("user")->image;?>" height="150px" width="150px"></center><br><br>
    <p>Username: <i><?php echo session("user")->username; ?></i></p>
    <p>Email Address: <i><?php echo session("user")->email; ?></i></p>
    <p>Gender: <i><?php echo session("user")->gender; ?></i></p>
    <p>Phone: <i><?php echo session("user")->phone; ?></i></p>
    <p>Address:<i> <?php echo session("user")->address; ?></i></p>
    <p>Password: <i><?php echo session("user")->password; ?></i></p>
    </div>
    </div>
    

</body>
</html>
