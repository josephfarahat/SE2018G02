<?php 
include ('security.php');
session_start();
session_unset();
session_destroy();
?>