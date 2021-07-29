<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <style>
        body 
        {
            background-color: #b2b2b2;
            font-size:24px;
        }
        .errors
        {
            color:#ae2052;
            padding: 0px; 
            margin: 0px;
            padding-left:10px;
            height:24px;
            font-size:20px;
        }
        .btn
        {
            margin-top:0px;
            padding: 5px;
        }
    
    </style>
    <form method="post" action ="changeUsername.php">
    <p>Change username?</p>
    <input type="Submit" class="btn" value="Go"></input><br><br>
    </form>
    <form method="post" action ="changePassword.php">
    <p>Change password?</p>
    <input type="Submit" class="btn" value="Go"></input><br><br>
    </form>
    <p>Want to delete your profile?</p>
    <a href="Del.php" name="Delete" class="Delete">Click here</a><br><br><br><br><br>
    <a href="Dashboard.php">Back</a>
</body>
</html>
