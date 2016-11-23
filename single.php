<?php require 'framework/functions.php';
$conn = connect($config);
if (!$conn) {
//   echo 'Problem to connect to database';
} else {
//   echo 'Everything is fine baby!';
}
// $posts = get('php', $conn);
$posts = query('SELECT * FROM php WHERE id = :id', 
				array('id' => $_GET['id']), $conn);
// print_r($posts);

// this works fine but I have to followr the 
// the instruction.
$view_path = 'views/index.view.php';
require 'views/layout.php';