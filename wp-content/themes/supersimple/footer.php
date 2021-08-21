<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #page -->
<div class="footer">


    <div class="footer-image"></div>
    <div class="footer-content">
        <div class="content">
            
            <right>
                <a href="#">
                    Back to top ^
                </a>
                
                <br>
                2021 Rohan Menon
            </right>
        </div>
    </div>
</div>
<div class="cursor"></div>
<div class="dot"></div>
<noscript>
    <style>
        img {
            opacity: 1 !important;
        }
    </style>
</noscript>
<script>
    Promise.all(Array.from(document.querySelectorAll('.batch-load')).filter(img => !img.complete).map(img => new Promise(resolve => {
        img.onload = img.onerror = resolve;
    }))).then(() => {
        setImageOpacity(1)
    });

    setTimeout(function() {
        setImageOpacity(1)
    }, 2500);

    function setImageOpacity(opacity) {
        document.querySelectorAll('.batch-load').forEach(function(image) {
            image.style.opacity = opacity;
        });
    }
</script>
<?php wp_footer(); ?>
</body>

</html>