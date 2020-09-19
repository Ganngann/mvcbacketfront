<?php
// ../app/controleurs/postControleur.php


namespace App\controleurs\PostControleur;


/**
* [indexAction description]
* @param  [type] $connexion [description]
* @return [type]            [description]
*/

function indexAction(\PDO $connexion)
{
   include_once '../app/modeles/postModele.php';
   $posts = \App\modeles\postModele\findAll($connexion);

   // App\modeles\postModele\findAll($connexion);
   // findAll($connexion);

   GLOBAL $mainContent;

   ob_start();
   include_once '../app/vues/posts/index.php';
   // var_dump(findAll($connexion));
   $mainContent = ob_get_clean();
   // var_dump($mainContent);
}

/**
* [schowAction description]
* @param  [type] $connexion [description]
* @param  INT    $postId    [description]
* @return [type]            [description]
*/
function showAction(\PDO $connexion, INT $postId){

   include_once '../app/modeles/postModele.php';
   $post = \App\modeles\postModele\findOneById($connexion, $postId);

   GLOBAL $mainContent;

   ob_start();
   include_once '../app/vues/posts/details.php';
   $mainContent = ob_get_clean();
}
