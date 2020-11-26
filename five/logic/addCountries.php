<?php
require_once("logicDB/requestsDB.php");
if(isset($_POST['countryName']) && isset($_POST['countryCapital']) && isset($_POST['countryPopulation']) && isset($_POST['countryArea']) && isset($_POST['countryLang']))
{
    $countryName = $_POST['countryName'];
    $countryCapital = $_POST['countryCapital'];
    $countryPopulation = $_POST['countryPopulation'];
    $countryArea = $_POST['countryArea'];
    $countryLang = $_POST['countryLang'];
    add_countries($countryName, $countryCapital, $countryPopulation, $countryArea, $countryLang);
    header("Location: ../countries.php");
}