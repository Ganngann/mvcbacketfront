<?php

namespace app\modeles\postModele;

function findOneById(PDO $connexion, INT $postId){
   $sql = "SELECT *
   FROM posts
   WHERE id = :id;";

   $rs = $connexion->prepare($sql);
   $rs->bindValue(':id', $postId, PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetch(PDO::FETCH_ASSOC);
}
