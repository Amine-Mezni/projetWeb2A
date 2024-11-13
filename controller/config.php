<?php
class Config
{
    private static $pdo = null;
    public static function getConnection()
    {
        if (!isset(self::$pdo))
        {
            $servername = 'localhost';
            $username = 'root';
            $dbname = 'eduprohub';
            try 
            {
                self::$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, getenv('DB_PASSWORD'));
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connected successfully';
            } 
            catch (PDOException $e) 
            {
                die('Erreur: ' . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}