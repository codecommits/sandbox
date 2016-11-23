<h1 class="h1"> Welcome to daily php code practice</h1>
  <hr>
<?php foreach ($posts as $post) : ?>
     <article>  
      <h2 class="title">
     <a href="single.php?id= <?= $post['id']; ?>"> <?= $post['title']; ?></a>
        

      </h2>
    <div class="body">
    <?= $post['body']; ?>
    </div>
</article>
<?php endforeach; ?>
