<?php
    if (!isset($_COOKIE['loggedin']) || $_COOKIE['loggedin'] == false)
    {
        header('Location: Login.php?login-first');
        exit();
    }
    require_once "config.php"; 
        $username = $_COOKIE['username'];
        $sql = "SELECT * FROM registration where username='$username';";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo "
            
            <div> Welcome
            ".$row['username']."</div>";
?>
</head>
<body>
    <style>
        #submit
        {
            border-radius: 10px;
            width: 100px;
            font-size: 16px;
            margin-top: 10px;
            margin-right: 2px;
            position: absolute;
            top: 20px;
            right: 18px;
        }
        #profile
        {
            width: 100px;
            font-size: 20px;
            margin-top: 8px;
            margin-right: 20px;
            position: absolute;
            top: 23px;
            right: 80px;
        }
        body 
        {
            background-color: #b2b2b2;
        }
        div 
        {
            font-size:24px;
            text-align:center;
            margin-top:200px ;
        }
    </style>
    <form action="Logout.php">
    <input type="Submit" name="Submit" id="submit" value="Logout">
    </form>
    
    <a href="Profile.php" name="profile" id="profile">Profile</a> 
    </form>
</body>
</html>