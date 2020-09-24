<!-- ./app/vues/tags/index.php -->
<ul class="list">



<?php foreach ($tags as $tag): ?>
   <li>
       <a href="tag/<?php echo $tag['id'] . '/' . slugify($tag['name'])?>"><?php echo $tag['name']; ?></a>
   </li>
<?php endforeach; ?>
