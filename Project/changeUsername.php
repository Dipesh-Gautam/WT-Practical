<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Username</title>
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
            font-size:20px
        }
        .btn
        {
            margin-top:0px;
            padding: 5px;
        }
        th
        {
            
        }
    </style>
    <form method="post" onsubmit="return validate();">
        <table class="Tuser">
        <p class="errors response"></p>
            <tr>
                <th><label>Change username</label></th>
            </tr><br>
            <tr>
                <td><input type="text" name="username" class ="edit_username" placeholder="Enter your new username"></td>
            </tr>
            <tr>
                <td><p class="errors username_err"></p></td>
            </tr>
            <tr>
                <td><input type="text" name="password" class ="password" placeholder="Enter your current password"></td>
            </tr>
            <tr>
                <td><p class="errors pass_err"></p></td>
            </tr>
            <tr>
                <td><input type="Submit" name="Submit" class="btn user" value="Change"></td>
            </tr>
        </table>
        <button  class="btn" onclick="window.location.href='Profile.php?cancelled'">Cancel</button>

    </form>
    <script>
       
        document.querySelector('.edit_username').addEventListener("keyup", validateuser);
        document.querySelector('.edit_username').addEventListener("blur", validateuser);

        document.querySelector('.password').addEventListener("keyup", validatepass);
        document.querySelector('.password').addEventListener("blur", validatepass);

        function validateuser()
        {
            var u = document.querySelector(".edit_username").value.trim();
            if (u == "")
            {
                document.querySelector(".username_err").innerHTML = "Username can't be empty";
                setTimeout(remove,2500);
                return false;
            }
            else
            {
                document.querySelector(".username_err").innerHTML = "";
                return true;
            }
        }

        function validatepass()
        {
            var p = document.querySelector(".password").value;
            if (p == "")
            {
                document.querySelector(".pass_err").innerHTML = "Enter password";
                setTimeout(remove,2500);
                return false;
            }
            else
            {
                document.querySelector(".pass_err").innerHTML = "";
                return true;
            }
            
        }
        function validate()
        {
            var vuser = validateuser();
            var vpass = validatepass();
            var valid = vuser && vpass;
            if (!valid)
            {
                document.querySelector(".response").innerHTML = "Can't change username";
                setTimeout(remove,2500);
                return false;
            }
            else
            {
                document.querySelector(".response").innerHTML = "";
                return true;
            }
        }
         
        function remove()
        {
            document.querySelector(".username_err").innerHTML = "";
            document.querySelector(".pass_err").innerHTML = "";
            document.querySelector(".response").innerHTML = "";
        }
    </script>
</body>
</html>
<?php
    include ("EditU.php");
?>