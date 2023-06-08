<?php


function findAll(\PDO $connexion){
    $sql = "SELECT
            FROM books
            ORDER BY title ASC;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findPopularsbooks(PDO $connexion){
    $sql = "SELECT bk.id as book_id, bk.title, a.lastname, c.name, AVG(un.note) AS notation, bk.resume, bk.cover
            FROM books bk
            LEFT JOIN users_notations un on un.book_id = bk.id
            JOIN authors a on bk.author_id = a.id
            JOIN categories c on bk.category_id = c.id
            GROUP BY bk.id
            ORDER BY notation DESC
            LIMIT 3;";


    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}