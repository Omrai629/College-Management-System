<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body{
            background-color: #E0FFFF;
        }
        h1{
            color: darkblue;
            margin:20px auto;
        }
        .menu{
            margin:20px auto;
            width:300px;
            border-style: solid; 
        }
        h2{
            margin-left: 15%;;
        }
        .b1{
            float:right;
            padding:10px;
            margin-right:40px;
        }
        .o{
            width:100%;
            height:100px;
        }
        table{
            margin-left:8%;
            font-size:25px;
            padding:10px;
            border:2px solid yellow; 
            border-bottom:none;
        }
        th,td{
            border:2px solid violet;
            font-size:20px;
            padding:15px;
        }
        .btn-success{
            float:right;
            width:150px;
            margin-top:45px;
            margin-right:130px;
        }
        .aa{
            margin-bottom:50px;
        }
        .fo{
            margin-left:8%;
            margin-top:40px;
            margin-bottom:50px;
        }
    </style>
</head>
<body>
    
    

    <div class="menu">
        <h1><Center>ADMIN PANEL</Center></h1>
    </div>
<div class="o">
    <form method="post" action="<?php echo base_url("adminlogin/index");?>">
        <input type="submit" value="Logout" class="btn btn-danger b1">
    </form>
    <form method="post" action="<?php echo base_url("change_password_admin");?>">
        <input type="submit" value="Change Password" class="btn btn-secondary b1">
    </form>
    </div>

    <h2><u>STUDENT DETAILS</u></h2><br>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $row): ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->username; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->gender; ?></td>
                <td><?php echo $row->phone; ?></td>
                <td><?php echo $row->address; ?></td>
                <td><?php echo $row->password; ?></td>
                <td>
                    <a href="<?php echo base_url('update/edit_details/'.$row->id);?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url('delete_teacher/delete_stud/'.$row->id);?>" class="btn btn-danger">Delete</a>
                    <a href="<?php echo base_url('dashboard/user_dash/'.$row->id);?>" class="btn btn-warning">View</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table><br><br>


    <h2><u>FACULTY DETAILS</u></h2><br>
    <a href="<?= base_url('add_teacher');?>" class="btn btn-success">Add New Teacher</a><br><br>
    
    <table class="aa">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($teachers as $rows): ?>
            <tr>
                <td><?php echo $rows->id; ?></td>
                <td><?php echo $rows->tname; ?></td>
                <td><?php echo $rows->email; ?></td>
                <td><?php echo $rows->phone; ?></td>
                <td><?php echo $rows->gender; ?></td>
                <td><?php echo $rows->address; ?></td>
                <td>
                    <a href="<?= base_url('edit_teacher/edit_details/'.$rows->id); ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url('delete_teacher/delete_details/'.$rows->id); ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <form class="fo" method="post" action="<?= base_url('import_excel/import_file');?>" enctype="multipart/form-data">
        <input type="file" name="excel_file" class="f btn btn-dark">
        <input type="submit" value="Import" class="s btn btn-primary">
    </form>
    
</body>
</html>