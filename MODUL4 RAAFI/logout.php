<<<<<<< HEAD
<?php
session_start(); 
session_destroy();
setcookie('nama', '');
setcookie('id', '');
setcookie('warna', '');
setcookie('logout', 'true', time() + 15);
header('location: login.php');

=======
<?php
session_start(); 
session_destroy();
setcookie('nama', '');
setcookie('id', '');
setcookie('warna', '');
setcookie('logout', 'true', time() + 15);
header('location: login.php');

>>>>>>> 1519c09688e498bffc0c3dc6cc1bb7fae4a5ef26
?>