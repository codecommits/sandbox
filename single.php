<?php require 'app.php';

// fetch all the posts
$post = get_by_id( (int)$_GET['id'], $conn);
if ($post) {
	$post = $post[0];
	view('single', array('post' => $post));


	// $view_path = 'views/single.view.php';

	// require 'views/layout.php';
} else {
	header('location:/');
}
