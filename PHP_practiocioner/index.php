<?php

require_once 'Task.php';
require 'functions.php';

$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);

var_dump($tasks[0]->foobar());

require 'index.view.php';
