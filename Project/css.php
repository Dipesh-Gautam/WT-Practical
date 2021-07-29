<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>

    <title>Login to proceed</title>
    
</head>
<style>
    * {
        font-size: 24px;
        color:white;
      }
    table
    {
        border:4px solid black;
        border-radius:10px;
        padding:10px 20px;
        margin:300px auto;
        background-color:rgb(163, 117, 155);
        box-shadow: 0px 0px 10px 5px black;
    }
    body
    {
        display:flex;
        align-items:center;
        justify-content:center;
        background-color:rgb(218, 193, 175);
        /* background-size: cover; */
    }
    th
    {
        padding:10px
    }
    
    .show
    {
        padding-bottom:10px;
    }
    .link-ta
    {
        padding:10px;
    }
    input
    {
        width:100%;
    }
    .sp
    {
        width:12px;
    }
    .btn
    {
        background-color:brown;
        padding:10px;
        border-radius:20px;
        border:5px solid rgb(197, 134, 134); 
    }
</style>
<body>
    <form method="post" onsubmit="return validate();">
    <table>
        <tr>
            <th>Login to proceed</th>
        </tr>

        <tr>
            <td class="labels">
                <label>Username or Email</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="username" class="inputs username" />
            </td>
        </tr>
        <tr>
            <td>
                <p class="errors username_err"></p>
            </td>
        </tr>
        <tr>
            <td class="labels">
                <label>Password</label>
            </td>
        </tr> 
        <tr>
            <td>
                <input type="password" name="password" class="inputs password" />
            </td>
        </tr>
            
        
        <tr>
            <td>
                <p class="errors password_err"></p>
            </td>
        </tr>
        <tr>
            <td class="show"> 
               <input type="checkbox" class="sp" name="show">Show password
            </td> 
        </tr>
        <tr>
           <td> 
                <button name="login" type="submit" class="btn">Log In</button>
           </td> 
        </tr>
        <tr>
            <td class="link-ta">
                Don't have an account? <a href="../Register/">Register now</a>
               
            </td>
        </tr>

        <tr>
            <td>
                <p class="errors response"></p>
            </td>
        </tr>
    </table>
    </form>

</body>
</html>

<?php
require_once "Cookie.php";
?>


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post"  action="Cookie.php" >
        <h2>Login</h2>
        
        <label>Email/Phone number/Username</label><br>
        <input type="text" name="username" id="username">
        
        <br><br>
        
      
        <label>Password</label><br>
        <input type="password" name="password" id="password">
        <br><br>
        
        <input type="submit" name="login" id="submit" value="Log in">
        
        

    </form>



</body>
</html> -->