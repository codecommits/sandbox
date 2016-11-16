<?php require 'framework/functions.php';



$conn = connect($config);

if (!$conn) {
//   echo 'Problem to connect to database';
} else {
//   echo 'Everything is fine baby!';
}

$posts = get('php', $conn);


require 'views/index.view.php';