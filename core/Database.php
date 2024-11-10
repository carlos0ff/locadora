<?php
namespace core;

use \PDO;
use \Exception;

class Database {

    private static $instance;

    private $connection;

    private function __construct() {
        try {
            // Substitua pelos dados do seu banco de dados
            $host = 'localhost';
            $dbName = 'locadora';
            $username = 'root';
            $password = '';

            $dsn = "mysql:host=$host;dbname=$dbName";
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

    // Método para testar a conexão
    public static function testConnection() {
        try {
            $connection = self::getInstance()->getConnection();
            $query = $connection->query('SELECT 1');
            if ($query) {
                return "Database connection successful!";
            } else {
                return "Database connection failed!";
            }
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}


