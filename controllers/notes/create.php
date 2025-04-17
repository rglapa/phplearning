<?php

$config = require base_path("config.php");
$db = new Core\Database($config["database"]);

$heading = "Create Note";
$errors = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!Core\Validator::string($_POST["body"], 1, 1000)) {
        $errors["body"] = "A body of no more than 1000 characters is required.";
    }

    if (empty($errors)) {
        $db->query("insert into notes(body, user_id) values(:body, :user_id)", [
            ":body" => $_POST["body"],
            ":user_id" => 1,
        ]);
    }
}

view("notes/create.view.php", [
    "heading" => "Create Note",
    "errors" => $errors,
]);
