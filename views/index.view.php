<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/style.css">
  <title>Daily PHP Practice code!</title>
</head>
<body>
  
  
  <div class="main">
  
<h1 class="h1"> Welcome to daily php code practice</h1>
    <hr>
    
 <?php foreach ($posts as $post) : ?>
  
  <article>  
    
    
    <h2 class="title"><?= $post['title']; ?></h2>
  
    <div class="body">
    <?= $post['body']; ?>
    </div>
 
    
    
    
    
    </article>
<?php endforeach; ?>
 

  
  
  </div>
</body>
</html>