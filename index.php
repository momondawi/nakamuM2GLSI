<?php
//include 'App/Controllers/routerController.php';

include 'App/Controllers/LoginController.php';
include 'App/Controllers/databaseController.php';
include 'App/Models/LoginModel.php';

$conn = DatabaseController::getConn();
$options= $_GET['option'];
if ($options=='login') {
	LoginController::show($conn);
}

?>