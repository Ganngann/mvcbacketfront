<?php


if (isset($_GET['postId'])) {
   include_once '../app\controleur\postControleur.php';
   app\controleur\postControleur\schowAction($connexion ,$_GET['postId']);
} else {
   // code...
}
