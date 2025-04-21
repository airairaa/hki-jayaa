<?php
session_start();
session_unset();
session_destroy();
header("Location: login_user.php"); // Ganti dengan halaman login yang sesuai
exit();
?>