<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
</head>
<body>
      <h1> Welcome Home </h1>
        <style>
        h1
        {
            font-style: italic;
            padding-top: 40px;
            margin: 10px auto;
            /* width: 12%; */
            position: relative;
            text-align: center;
        }
        body 
        {
            background-color: #949494;
        }
        .reg
        {
            box-shadow: 0px 0px 10px 5px #dde3d7;
            border-radius:10px;
            background-color: #707070;
            margin: 100px;
            padding: 50px;
            width:20%;
            height:600px;
            font-size: 24px;
            margin-bottom:0px;
            
        }
        .log
        {
            box-shadow: 0px 0px 10px 5px #dde3d7;
            border-radius:10px;
            background-color: #707070;
            margin: 100px;
            padding: 60px;
            width:20%;
            height:600px;
            font-size: 24px;
            margin-left:1400px;
            margin-top:-600px;
            
        }
        
        #in
        {
            font-size:24px;
            margin-top:250px;
            margin-bottom:-5px;
        }
        #up
        {
            font-size:24px;
        }
        
    </style>
    <form method="post" action="Register.php" >
        <table class="reg">
        <tr>
            <th>
                Haven't registered yet?<br><br>
            </th>
        </tr>
        <tr>
            <td>
                Hurry up
            </td>
        </tr>
        <tr>
            <td>
                Register for free.
            </td>
        </tr>
        <tr>
            <td>
                Offer valid till this month.<br><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" id="up" value="Register">
            </td>
        </tr>
        </table>
    </form>
    <form method="post" action="Login.php"> 
        <table class="log">
            <tr>
                <th>
                    Already have an account?<br><br><br>
                </th>
            </tr>
            <tr>
                <td>
                    Log in & Enjoy
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" id="in" value="Log in">
                </td>
            </tr>
         <table>
    </form>
</div>
</body>
</html>

