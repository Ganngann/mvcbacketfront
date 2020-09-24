<?php
// ../app/controleurs/tagControleur.php


namespace App\controleurs\tagControleur;


/**
* [indexAction description]
* @param  [type] $connexion [description]
* @return [type]            [description]
*/

function indexAction(\PDO $connexion)
{
   include_once '../app/modeles/tagModele.php';
   $tags = \App\modeles\tagModele\findAll($connexion);

   include_once '../app/vues/tag/index.php';
}

/**
* [schowAction description]
* @param  [type] $connexion [description]
* @param  INT    $postId    [description]
* @return [type]            [description]
*/
function showAction(\PDO $connexion, INT $tagId){

   include_once '../app/modeles/tagModele.php';
   $posts = \App\modeles\tagModele\findOneById($connexion, $tagId);

   GLOBAL $mainContent;

   ob_start();

   include_once '../app/vues/tag/details.php';
   $mainContent = ob_get_clean();
}
