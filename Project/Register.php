<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<style>
        body 
        {
            background-color:grey;
            font-size:25px;
        }
        label 
        {
            color:white;
        }
        .reset
        {
            margin-top:5px;
            padding-right:18px;
            padding-left:18px;
            padding-top:7px;
            padding-bottom:7px;
            background-color:black;
            color:white;   
        }
        .submit
        {
            margin-top:5px;
            margin-bottom:50px;
            padding:5px;
            background-color:black;
            color:white;   
        }
        div
        {
           color:white;
        }
        .container
        {
            width:80%;
            background-color:#949494;
            background-size: cover;
            padding-left:100px;
            padding-right:190px;
            margin:40px;
            border:1px solid black;
        }
        input 
        {
            font-size:17px;
        }
        h3
        {
           padding-top:50px;
        }
        .img-pass
        {
            position:absolute;
            width:18px;
            height:18px;
            margin-top:7px;
            margin-left:-22px;
        }
        .errors
        {
            color:#ae2052;
            padding: 0px; 
            margin: 0px;
            padding-left:10px;
            height:24px;
            font-size:24px;
        }
    </style>
    <form method="post"  onsubmit="return validate();">
        <div class="container">
        <h3>Register to proceed</h3>
        <label>First Name</label><br>
        <input type="text" name="first_name" id="first_name">
        <p class="errors fname_err"></p>
        <label>Middel Name</label><br>
        <input type="text" name="middel_name" id="middel_name" placeholder="optional">
        <br><br>
        <label>Last Name</label><br>
        <input type="text" name="last_name" id="last_name">
        <p class="errors lname_err"></p>
        <label>Gender</label><br>
        <div>
            <input type="radio" name="gender" class="Gender male" value="Male">Male<br>
            <input type="radio" name="gender" class="Gender female" value="Female">Female<br>
            <input type="radio" name="gender" class="Gender others" value="Others">Others<br>
            <p class="errors gender_err"></p>
        </div>
        <label>Email</label><br>
        <input type="Email" name="email" id="Email">
        <p class="errors email_err"></p>
        <label>Username</label><br>
        <input type="text" name="username" id="username">
        <p class="errors username_err"></p>
        <label>Mobile Number</label><br>
        <input type="text" name="phone" id="Phone" placeholder="98XXXXXXXX">
        <p class="errors phone_err"></p>
        <label>Password</label><br>
        <div class="eye">
            <input type="password" name="password" class="password" >
            <img src="https://i.ibb.co/3p59PrV/hide.jpg" class="img-pass hide" onclick="change('hide', '')">
            <img src="https://i.ibb.co/B2xpq9Q/show.jpg" class="img-pass show" onclick="change('show', '')">
        </div>
        <p class="errors password_err"></p>
        <label>Confirm Password</label><br>
        <input type="password" name="confirm_password" class="Cpassword">
        <img src="https://i.ibb.co/3p59PrV/hide.jpg" class="img-pass Chide" onclick="change('hide', 'C')">
        <img src="https://i.ibb.co/B2xpq9Q/show.jpg" class="img-pass Cshow" onclick="change('show', 'C')" >
        <p class="errors Cpassword_err"></p>
        <input type="submit" name="signup" class="submit" value="Sign up">
        <button type="Reset" name="reset" class="reset"  > Reset  </button>
        <p class="errors response"></p>
        </div>
    </form>
    <script src = "Register.js"></script>
</body>
</html>
<?php
require_once ("config.php");
include ("verify.php");
?>