<?php

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = isset($_REQUEST['HTTP_METHOD']) ? $_REQUEST['METHOD_GET'] : 'GET';
$view = null;
$format  = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;


switch ($action . '_' . $method) {
	case 'create_GET':
		$view = 'food/edit.php';
		break;
		
	case 'create_POST':
		
		break;
	case 'update_GET':
		include __DIR__ . '/../Veiws/food/edit.php';
		break;
		
	case 'update_POST':
		
		break;
		
	case 'delete_GET':
		
		break;
		
	case 'index_GET':
	default:
		$view ='food/index.php';
		break;
}

switch ($format) {
	case 'plain':
		include '/../Views/' . $view;
		break;
	case 'json':
		break;
	
	case 'web':
	default:
		
		break;
}