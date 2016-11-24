<?php 
require '../app.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$title = $_POST['title'];
	$body  = $_POST['body'];
if (empty($title) || empty($body)) {
	$alert = 'Please fill out both field';
}
} else {
	$alert = '';
}
view('admin/create', array(
	'alert' => $alert));