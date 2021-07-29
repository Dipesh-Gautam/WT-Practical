<?php
    require_once 'config.php';
    if(isset($_POST['Submit']))
    {
        $user = $_POST['username'];
        $password = $_POST['password'];
        $username =$_COOKIE['username'];
        $check = "SELECT * FROM registration where password =md5('$password');";
        $result = $conn->query($check);
        if($result->num_rows == 1)
        {
            $sql = "UPDATE registration SET username ='$user' where username ='$username';";
            if ($conn->query($sql) === TRUE)
            {
                setcookie("username", $user, time()+86400); 
                header('Location: Profile.php?Username-Changed');
                exit();
            }
        }
        else
        {
            echo "Invalid password";
        }
    }
?>


