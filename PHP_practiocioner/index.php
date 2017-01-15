<?php

$query = require 'bootstrap.php';
require_once 'Task.php';
require 'functions.php';

$tasks = $query->selectAll('todos', 'Task');

require 'index.view.php';
