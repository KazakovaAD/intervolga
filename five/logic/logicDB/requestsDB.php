<?php
function read_countries()
{
    require_once("connectDB.php");
    $stmt = connect()->prepare("SELECT * FROM countries;");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function add_countries($name, $capital, $population, $area, $language)
{
    require_once("connectDB.php");
    $stmt = connect()->prepare("INSERT INTO countries (id, name, capital, population, area, language) VALUES (NULL,:name, :capital, :population, :area, :language);");
    $stmt->bindParam(':name', $name, PDO::PARAM_STR, 32);
    $stmt->bindParam(':capital', $capital, PDO::PARAM_STR, 32);
    $stmt->bindParam(':population', $population, PDO::PARAM_INT, 11);
    $stmt->bindParam(':area', $area, PDO::PARAM_STR, 32);
    $stmt->bindParam(':language', $language, PDO::PARAM_STR, 32);
    $stmt->execute();
}