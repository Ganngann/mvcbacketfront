<section class="blog_area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div class="feature-img">
                  <img class="img-fluid" src="assets/img/blog/single_blog_1.png" alt="">
               </div>
               <div class="blog_details">
                  <?php var_dump($post) ?>

                  <h2><?php echo $post['title']?></h2>
                  <ul class="blog-info-link mt-3 mb-4">
                     <li><a href="#"><i class="fa fa-user"></i><?php echo $post['name'] ?></a></li>
                  </ul>
                  <p class="excert">
                     <?php echo $post['content']?>
                  </p>
               </div>
            </div>

            <div class="blog-author">
               <div class="media align-items-center">
                  <img src="assets/img/blog/author.png" alt="">
                  <div class="media-body">
                     <a href="#">
                        <h4>Harvard milan</h4>
                     </a>
                     <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                        our dominion twon Second divided from</p>
                  </div>
               </div>
            </div>

         </div>

      </div>
   </div>
</section>
