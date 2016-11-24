<?php require 'app.php';

// fetch all the posts
$post = query('SELECT * FROM php WHERE id = :id LIMIT 1', 
			array('id' => $_GET['id']), $conn);
if ($post) {
	$post = $post[0];
	$view_path = 'views/single.view.php';
	require 'views/layout.php';
} else {
	header('location:/');
}
