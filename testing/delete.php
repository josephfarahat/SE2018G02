



<?php
$link = mysqli_connect("localhost", "root", "", "poll"); 
  
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error()); 
} 
  
$sql = "UPDATE feedback SET likee='0' "; 
if(mysqli_query($link, $sql)){ 
    echo "Record was updated successfully."; 
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 
<?php
$link = mysqli_connect("localhost", "root", "", "poll"); 
  
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error()); 
} 
  
$sql = "UPDATE feedback SET dislike='0' "; 
if(mysqli_query($link, $sql)){ 
    echo ""; 
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 