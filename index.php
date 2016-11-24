<?php require 'app.php';
$posts = get('php', $conn);
$view_path = 'views/index.view.php';
require 'views/layout.php';