<?php require 'app.php';

$posts = get('php', $conn);
view('index', array('posts' => $posts));

// $view_path = 'views/index.view.php';
// require 'views/layout.php';