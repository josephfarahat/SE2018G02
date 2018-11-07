<?php 
	include_once("./controllers/common.php");
	include_once('./components/head.php');
	include_once('./models/grade.php');
	$id = safeGet('id');
	Database::connect('school', 'root', '');
	$grade = new Grade ($id);
?>

    <h2 class="mt-4"><?=($id)?"Edit":"Add"?> Grade</h2>

    <form action="controllers/savesCourseGrade.php" method="get">
    	<input type="hidden" name="id" value="<?=$grade->get('id')?>">
		<div class="card">
			<div class="card-body">
			
			<div class="card-body">
				<div class="form-group row gutters">
					<label for="inputEmail3" class="col-sm-2 col-form-label">  Student Id</label>
					<div class="col-sm-10">
						
							<input class="form-control" type="text" name="student_id" value="<?=$grade->get('student_id')?>" required>
					</div>
			
			
				<div class="form-group row gutters">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Course Id</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="course_id" value="<?=$grade->get('course_id')?>" required>
							
					</div>
						<div class="card-body">
				<div class="form-group row gutters">
					<label for="inputEmail3" class="col-sm-2 col-form-label"> Degree</label>
					<div class="col-sm-10">
						
							<input class="form-control" type="text" name="degree" value="<?=$grade->get('degree')?>" required>
					</div>
					
					<div class="card-body">
				<div class="form-group row gutters">
					<label for="inputEmail3" class="col-sm-2 col-form-label">  Examine At</label>
					<div class="col-sm-10">
						
							<input class="form-control" type="dare" name="examine_at" value="<?=$grade->get('examine_at')?>" required>
					</div>
					
				</div>
		    	<div class="form-group">
		    		<button class="button float-right" type="submit">Add</button>
		    	</div>
		    </div>
		</div>
    </form>

<?php include_once('./components/tail.php') ?>

		