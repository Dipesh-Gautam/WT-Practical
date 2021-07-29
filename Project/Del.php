<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <style>
        body 
        {
            background-color: #b2b2b2;
            font-size:24px;
        }
    </style>
    <form method="post">
        <table>
        <tr>
            <td><p>Are you sure you want to delete profile ?</p></td>
        </tr>
        <tr>
        <td><input type="text" name="password" class ="password" placeholder="Enter your current password"></td>
        </tr>
        <tr>
        <td> <input type="Submit" class="Yes" name="Yes" value="Yes"></input></td>
        </tr>
        <tr>
        <td> <a href="Profile.php?AccountNotDeleted" class="No" name="Delete">No</a><br><br><br> </td>
        </tr>
        <tr>
        <td> <a href="Dashboard.php?" class="Back" name="Back">Cancel</a> </td>
        </tr>
        </table>
    </form>
</body>
</html>
<?php
    include ("Delete.php");
?>