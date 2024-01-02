<?php
require_once__DIR__ . '/constants.php';
/**
 * Gère les données de connexion à une DB
 * @author Jossua Verdelet <verdelet.jossua@gmail.com>
 */
class Database
{    
    /**
     * host
     *
     * @var mixed
     */
    private $host;
    private $port;
    private $db_name;
    private $username;
    private $password;
    public $connect;

    /**
     * @param $host
     * @param $port
     * @param $db_name
     * @param $username
     * @param $password
     */
    public function __construct()
    {
        $this->host = $_ENV['HOST'];
        $this->port = $_ENV['PORT'];
        $this->db_name = $_ENV['DB_NAME'];
        $this->username = $_ENV['DB_USER'];
        $this->password = $_ENV['DB_PASSWORD'];
    }

    public function getConnection()
    {
        $this->connect = null;

        try {
            // Construction de la chaîne de connexion PDO
            $dsn = "mysql:host=" . $this->host . ":" . $this->port . ";dbname=" . $this->db_name;
            // Création de l'instance PDO
            $this->connect = new PDO($dsn, $this->username, $this->password);
            // Configuration des options de la connexion PDO
            $this->connect->exec("set names utf8");
        } catch (PDOException $exception) {
        // Gestion des erreurs de connexion
            echo "Database connection error:" . $exception->getMessage();
        }
        // Retourne l'instance de connexion
        return $this->connect;
    }

}