<?php

require "Reader.php";

$reader = new Reader("merlin@test.fr", "merlin");

$favoriteBooks = $reader -> addBookToFavorites("Le tombeau scellé");
var_dump($favoriteBooks);

$favoriteBooks = $reader -> addBookToFavorites("La Passe-miroir");
var_dump($favoriteBooks);

$favoriteBooks = $reader->addBookToFavorites("1Q84");
var_dump($favoriteBooks);

$favoriteBooks = $reader->removeBookFromFavorites("La Passe-miroir");
var_dump($favoriteBooks);

$readerDatas = $reader -> login();
var_dump($readerDatas);


