<?php
// ../app/routeur.php

// Route 1
// PATERN post/id-slug.html
if(isset($_GET['postID'])):
   var_dump($connexion);


   include_once '../app/controleurs/postControleur.php';
   App\controleurs\PostControleur\showAction($connexion, $_GET['postID']);



else:
   // Route par défaut


   include_once '../app/controleurs/postControleur.php';
   App\controleurs\PostControleur\indexAction($connexion);
endif;
