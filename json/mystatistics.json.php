<?php
require('../apps/controller/database.class.php');
require('../apps/controller/qbank.class.php');

$pdo = Database::getConnection('write');

if ($_POST['ACTION'] == "getquestion") {
	$unformatted_json = $_POST['JSON'];
	$json = json_decode(stripslashes($unformatted_json));
	
	$qbank = new QBank($pdo,$json->userid,$_POST['SESSION'],$json->ipaddress,$json->passcode);
	
	$qbank->getquestion($json->questionbookmark);
	
} elseif ($_POST['ACTION'] == "getquestionanswers") {
	$unformatted_json = $_POST['JSON'];
	$json = json_decode(stripslashes($unformatted_json));
	
	$qbank = new QBank($pdo,$json->userid,$_POST['SESSION'],$json->ipaddress,$json->passcode);
	$qbank->getquestionanswers();
	
} elseif ($_POST['ACTION'] == "nextquestion") {
	$unformatted_json = $_POST['JSON'];
	$json = json_decode(stripslashes($unformatted_json));
	
	$qbank = new QBank($pdo,$json->userid,$_POST['SESSION'],$json->ipaddress,$json->passcode);
	
	$qbank->nextquestion();
	
} elseif ($_POST['ACTION'] == "prevquestion") {
	$unformatted_json = $_POST['JSON'];
	$json = json_decode(stripslashes($unformatted_json));
	
	$qbank = new QBank($pdo,$json->userid,$_POST['SESSION'],$json->ipaddress,$json->passcode);
	
	$qbank->prevquestion();
	
} elseif ($_POST['ACTION'] == "getquestionbookmark") {
	$unformatted_json = $_POST['JSON'];
	$json = json_decode(stripslashes($unformatted_json));
	
	$qbank = new QBank($pdo,$json->userid,$_POST['SESSION'],$json->ipaddress,$json->passcode);
	
	$qbank->getquestionbookmark();
	
} elseif ($_POST['ACTION'] == "gettotalquestions") {
	$unformatted_json = $_POST['JSON'];
	$json = json_decode(stripslashes($unformatted_json));
	
	$qbank = new QBank($pdo,$json->userid,$_POST['SESSION'],$json->ipaddress,$json->passcode);
	
	$qbank->gettotalquestions();
	
} elseif ($_POST['ACTION'] == "statistics_gettestlist") {
	$unformatted_json = $_POST['JSON'];
	$json = json_decode(stripslashes($unformatted_json));
	
	$qbank = new QBank($pdo,$json->userid,$_POST['SESSION'],$json->ipaddress,$json->passcode);
	
	$qbank->statistics_gettestlist();
	
} elseif ($_POST['ACTION'] == "statistics_getsubjectstatlist") {
	$unformatted_json = $_POST['JSON'];
	$json = json_decode(stripslashes($unformatted_json));
	
	$qbank = new QBank($pdo,$json->userid,$_POST['SESSION'],$json->ipaddress,$json->passcode);
	
	$qbank->statistics_getsubjectstatlist();
	
} elseif ($_POST['ACTION'] == "statistics_getcategorystatlist") {
	$unformatted_json = $_POST['JSON'];
	$json = json_decode(stripslashes($unformatted_json));
	
	$qbank = new QBank($pdo,$json->userid,$_POST['SESSION'],$json->ipaddress,$json->passcode);
	
	$qbank->statistics_getcategorystatlist();
	
}elseif ($_POST['ACTION'] == "statistics_getsubjectstatrecentlist") {
	$unformatted_json = $_POST['JSON'];
	$json = json_decode(stripslashes($unformatted_json));
	
	$qbank = new QBank($pdo,$json->userid,$_POST['SESSION'],$json->ipaddress,$json->passcode);
	
	$qbank->statistics_getsubjectstatrecentlist();
	
} elseif ($_POST['ACTION'] == "statistics_getcategorystatrecentlist") {
	$unformatted_json = $_POST['JSON'];
	$json = json_decode(stripslashes($unformatted_json));
	
	$qbank = new QBank($pdo,$json->userid,$_POST['SESSION'],$json->ipaddress,$json->passcode);
	
	$qbank->statistics_getcategorystatrecentlist();
	
}

?>