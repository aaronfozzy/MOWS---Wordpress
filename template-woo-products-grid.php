<?php
  /* Template Name: WooProducts Template */
?>
<?php
  get_header();
?>
<?php
  if (have_posts()) {
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
  }
?>
<div class="products-pagination">
  <?php echo wooproducts_pagination(); ?>
</div>
<?php
  get_footer();
?>
