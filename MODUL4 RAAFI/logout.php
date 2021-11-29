<?php
session_start(); 
session_destroy();
setcookie('nama', '');
setcookie('id', '');
setcookie('warna', '');
setcookie('logout', 'true', time() + 15);
header('location: login.php');

?>