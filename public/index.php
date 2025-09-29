<?php
require __DIR__ . '/layout/endheading.php';
require __DIR__ . '/layout/footer.php';
require __DIR__ . '/layout/heading.php';
require_once __DIR__ . '/router.php';

get('/', 'views/index.view.php');
get('/AddClass', 'jquery_learning/AddClass.php');
get('/ChangeClass', 'jquery_learning/ChangeClass.php');
get('/RemoveClass', 'jquery_learning/RemoveClass.php');
get('/ToggleClass', 'jquery_learning/ToggleClass.php');

any('/404', 'views/404.view.php');