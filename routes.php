<?php

require_once __DIR__ . "/router.php";

get("/", "views/index.view.php");
get("/404", "404.php");
post("/", "views/index.view.php");
patch("/", "views/index.view.php");
delete("/", "views/index.view.php");
put("/", "views/index.view.php");

get("/hover", "jquery_learning/Hover.php");
put("/hover", "jquery_learning/Hover.php");
?>