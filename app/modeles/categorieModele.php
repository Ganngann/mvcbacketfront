<?php

namespace App\modeles\CategorieModele;
use PDO;

function findOneById(\PDO $connexion, INT $categorieId){
   $sql = "SELECT *
   FROM categories c
   JOIN posts p on p.categorie_id = c.id
   JOIN posts_has_tags phs ON p.id = phs.post_id
   JOIN tags t ON phs.tag_id = t.id
   WHERE c.id = :id;";

   $rs = $connexion->prepare($sql);
   $rs->bindValue(':id', $categorieId, PDO::PARAM_INT);
   $rs->execute();
   return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findAll(\PDO $connexion) {
   $sql = "SELECT c.id, c.name, count(p.id) as freq
   FROM categories c
   JOIN posts p on p.categorie_id = c.id
   group by c.id
   ORDER BY 'name' ASC;";

   $rs = $connexion->query($sql);

   return $rs->fetchAll(PDO::FETCH_ASSOC);
}
//
// function findTags(\PDO $connexion, $postId) {
//    $sql = "SELECT name
//    FROM tags
//    JOIN posts_has_tags phs ON p.id = phs.post_id
//    JOIN tags t ON phs.tag_id = t.id
//    ORDER BY p.created_at DESC
//    LIMIT 10;";
//
//    $rs = $connexion->query($sql);
//    // $rs->execute();
//    // var_dump($rs->fetchAll(PDO::FETCH_ASSOC));
//
//    return $rs->fetchAll(PDO::FETCH_ASSOC);
// }

// SELECT posts.title,
//        GROUP_CONCAT(CONCAT(tags.name, '%', tags.id) SEPARATOR '/') AS postTags
// FROM posts
// JOIN posts_has_tags ON post_id = posts.id
// JOIN tags on tag_id = tags.id
// GROUP BY posts.id;
