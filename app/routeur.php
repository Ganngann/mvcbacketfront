<?php
// ../app/routeur.php



// Route 1
// PATERN post/id-slug.html
if(isset($_GET['postID'])):
   // var_dump($connexion);


   include_once '../app/controleurs/postControleur.php';
   App\controleurs\PostControleur\showAction($connexion, $_GET['postID']);



elseif(isset($_GET['categorieID'])):
   // var_dump($connexion);


   include_once '../app/controleurs/categorieControleur.php';
   App\controleurs\categorieControleur\showAction($connexion, $_GET['categorieID']);



else:
   // Route par défaut


   include_once '../app/controleurs/postControleur.php';
   App\controleurs\PostControleur\indexAction($connexion);
endif;
