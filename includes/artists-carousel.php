<?php
// Configuration des artistes
$artists = [
    'alain-mouret',
    'alison-rikunali',
    'sonja-fasel'
];

// Extensions autorisées
$extensions = ['webp', 'avif', 'jpg', 'jpeg'];

// Dossier des images
$imagesDir = 'assets/images/';

// Parcourir chaque artiste
foreach ($artists as $artist) {
    // Construire les patterns pour glob
    $allImages = [];
    foreach ($extensions as $ext) {
        $pattern = $imagesDir . $artist . '-*.' . $ext;
        $found = glob($pattern);
        if ($found) {
            $allImages = array_merge($allImages, $found);
        }
    }
    
    // Limiter à 5 images par artiste
    $images = array_slice($allImages, 0, 5);
    
    if (empty($images)) {
        continue;
    }
    
    // Formater le titre de l'artiste
    $artistTitle = ucwords(str_replace('-', ' ', $artist));
    ?>
<section class="artist-section">
    <h2><?php echo htmlspecialchars($artistTitle); ?></h2>
    <div class="artist-carousel-wrapper">
        <div class="artist-carousel" role="region" aria-label="Galerie des oeuvres de <?php echo htmlspecialchars($artistTitle); ?>">
            <?php foreach ($images as $imagePath): ?>
                <?php
                // Extraire le nom du fichier et générer l'alt texte
                $filename = basename($imagePath);
                $nameWithoutExt = pathinfo($filename, PATHINFO_FILENAME);
                $altText = ucwords(str_replace('-', ' ', $nameWithoutExt));
                
                // Vérification de l'existence du fichier
                if (file_exists($imagePath)) {
                    // Image existe : affichage normal
                ?>
                    <img
                        src="<?php echo htmlspecialchars($imagePath); ?>"
                        alt="<?php echo htmlspecialchars($altText); ?>"
                        loading="lazy"
                        class="carousel-image">
                <?php
                } else {
                    // Image n'existe pas : afficher div de debug avec bordure rouge
                ?>
                    <div class="carousel-image-error" title="Image manquante">
                        <div class="error-content">
                            <span class="error-icon">⚠️</span>
                            <p class="error-path"><?php echo htmlspecialchars($imagePath); ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
}
?>
