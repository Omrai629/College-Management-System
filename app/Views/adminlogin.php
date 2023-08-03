<html>
    <head>
        <style>
            body{
                background-color:#E0FFFF;
            }
            .card{
                width:300px;
                height:380px;
                margin:100px auto;
                border-style:solid;
                border-color:black;
                border-radius:10px;
            }
        </style>
    </head>
    <body>
    <div class="card">
    <div class="card-body">
        <form method="post" action="<?php echo base_url("adminlogin");?>">
            <h2><center>Admin Login</center></h2><br>

                <div class="mb-3">
                     <label for="name" class="form-label">Admin Username</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div><br>
                <div class="mb-3">
                    <label for="password" class="form-label">Admin Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div><br>
                <div class="mb-3">
                    <input type="submit" value="Login" class="btn btn-primary">
                </div>
        </form>
    </div>
    </div>
</body>
</html>