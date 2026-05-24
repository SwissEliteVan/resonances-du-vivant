<?php
// Configuration des artistes
$artists = [
    'alain-mouret',
    'alison-rikunali',
    'sonja-fasel'
];

// Extensions autorisées
$extensions = ['webp', 'avif', 'jpg', 'jpeg'];

// Dossier des images (Chemin web et absolu)
$imagesDirWeb = '/assets/images/';
$imagesDirAbsolute = $_SERVER['DOCUMENT_ROOT'] . $imagesDirWeb;

// Parcourir chaque artiste
foreach ($artists as $artist) {
    // Construire les patterns pour glob
    $allImages = [];
    foreach ($extensions as $ext) {
        $pattern = $imagesDirAbsolute . $artist . '-*.' . $ext;
        $found = glob($pattern);
        if ($found) {
            foreach ($found as $file) {
                // Créer le chemin web relatif correspondant
                $allImages[] = $imagesDirWeb . basename($file);
            }
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
                ?>
                <img
                    src="<?php echo htmlspecialchars($imagePath); ?>"
                    alt="<?php echo htmlspecialchars($altText); ?>"
                    loading="lazy"
                    class="carousel-image">
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
}
?>