<?php
// Checking if the user is already logged in
    if (isset($_COOKIE['loggedin']) && $_COOKIE['loggedin'] == true) {
        header("Location: Dashboard.php");
    }
// Checking form data only when submit button is clicked
    if (isset($_POST['login'])) {
// Creating a connection to the database
       require_once("config.php");
// Retrieving form data from super global $_POST
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
// Encrypting the form data because we have encrypted password in database also
        $password = md5($password);
// Preaparing and binding statements to check user credientials...
        $stmt = $conn->prepare("SELECT username, password FROM registration WHERE username=?   AND  password=? LIMIT 1");
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();
// If the credientials matches with any records of database, then $stmt will have one row
        if($stmt->num_rows == 1) {
            setcookie("loggedin", true, time() + (86400 * 1));
            setcookie("username", "$username", time() + (86400 * 1));
            header("Location: Dashboard.php");
        }
        else {
            ?>
            <script type="text/javascript">
                document.querySelector('.response').innerHTML = "Invalid username or password";
                setTimeout(remove_errors, 2000);
            </script>
            <?php
        }
        $stmt->close();
        $conn->close();
    }
?>