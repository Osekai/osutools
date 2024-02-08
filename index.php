<?php
include("config.php");
include("database.php");
require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->get('/{category}/', function ($category) {
    if ($category == "")
        $data = Database::execSimpleSelect("SELECT * FROM Tools WHERE Featured = 1");
    else
        $data = Database::execSelect("SELECT * FROM Tools WHERE Category = ?", "s", [$category]);
    include("page.php");
});

$router->run();