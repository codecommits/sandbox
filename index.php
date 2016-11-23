<?php require 'framework/functions.php';
$conn = connect($config);
if (!$conn) {
//   echo 'Problem to connect to database';
} else {
//   echo 'Everything is fine baby!';
}
$posts = get('php', $conn);
$view_path = 'views/index.view.php';
require 'views/layout.php';