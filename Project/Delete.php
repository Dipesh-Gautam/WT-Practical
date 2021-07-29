<?php
    require_once 'config.php';
    if(isset($_POST['Yes']))
    {
        $username = $_COOKIE['username'];
        $password = $_POST['password'];
        $check = "SELECT * FROM registration WHERE password = md5('$password');";
        $result = $conn->query($check);
        if ($result->num_rows == 1)
        {
            $sql = " DELETE  FROM registration WHERE username = '$username' ;";
            $result = $conn->query($sql);

            setcookie("loggedin", false , time() - 1);
            setcookie("username", "", time() -1 );
            header("Location: Login.php?AccountDeleted");
        }
        else
        {
            echo "Invalid password";
        }
    }
  
?>