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
        <form method="post" action="<?php echo base_url("Login");?>">
            <h2><center>Student Login</center></h2><br>

                <div class="mb-3">
                     <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                </div><br>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                </div><br>
                <div class="mb-3">
                    <input type="submit" value="Login" class="btn btn-primary">
                </div>
        </form>
    </div>
</div>
</body>
</html>