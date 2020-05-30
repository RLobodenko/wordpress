<?php
/**
 * Шаблон типовой страницы (page.php)
 */
?>
 
<?php get_header(); ?>

<section>
    <div class="container">
        <div class="bread"><?php if(function_exists('bcn_display')) { bcn_display(); } ?></div>
    </div>
</section>

<section>
    <div class="container">
        <?php woocommerce_content(); ?>
    </div>
</section>

<?php get_footer(); ?>