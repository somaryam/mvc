<?php
// Inclure le fichier contenant les fonctions du modèle
include_once "model.php";

// Récupérer la catégorie filtrée depuis l'URL, ou null si non spécifiée
$filter_category = isset($_GET['categorie']) ? $_GET['categorie'] : null;

// Initialiser les variables pour les articles et les catégories
$articles = [];
$categories = [];

// Si une catégorie est spécifiée, récupérer les articles de cette catégorie
if ($filter_category) {
    $articles = getArticlesByCategory($filter_category);
} 
// Sinon, récupérer tous les articles
else {
    $articles = getArticles();
}

// Récupérer toutes les catégories
$categories = getAllCategories();

// Inclure le fichier de vue pour afficher les données
include_once "view.php";
?>
