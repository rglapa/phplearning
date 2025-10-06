<?php

$router->get("/", "index.php");
$router->get("/about", "about.php");
$router->get("/contact", "contact.php");

$router->get("/notes", "notes/index.php")->only('auth');
$router->get("/note", "notes/show.php");
$router->delete("/note", "notes/destroy.php");

$router->get("/note/edit", "notes/edit.php");
$router->patch("/note", "notes/update.php");

$router->get("/notes/create", "notes/create.php");
$router->post("/notes", "notes/store.php");

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');

$router->get('/AddClass', 'jquery_learning/addclass.php');
$router->get('/Ajax', 'jquery_learning/ajax.php');
$router->get('/Appending', 'jquery_learning/appending.php');
$router->get('/Chaining', 'jquery_learning/chaining.php');
$router->get('/Descendants', 'jquery_learning/Descendants.php');
$router->get('/Dimensions', 'jquery_learning/Dimensions.php');
$router->get('/filtering', 'jquery_learning/Filtering.php');
$router->get('/finding', 'jquery_learning/Finding.php');
$router->get('/GetPost', 'jquery_learning/GetPost.php');
