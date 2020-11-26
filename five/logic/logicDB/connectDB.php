<?php
function connect(){
    $db = new PDO('mysql:host=localhost;dbname=five', 'root', '');
    return $db;
}