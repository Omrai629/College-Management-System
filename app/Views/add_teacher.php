<html>
    <head>
        <style>
            body{
                background-color:#E0FFFF;
            }
            .card{
                margin:40px auto;
                width:650px;
                border-color:black;
                border-radius:10px;
                border-width:2px;
            }
            .btn{
                margin-top:20px;
            }
           
        </style>
    </head>
    <body>



<div class="card">
    <div class="card-body">
        <form method="post" action="<?php echo base_url("add_teacher/add_Details");?>" enctype="multipart/form-data">
            <h2><center>Teacher Registration</center></h2>
                <div class="mb-3">
                     <label for="tname" class="form-label">Name</label>
                    <input type="text" name="tname" class="form-control" id="username" placeholder="Enter Name" required>
                </div>
                <div class="mb-3">
                     <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                </div>
                <p>Select Gender</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">
                     Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" checked>
                    <label class="form-check-label" for="female">
                    Female
                    </label>
                </div>
                <div class="mb-">
                     <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="mb-3 ">
                     <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address" required>
                </div>
        
               
                <div class="mb-3">
                    <input type="submit" value="Add Teacher" class="btn btn-primary">
                </div>
        </form>
    </div>
</div>
</body>
</html>