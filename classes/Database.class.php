<?php
// ansvarar för kontakten med databasen

class Database
{
    private PDO $connection;


    public function __construct()
    {
        global $dbHost, $dbName, $dbUser, $dbPass;

        $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4";

        try {
            $this->connection = new PDO($dsn, $dbUser, $dbPass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Kunde inte ansluta till databasen: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}