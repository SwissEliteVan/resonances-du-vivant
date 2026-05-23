<?php
/**
 * FOOTER.PHP - Pied de page minimaliste et accessible
 */
?>
<footer class="footer" role="contentinfo">
    <div class="footer-content">
        <address>
            <p>
                <strong>Galerie de Grandcour</strong><br>
                Rue du Reinz 11<br>
                1543 Grandcour, Suisse
            </p>
        </address>

        <div class="footer-info">
            <p>
                <strong>Exposition :</strong><br>
                19 juin - 5 juillet 2026<br>
                <span class="highlight">Entrée Libre</span>
            </p>
        </div>

        <div class="footer-contact">
            <p>
                <strong>Hôte :</strong> Ueli Affolter<br>
                <a href="mailto:contact@resonancesduvivant.ch" class="footer-link">contact@resonancesduvivant.ch</a>
            </p>
        </div>

        <div class="footer-legal">
            <p class="copyright">
                &copy; 2026 Résonances du Vivant. Tous droits réservés.
            </p>
            <ul class="footer-links-list" role="navigation" aria-label="Liens légaux">
                <li><a href="#mentions-legales" class="footer-link">Mentions légales</a></li>
                <li><a href="#politique-confidentialite" class="footer-link">Politique de confidentialité</a></li>
                <li><a href="#politique-cookies" class="footer-link">Cookies</a></li>
            </ul>
        </div>
    </div>
</footer>

<style>
    .footer {
        margin-top: 4rem;
        padding: 3rem 2rem 2rem;
        border-top: 1px solid var(--text-gris);
        background: rgba(0, 0, 0, 0.5);
        font-size: 0.9rem;
        color: var(--text-gris);
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .footer address {
        font-style: normal;
        line-height: 1.8;
    }

    .footer strong {
        color: var(--text-or);
        font-weight: 600;
    }

    .footer-link {
        color: var(--text-or);
        text-decoration: none;
        transition: all 0.3s ease;
        border-bottom: 1px solid transparent;
    }

    .footer-link:hover {
        border-bottom-color: var(--text-or);
    }

    .highlight {
        color: var(--text-or);
        font-weight: 600;
    }

    .footer-legal {
        grid-column: 1 / -1;
        text-align: center;
        border-top: 1px solid var(--text-gris);
        padding-top: 2rem;
    }

    .copyright {
        margin-bottom: 1rem;
        font-size: 0.85rem;
    }

    .footer-links-list {
        list-style: none;
        display: flex;
        justify-content: center;
        gap: 2rem;
        flex-wrap: wrap;
    }

    .footer-links-list li {
        display: inline;
    }

    @media (max-width: 768px) {
        .footer {
            padding: 2rem 1rem 1.5rem;
        }

        .footer-content {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .footer-legal {
            grid-column: 1;
        }

        .footer-links-list {
            flex-direction: column;
            gap: 0.5rem;
        }
    }
</style>
