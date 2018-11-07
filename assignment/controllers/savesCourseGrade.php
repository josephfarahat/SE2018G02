<?php
	include_once("../controllers/common.php");
	include_once("../models/grade.php");
	Database::connect('school', 'root', '');
	$id = safeGet("id", 0);
	if($id==0) {
		Grade::add(safeGet("name"));
	} else {
		$grade = new Grade($id);
		$grade->student_id = safeGet("student_id");
		$grade->course_id = safeGet("course_id");
		
		$grade->degree = safeGet("degree");
		$grade->examine_at = safeGet("examine_at");
		$grade->save();
	}
	header('Location: ../grades.php');
?>