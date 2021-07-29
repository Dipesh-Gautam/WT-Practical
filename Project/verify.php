   <?php
   require_once 'config.php';
   if(isset($_POST['signup'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $middel_name = $_POST['middel_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password']; 
    
    $sql = "SELECT * FROM registration where username='$username';";
    $result = $conn->query($sql);
    if($result->num_rows == 0)
    {
        $sql = "INSERT INTO registration
        (first_name,middel_name,last_name,gender,email,username, password,created_at) 
        VALUES('$first_name','$middel_name','$last_name','$gender','$email','$username',md5('$password'),now());";
        if ($conn->query($sql) === TRUE) {
            header("Location:Login.php?done");
            exit;
        }
    }
    else 
    {
        ?>
        <script>
            document.querySelector(".username_err").innerHTML = "Username already taken";
        </script>
        <?php
    }
}
?>
    
 
    