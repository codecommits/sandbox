<?php 
require '../app.php';
$data = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$title = $_POST['title'];
	$body  = $_POST['body'];
if (empty($title) || empty($body)) {
	$data ['alert'] = 'Please fill out both field';
} else {
	// then create a new row in the table
	query(
		"INSERT INTO php(title, body) VALUES(:title, :body)", 
		array('title' => $title, 'body' => $body),
		 $conn);
	$data['alert'] = 'Course has successfully been added.';
}
}  
view('admin/create', $data);