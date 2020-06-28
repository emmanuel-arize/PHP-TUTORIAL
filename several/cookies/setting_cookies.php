<?php
//setcookie(name, value, expire, path, domain, secure, httponly)
// the name is required;
// cureent time plus 10secons will die s seconds

// cookies are stored on user computers so do not
// set cookies for sensitive data
setcookie('username','emma',time()+10);
?>