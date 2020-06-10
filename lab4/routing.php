<?php 
	error_reporting(0);
	$id = null;
	$id = strtolower(strip_tags(trim($_GET['id'])));	
	switch ($id) {
		case 'contacts': include 'inc/contacts.inc.php';
			break;
		case 'about': include 'inc/about.inc.php';
			break;
		case 'form': include 'inc/form.inc.php';
				break;
		default: include 'inc/index.inc.php';

	}
?>