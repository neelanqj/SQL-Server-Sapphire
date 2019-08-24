<?php
	require('../apps/controller/database.class.php');
	require('../apps/controller/newsservice.class.php');
	
	$pdo = Database::getConnection('write');
	
	
	$newsservice = new NewsService($pdo,'','','','');
	$newsservice->search('', '', 0, 10);
?>