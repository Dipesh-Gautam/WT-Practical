<?php
    require_once 'config.php';
    if(isset($_POST['Submit']))
    {
    $password = $_POST['password'];
    $username =$_COOKIE['username'];
    $pass = $_POST['oldpassword'];
    $check = "SELECT * FROM registration where password =md5('$pass');";
    $result = $conn->query($check);
    if($result->num_rows == 1)
    {
        $sql = "UPDATE registration SET password = md5('$password') where username ='$username';";
        if ($conn->query($sql) === TRUE)
        {
            header('Location: Profile.php?Password-Changed');
            exit();
        }
    }
    else
    {  
        echo "Invalid password";
    }
}
?>