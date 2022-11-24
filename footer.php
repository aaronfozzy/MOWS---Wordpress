<?php
  $footerTemplateDirectory = get_template_directory();
?>
      <footer>
        <?php
          include $footerTemplateDirectory . '/includes/panels/footer/footer-8.php';
        ?>
      </footer>
		</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/build/js/scripts.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/build/js/scripts.js"></script>
	<?php wp_footer(); ?>
	</body>
</html>
