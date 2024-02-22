<?php

$_COOKIE_name = 'user';
$_COOKIE_value = 'aselole';

setcookie ($_COOKIE_name, $_COOKIE_value);

$_COOKIE_value = 'pedot';

setcookie ($_COOKIE_name, $_COOKIE_value);

echo $_COOKIE[$_COOKIE_name];
 
setcookie("user", "", time () - 3600);

echo '<br>';

var_dump($_COOKIE);

?>