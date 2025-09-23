<?php

/**
 * DIR is the directory of the project
 */
define("DIR", __DIR__);
require "layout/heading.php";
require "layout/endheading.php";
require "layout/footer.php";
$request_uri = $_SERVER['REQUEST_URI'];


$requestPath = strtok($request_uri, "?");

match ($requestPath) {
    '/' => require DIR . '/views/index.view.php',
    '/AddClass' => require DIR . '/jquery_learning/AddClass.php',
    '/Hover' => require DIR . '/jquery_learning/Hover.php',
    '/Ajax' => require DIR . '/jquery_learning/Ajax.php',
    '/Appending' => require DIR . '/jquery_learning/Appending.php',
    '/Chaining' => require DIR . '/jquery_learning/Chaining.php',
    '/Filtering' => require DIR . '/jquery_learning/Filtering.php',
    '/Descendants' => require DIR . '/jquery_learning/Descendants.php',
    '/Dimensions' => require DIR . '/jquery_learning/Dimensions.html',
    '/Finding' => require DIR . '/jquery_learning/Finding.php',
    '/GetPost' => require DIR . '/jquery_learning/GetPost.html',
    '/JqueryPluginExample' => require DIR . '/jquery_learning/JqueryPluginExample.html',
    '/Not' => require DIR . '/jquery_learning/Not.php',
    '/Blockrain' => require DIR . '/jquery_learning/blockrain/Blockrain.html',
    '/JCrop%20Page' => require DIR . '/jquery_learning/Jcrop/JCrop Page.html',
    '/MultisliderTest' => require DIR . '/jquery_learning/MultisliderTest.html',
    '/RemoveClass' => require DIR . '/jquery_learning/RemoveClass.php',
    '/ASPTest' => require DIR . '/jquery_learning/ASPTest.php',
    '/AJAX/AJAXSQL' => require DIR . '/jquery_learning/AJAX/AJAXSQL.html',

    /**
     * PHP Learning
     */
    '/Abstract' => require DIR . '/php_learning/Abstract.php',
    '/AJAXPoll' => require DIR . '/php_learning/AJAXPoll.php',
    '/AutoComplete' => require DIR . '/php_learning/AutoComplete.php',
    '/CompleteForm' => require DIR . '/php_learning/CompleteForm.php',
    '/ConnectToMySQL' => require DIR . '/php_learning/ConnectToMySQL.php',
    '/Constructor' => require DIR . '/php_learning/Constructor.php',
    '/Cookies' => require DIR . '/php_learning/Cookies.php',
    '/CreateTable' => require DIR . '/php_learning/CreateTable.php',
    '/Destructor' => require DIR . '/php_learning/Destructor.php',
    '/Echoing' => require DIR . '/php_learning/Echoing.php',
    '/example' => require DIR . '/php_learning/example.php',
    '/Factorial' => require DIR . '/php_learning/Factorial.php',
    '/FileCreation' => require DIR . '/php_learning/FileCreation.php',
    '/Filters' => require DIR . '/php_learning/Filters.php',
    '/ForEach' => require DIR . '/php_learning/ForEach.php',
    '/Form' => require DIR . '/php_learning/Form.php',
    '/Hello' => require DIR . '/php_learning/hello.php',
    '/InsertMultipleSQLData' => require DIR . '/php_learning/InsertMultipleSQLData.php',
    '/InsertSQLData' => require DIR . '/php_learning/InsertSQLData.php',
    '/LinkToInterfaces' => require DIR . '/php_learning/Interfaces.php',
    '/Iterables' => require DIR . '/php_learning/Iterables.php',
    '/LogicalOperators' => require DIR . '/php_learning/LogicalOperators.php',
    '/PassingFunctions' => require DIR . '/php_learning/PassingFunctions.php',
    '/XMLDOM' => require DIR . '/php_learning/XMLDOM.php',
    '/XMLParser' => require DIR . '/php_learning/XMLParser.php',
    ' ' => require DIR . '/views/404.view.php'
};