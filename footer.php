<?php 
/**
 * Footer template part
 * */ 
?> 

<footer class="codegnet-footer-area">
    <?php
        if ( is_active_sidebar( "codegnet-footer-wdg" ) ) {
            dynamic_sidebar( "codegnet-footer-wdg" );    
        }
    ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>