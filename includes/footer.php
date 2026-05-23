<?php
/**
 * FOOTER.PHP - Pied de page simple et élégant
 */
?>
<footer class="site-footer" role="contentinfo">
    <div class="footer-inner">
        <div>
            <p><strong>Résonances du Vivant</strong></p>
            <p>Galerie de Grandcour — 19 juin au 5 juillet 2026</p>
        </div>
        <div>
            <p>Contact</p>
            <p><a href="mailto:contact@resonancesduvivant.ch">contact@resonancesduvivant.ch</a></p>
        </div>
    </div>
</footer>
<style>
    .site-footer {
        border-top: 1px solid rgba(212, 175, 55, 0.15);
        padding: 2rem 1.5rem;
        margin-top: 2rem;
    }

    .footer-inner {
        display: flex;
        justify-content: space-between;
        gap: 2rem;
        max-width: 1200px;
        margin: 0 auto;
        font-size: 0.95rem;
        color: var(--grey);
    }

    .footer-inner a {
        color: var(--ivory);
        text-decoration: none;
        border-bottom: 1px dotted rgba(244, 244, 244, 0.6);
    }

    @media (max-width: 768px) {
        .footer-inner {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>
