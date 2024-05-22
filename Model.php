<?php
// Informations de connexion à la base de données
$servername = "localhost"; // Adresse du serveur de base de données
$username = "mglsi_user"; // Nom d'utilisateur pour se connecter à la base de données
$password = "passer"; // Mot de passe pour se connecter à la base de données
$dbname = "mglsi_news"; // Nom de la base de données à utiliser

try {
    // Créer une nouvelle connexion PDO à la base de données
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Définir le mode d'erreur PDO sur Exception, pour gérer les erreurs de connexion
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) {
    // En cas d'erreur lors de la connexion à la base de données, afficher un message d'erreur et arrêter l'exécution du script
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}

// Fonction pour récupérer les articles d'une catégorie spécifique
function getArticlesByCategory($category_id) {
    global $conn; // Utilisation de la variable de connexion globale

    // Requête SQL pour récupérer les articles de la catégorie spécifiée, triés par date de création décroissante et limités à 5
    $sql = "SELECT * FROM Article WHERE categorie = $category_id ORDER BY dateCreation DESC LIMIT 5";
    
    // Exécution de la requête SQL et récupération des résultats sous forme de tableau associatif
    $result = $conn->query($sql);
    
    // Retourner les résultats sous forme de tableau associatif
    return $result->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour récupérer toutes les catégories
function getAllCategories() {
    global $conn; // Utilisation de la variable de connexion globale

    // Requête SQL pour récupérer toutes les catégories de la base de données
    $sql = "SELECT * FROM Categorie";
    
    // Exécution de la requête SQL et récupération des résultats sous forme de tableau associatif
    $result = $conn->query($sql);
    
    // Retourner les résultats sous forme de tableau associatif
    return $result->fetchAll(PDO::FETCH_ASSOC);
}

// Fonction pour récupérer tous les articles
function getArticles() {
    global $conn; // Utilisation de la variable de connexion globale

    // Requête SQL pour récupérer tous les articles de la base de données, triés par date de création décroissante
    $sql = "SELECT * FROM Article ORDER BY dateCreation DESC";
    
    // Exécution de la requête SQL et récupération des résultats sous forme de tableau associatif
    $result = $conn->query($sql);
    
    // Retourner les résultats sous forme de tableau associatif
    return $result->fetchAll(PDO::FETCH_ASSOC);
}
?>
