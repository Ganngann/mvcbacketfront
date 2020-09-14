<?
// ./www/controleurs/postControleur.php


namespace App\controleurs\PostControleur;
function indexAction()
{
   include_once './app/vues/template/index.php';
   GLOBAL $content;
   ob_start();
      include_once './app/vues/posts/index.php';
   $content = ob_get_clean();
}

// 
// function schowAction($connexion, INT $postId){
//    include_once '../app\modeles\postModele.php';
//    $post = app\modeles\postModele\findOneById($connexion, $postId);
//
//
//
//    include_once '../app/vues/pages/post.php';
//
// }
