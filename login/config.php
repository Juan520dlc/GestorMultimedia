<?php
session_start();
/* DATABASE CONFIGURATION */
const DB_SERVER = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_DATABASE = 'proyectomajadas';
const BASE_URL = "http://localhost/dos-ingenierias-proyectos/"; // Eg. http://yourwebsite.com


function getDB()
{
    $dbhost=DB_SERVER;
    $dbuser=DB_USERNAME;
    $dbpass=DB_PASSWORD;
    $dbname=DB_DATABASE;
    try {
        $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $dbConnection->exec("set names utf8");
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    }
    catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

}