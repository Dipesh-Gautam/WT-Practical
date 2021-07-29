<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <title>Login</title>
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
        margin:250px auto 0px auto;
        background-color:#757575;
        box-shadow: 0px 0px 10px 5px #1d1d1d;
        position: absolute;
        top: 25%;
        transform: translate(-50%, -50%);
        }
    body
    {
        display:flex;
        justify-content:center;
        background-color:#949494;
        background-size: cover; 
        
    }
    th
    {
        padding:10px;
    }
    
    .show
    {
        padding-bottom:10px;
        
    }
    .link-ta
    {
        padding:25px 10px 10px 10px;
        
    }
    input
    {
        width:100%;
        color:black;
    }
    .sp
    {
        width:12px;
    }
    .btn
    {
        width:100%;
        background-color:#bcbcbc;
        padding:10px;
        border-radius:18px;
        border:4px solid #ffffff; 
    }
    .errors
    {
        height:24px;
        font-size:20px;
        /* padding:0px; */
        /* text-shadow:-0.5px 0.5px 10px white; */
    }
    .nopm
    {
        padding: 5px; 
        margin: 0px;
        padding-left:10px;
    }
    .nopm p 
    {
        padding:0px;
        margin: 0px;
        color:red;
    }
    
</style>


<body>
    <form method="post" onsubmit="return validateuser();">
    <table>
        <tr>
            <th>Login to proceed</th>
        </tr>
        <tr>
            <td class="labels">
                <label>Username</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="username" class="inputs username"  />
            </td>
        </tr>
        <tr>
            <td class="nopm">
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
                <input type="password" name="password"  class="pass" />
            </td>
        </tr>
        <tr>
            <td class="nopm">
                <p class="errors password_err"></p>
            </td>
        </tr>
        <tr>
            <td class="show"> 
               <input type="checkbox" class="sp check" onclick="show()" name="show">Show password
            </td> 
        </tr>
        <tr>
           <td> 
                <button name="login" type="submit" class="btn">Log In</button>
           </td> 
        </tr>
        <tr>
            <td class="link-ta">
                Don't have an account? <a href="Register.php">Register now</a>
            </td>
        </tr>
        <tr>
            <td class="nopm">
                <p class="errors response"></p>
            </td>
        </tr>
    </table>
    </form>
</body>
<script src="Login.js"></script>
</html>

<?php
require_once "Cookie.php";
?>

