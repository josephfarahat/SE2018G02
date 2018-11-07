
<?php 

	include_once('./controllers/common.php');
	
	include_once('./models/course.php');
	Database::connect('school', 'root', '');
	include_once('./components/head.php');
?>

	
    <table class="table table-striped">
    	<thead>
	    	<tr>
	      		<th scope="col">Student Name</th>
	      		<th scope="col">Course Name</th>
					<th scope="col">Grade</th>
					
	      		<th scope="col"></th>
	    	</tr>
	  	</thead>
	  	<tbody>
		  	<?php	
				$courses = Course::all(safeGet('keywords'));
				foreach ($courses as $course) {
			?>
    		<tr>
    			<td><?=$course->id?></td>
    			<td><?=$course->name?></td>
				<td><?=$course->max_degree?></td>
				<td><?=$course->study_year?></td>
    			
    				
				
    		</tr> 
    		<?php } ?> 
    	</tbody>
    </table>  
<?php include_once('./components/tail.php') ?> 

 






