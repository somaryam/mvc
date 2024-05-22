<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Actualités</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Actualités</h1>
    <!-- Navigation pour les catégories -->
    <nav class="navbar">
        <ul>
            <li><a href="controller.php">News</a></li>
            <?php 
            // Vérifier si des catégories sont disponibles
            if (!empty($categories)) {
                // Parcourir chaque catégorie et afficher un lien pour filtrer par catégorie
                foreach ($categories as $category) {
                    echo "<li><a href='controller.php?categorie=".$category['id']."'>".$category['libelle']."</a></li>";
                }
            } 
            // Si aucune catégorie n'est disponible, afficher un message
            else {
                echo "<li>Aucune catégorie trouvée.</li>";
            }
            ?>
        </ul>
    </nav>
</div>

<div class="container">
    <div class="articles">
        <?php
        // Vérifier si des articles sont disponibles
        if (!empty($articles)) {
            // Parcourir chaque article et afficher son titre et son contenu
            foreach ($articles as $article) {
                echo "<div class='article'>";
                echo "<h2>".$article['titre']."</h2>";
                echo "<p>".$article['contenu']."</p>";
                echo "</div>";
            }
        } 
        // Si aucun article n'est disponible, afficher un message
        else {
            echo "Aucune actualité trouvée pour cette catégorie.";
        }
        ?>
    </div>
</div>
</body>
</html>
