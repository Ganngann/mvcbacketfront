<!-- ./app/vues/posts/index.php -->


<?php foreach ($posts as $post):  ?>
<article class="blog_item">
   <?php var_dump($post) ?>
   <div class="blog_item_img">
      <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post['image']?>" alt="">
      <a href="#" class="blog_item_date">
           <h3><?php echo date('d', strtotime($post['created_at'] )) ?></h3>
           <p><?php echo date('M', strtotime($post['created_at'] )) ?></p>
      </a>
   </div>

   <div class="blog_details">
      <a class="d-inline-block" href="?postID=<?php echo $post['post_id']?>">
           <h2><?php echo $post['title']?></h2>
      </a>
      <p><?php echo $post['content']?></p>
      <ul class="blog-info-link">
           <li><a href="#"><i class="fa fa-user"></i>
             <?php echo $post['name'] ?> </a></li>
      </ul>
   </div>
</article>
<?php endforeach ?>
