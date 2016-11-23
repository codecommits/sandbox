<?php require 'framework/functions.php';
$conn = connect($config);
if (!$conn) {
//   echo 'Problem to connect to database';
} else {
//   echo 'Everything is fine baby!';
}
// $posts = get('php', $conn);
$post = query('SELECT * FROM php WHERE id = :id LIMIT 1', 
				array('id' => $_GET['id']), $conn)[0];
// print_r($posts);

// this works fine but I have to followr the 
// the instruction.
$view_path = 'views/single.view.php';
require 'views/layout.php';