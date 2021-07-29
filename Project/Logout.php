<?php
// Lets overwrite the cookies created, to change its expiry time and make it less than the present time
// (i.e. time() - a_positive_value)
    setcookie("loggedin", false , time() - 1);
    setcookie("username", "", time() -1 );
    header("Location: Login.php?done");
?>