<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        h1{
            margin-left: 30%;
        }
        form{
            margin-left: 10%;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Change Password</h1>
    <div class="a">
        <form action="Logout">
            <p>Enter current Password:</p>
            <input type="text" name="password" required>
            <p>Enter New Password:</p>
            <input type="text" name="password" required>
            <p>Confirm New Password:</p>
            <input type="text" name="password" required>
            <input type="submit" value="Save Changes">
        </form>
    </div>
</body>
</html>