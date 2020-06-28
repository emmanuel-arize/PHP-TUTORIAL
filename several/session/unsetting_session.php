<?php

session_start();
// unsetting session can be for logout
// unsetting a user will log the user out

//session_destroy() for unsetting all infor  user
unset($_SESSION['username']);

// this will be the same in any browser

?>