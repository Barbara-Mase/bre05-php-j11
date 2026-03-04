<?php

require "models/Category.php";
require "models/Post.php";
require "models/User.php";


$user = new User("Leon", "email@email.com", "Tintintin", "Admin");
$user -> setId(3);
var_dump($user);

$category = new Category("Fantasy", "monde imaginaire");
$category->setId(2);
var_dump($category);

$post = new Post("La généralité", "Tout est général", "<h1>Bla</h1><p>blablabml</p>", 3);
$post -> setId(1);
var_dump($post);
