<?php
include('security.php');
   if(isset($_FILES['image'])){
    
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
     
      
      
         move_uploaded_file($file_tmp,"./Attachments/".$file_name);
        // echo "Success";
    
   }
?>
<html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>
          Upload 
    
    	</title>
    	<link rel="stylesheet"
    		       type = "text/css"
    		       href="bootstrap.css"

    		   />
           <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           <link rel="stylesheet"
               type = "text/css"
               href="index.css"
               
           />
   <body>
   <ul class="topnav">
  <li><a class="active" href="logged.php">Home</a></li>
  <li><a href="Admin.php">Create Poll</a></li>
  <li><a href="view.php">View Answers</a></li>
  <li><a href="view_feedback.php">View Feedback</a></li>
  <li><a href="view_inq.php">View Inquiry</a></li>
   <li><a href="Attachmentupload.php">Upload files</a></li>
  <li class="right"><a href="logout.php">logout </a></li>
  </ul>
  <br><br>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
	  <p style="font-size:20px;">To upload a file for your audience please choose a file </p>
         <input type = "file" name = "image" /> <br>
         <input type = "submit" class="button button1">
			<?php if(isset($_FILES['image'])) { ?>
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
			<?php } ?>
      </form>

	   
   </body>
</html>

<?php
error_reporting(E_ALL ^ E_NOTICE);
$dir='./Attachments/'; // directory name 
$ar=scandir($dir); 
if (isset($_POST['box'])) 
{ 
// Instructions if $_POST['value'] exist 
}
$box=$_POST['box'];  // Receive the file list from form

// Looping through the list of selected files ///
while (list ($key,$val) = @each ($box)) {
$path=$dir	."/".$val;
if(unlink($path)) 
echo " Your File was successfully Deleted :";
echo "$val,";
}
echo "<hr>";

/// displaying the file names with checkbox and form ////
echo "<form method='post' name='f1' action=''>";
while (list ($key, $val) = each ($ar)) {
if(strlen($val)>3){
echo "<input type='checkbox' name=box[] value='$val'>$val<br>";
}
}
echo "<input type='submit' value='Delete'></form>";
?>

