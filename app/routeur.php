<?
// ./app/routeur.php

// Route 1
// PATERN post/id-slug.html
if(isset($_GET['postID'])):

   include_once '../app/controleurs/postControleur.php';
   App\controleurs\PostControleur\showAction($_GET['postID']);



else:
   // Route par défaut
   include_once 'controleurs/postControleur.php';
   indexAction();
endif;
