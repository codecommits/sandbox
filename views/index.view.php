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

<div style="margin-top: 20px; float: right; margin-right: 115px;">
	<span>
		<a href="/admin" style="font-size:20px; background-color: #f6d96c; padding: 8px;"> Admin Area</a>
	</span>
</div>
