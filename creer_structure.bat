@echo off
:: Force l'exécution dans le dossier du script
cd /d "%~dp0"
chcp 65001 > nul

echo Creation de l'arborescence en cours...

:: Création des répertoires
mkdir "assets\images" 2>nul
mkdir "assets\videos" 2>nul

:: Création fichiers images
type nul > "assets\images\logo.svg"
type nul > "assets\images\logo.webp"
type nul > "assets\images\hero-bg.webp"
type nul > "assets\images\portrait-alain.webp"
type nul > "assets\images\portrait-sonja.webp"
type nul > "assets\images\portrait-alison.webp"
type nul > "assets\images\alain-1.webp"
type nul > "assets\images\alain-2.webp"
type nul > "assets\images\alain-3.webp"
type nul > "assets\images\sonja-1.webp"
type nul > "assets\images\sonja-2.webp"
type nul > "assets\images\sonja-3.webp"
type nul > "assets\images\alison-1.webp"
type nul > "assets\images\alison-2.webp"
type nul > "assets\images\alison-3.webp"

:: Création fichiers vidéos
type nul > "assets\videos\ambiance.mp4"

:: Création index
type nul > "index.html"

:: Création fichier PDF espace réservé
type nul > "programme.pdf"

echo Operation terminee.
echo Le dossier va s'ouvrir automatiquement.
pause
explorer .