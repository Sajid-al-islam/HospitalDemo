<?php
	require_once('class/library.php');
	$library = new Library();
	
	/*Delete Code*/
	if(isset($_GET['id'])){
		$msg = $library->deletepatient($_GET['id']);
	}
?>