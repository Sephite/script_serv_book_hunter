<?php


// function findAll(\PDO $connexion){
//     $sql = "SELECT
//             FROM authors
//             ORDER BY lastname ASC, firstname ASC;";
//     $rs = $connexion->query($sql);
//     return $rs->fetchAll(\PDO::FETCH_ASSOC);
// }


function findPopularsAuthors(PDO $connexion){
    $sql = "SELECT au.firstname, au.lastname, au.id, au.biography
            FROM authors au
            ORDER BY lastname ASC , firstname ASC
            LIMIT 3;";


    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}