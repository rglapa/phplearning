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

$router->get('/AddClass', 'jquery_learning_controllers/addclass.php');
$router->get('/Ajax', 'jquery_learning_contrllers/ajax.php');
$router->get('/Appending', 'jquery_learning_controllers/appending.php');
$router->get('/Chaining', 'jquery_learning_controllers/chaining.php');
$router->get('/Descendants', 'jquery_learning_controllers/Descendants.php');
$router->get('/Dimensions', 'jquery_learning_controllers/Dimensions.php');
$router->get('/filtering', 'jquery_learning_controllers/Filtering.php');
$router->get('/finding', 'jquery_learning_controllers_controllers/Finding.php');
$router->get('/GetPost', 'jquery_learning_controllers/GetPost.php');
$router->get('/Hover', 'jquery_learning_controllers/Hover.php');
$router->get('/Not', 'jquery_learning_controllers/Not.php');