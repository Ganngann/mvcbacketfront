<?php
// ../app/controleurs/categorieControleur.php


namespace App\controleurs\categorieControleur;


/**
* [indexAction description]
* @param  [type] $connexion [description]
* @return [type]            [description]
*/

function indexAction(\PDO $connexion)
{
   include_once '../app/modeles/categorieModele.php';
   $categories = \App\modeles\categorieModele\findAll($connexion);

   include_once '../app/vues/categories/index.php';
}

/**
* [schowAction description]
* @param  [type] $connexion [description]
* @param  INT    $postId    [description]
* @return [type]            [description]
*/
function showAction(\PDO $connexion, INT $categorieId){

   include_once '../app/modeles/categorieModele.php';
   $posts = \App\modeles\categorieModele\findOneById($connexion, $categorieId);
      // var_dump($posts);

   GLOBAL $mainContent;

   ob_start();
   include_once '../app/vues/categories/details.php';
   $mainContent = ob_get_clean();
}
