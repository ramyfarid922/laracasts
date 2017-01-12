<?php

require 'functions.php';
require 'classes.php';

$greeting = "BONJOUUUUUR";

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];

require 'index.view.php';