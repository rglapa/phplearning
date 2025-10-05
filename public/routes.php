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
// require_once __DIR__ . "/router.php";
// 
// get("/", "views/index.view.php");
// get("/404", "404.php");
// post("/", "views/index.view.php");
// patch("/", "views/index.view.php");
// delete("/", "views/index.view.php");
// put("/", "views/index.view.php");
// 
// get("/hover", "jquery_learning/Hover.php");
// put("/hover", "jquery_learning/Hover.php");
?>