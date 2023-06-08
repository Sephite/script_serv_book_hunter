<?php

function homeAction(PDO $connexion){
    include_once '../app/models/booksModel.php';
    include_once '../app/models/authorsModel.php';
    $books = findPopularsbooks($connexion);
    $authors = findPopularsAuthors($connexion);

    global $content, $title;
    $title = "Book Hunter - Page d'acceuil";
    ob_start();
    include '../app/views/home_page/index.php';
    $content = ob_get_clean();
}