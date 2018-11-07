
<?php 

	include_once('./controllers/common.php');
	
	include_once('./models/grade.php');
	Database::connect('school', 'root', '');
	
	
	include_once('./components/head.php');
	?>

	
    <table class="table table-striped">
    	<thead>
	    	<tr>
	      		<th scope="col">Name</th>
	      		<th scope="col">Degree Name</th>
					<th scope="col">Grade</th>
	    	</tr>
					
	      		<th scope="col"></th>
	  	</thead>
	  	<tbody>
		  	<?php	
				$grades = Grade::all_custom(safeGet('keywords'));
				
				foreach ($grades as $grade) {
			?>
    		<tr>
    			<td><?=$grade['std']?></td>
    			<td><?=$grade['degree']?></td>
				<td><?=$grade['crs']?> </td>
    		</tr>
    		<?php } ?>
    	</tbody>
    </table>  
<?php include_once('./components/tail.php') ?> 

 






