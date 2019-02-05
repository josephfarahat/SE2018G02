//please include this file in all admin's pages
<?php
session_start();
if($_SESSION['login'] != 1)
	header('Location: Login.php');
?>
