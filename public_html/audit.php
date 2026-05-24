<?php
echo "<div style='font-family: sans-serif; padding: 20px; background: #111; color: #fff;'>";
echo "<h1 style='color: #d4af37;'>🔍 Audit des dossiers et images</h1>";

// 1. Détection du chemin absolu
$racine = __DIR__;
$chemin_cible = $racine . '/assets/images/artists/';

echo "<p><strong>Chemin racine du serveur :</strong> <code>" . $racine . "</code></p>";
echo "<p><strong>Chemin que le script cherche :</strong> <code>" . $chemin_cible . "</code></p>";
echo "<hr style='border-color: #333;'>";

// 2. Vérification du dossier principal
if (!is_dir($chemin_cible)) {
    echo "<h2 style='color: #ff4444;'>[ERREUR FATALE] Le dossier principal 'assets/images/artists/' est introuvable.</h2>";
    echo "<p>Vérifiez que le dossier 'assets' est bien à la racine, et qu'il n'y a pas de fautes de frappe (ex: 'artist' sans 's').</p>";
} else {
    echo "<h2 style='color: #00cc66;'>[SUCCÈS] Le dossier principal a été trouvé ! Voici son contenu réel :</h2>";
    
    // 3. Scan des sous-dossiers trouvés
    $elements = array_diff(scandir($chemin_cible), array('..', '.'));
    
    if (empty($elements)) {
        echo "<p style='color: #ffaa00;'>⚠️ Le dossier est complètement vide.</p>";
    } else {
        foreach ($elements as $dossier) {
            $chemin_dossier = $chemin_cible . $dossier;
            
            if (is_dir($chemin_dossier)) {
                echo "<div style='background: #222; padding: 15px; margin-bottom: 10px; border-left: 4px solid #d4af37;'>";
                echo "<h3 style='margin-top: 0;'>Dossier trouvé : <code>" . $dossier . "</code></h3>";
                
                // 4. Scan des images à l'intérieur
                $fichiers = array_diff(scandir($chemin_dossier), array('..', '.'));
                
                if (empty($fichiers)) {
                    echo "<p style='color: #ffaa00; margin: 0;'>⚠️ Ce dossier ne contient aucune image.</p>";
                } else {
                    echo "<ul style='margin: 0;'>";
                    foreach ($fichiers as $fichier) {
                        // Mise en évidence de l'extension
                        $ext = pathinfo($fichier, PATHINFO_EXTENSION);
                        echo "<li>Fichier : <code>" . $fichier . "</code> (Extension: <strong>" . $ext . "</strong>)</li>";
                    }
                    echo "</ul>";
                }
                echo "</div>";
            } else {
                echo "<p style='color: #aaa;'>Fichier isolé trouvé : <code>" . $dossier . "</code></p>";
            }
        }
    }
}
echo "</div>";
?>