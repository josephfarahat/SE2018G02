<?php  include ('security.php'); ?>
<?Php

$folder='./Attachments/';
$files = glob ($folder . '/*');
foreach ($files as $file){
	
	
	if(is_file($file)){ unlink ($file);}	
} ?>
