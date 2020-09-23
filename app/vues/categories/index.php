<!-- ./app/vues/categories/index.php -->
<h4 class="widget_title">Category</h4>
<ul class="list cat-list">



<?php foreach ($categories as $categorie): ?>
   <li>
       <a href="categorie/<?php echo $categorie['id'] . '/' . slugify($categorie['name'])?>" class="d-flex">
            <p><?php echo $categorie['name']; ?></p>
            <p>(<?php echo $categorie['freq']; ?>)</p>
       </a>
   </li>
<?php endforeach; ?>


</ul>
