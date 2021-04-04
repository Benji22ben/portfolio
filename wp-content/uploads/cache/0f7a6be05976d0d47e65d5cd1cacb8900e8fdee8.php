<header class="banner">
    <div class="container">
      <img class="logo" src="<?= get_template_directory_uri() . '/assets/images/logo.svg'; ?>" alt="">
      <nav class="nav-primary">
        <?php if(has_nav_menu('primary_navigation')): ?>
          <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

        <?php endif; ?>
      </nav>
    </div>
</header>
