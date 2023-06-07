<?php
class Connect {
    private $db;

    public function __construct() {
        // Configuration de la source de données (DSN)
        $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;
        
        try {
            // Création d'une nouvelle instance de PDO (PHP Data Object)
            // pour établir la connexion à la base de données
            $this->db = new PDO($dsn, DBUSER, DBPASS);
            
            // Configuration du mode de gestion des erreurs
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Configuration de l'encodage des caractères en UTF-8
            $this->db->exec("SET NAMES utf8");
        } catch (PDOException $e) {
            // En cas d'erreur lors de la connexion à la base de données,
            // une exception est lancée avec un message d'erreur
            throw new Exception("Impossible de se connecter à la base de données : " . $e->getMessage());
        }
    }

    public function getDb() {
        // Méthode permettant d'obtenir l'instance de la connexion à la base de données
        return $this->db;
    }

    public function prepare($sql) {
        // Méthode permettant de préparer une requête SQL en utilisant l'instance de PDO
        return $this->db->prepare($sql);
    }
}

// Constantes d'environnement définissant les informations de connexion à la base de données
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "wfbcorp");

// Instanciation de la classe Connect pour établir la connexion à la base de données
$connect = new Connect();

// Exemple d'utilisation : requête préparée avec des paramètres
// $stmt = $connect->prepare("SELECT * FROM ma_table WHERE id = :id");
// $stmt->execute(['id' => 1]);
// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!-- Dans ce code, une classe Connect est définie, qui gère la connexion à la base de données. Voici ce que fait chaque partie du code :

Les lignes 3 à 5 déclarent une propriété privée $db dans la classe Connect, qui sera utilisée pour stocker l'instance de la connexion à la base de données.

Les lignes 7 à 21 définissent le constructeur __construct() de la classe Connect. Ce constructeur est appelé lorsqu'une instance de la classe Connect est créée. Il établit la connexion à la base de données en utilisant les informations de connexion définies dans les constantes d'environnement (DBHOST, DBUSER, DBPASS, DBNAME). Il configure également l'instance de PDO en définissant le mode de gestion des erreurs et l'encodage des caractères.

La méthode getDb() définie à la ligne 23 permet d'obtenir l'instance de la connexion à la base de données. Elle renvoie la valeur de la propriété $db.

La méthode prepare($sql) définie à la ligne 27 permet de préparer une requête SQL en utilisant l'instance de PDO. Elle prend en paramètre une chaîne de caractères $sql qui représente -->