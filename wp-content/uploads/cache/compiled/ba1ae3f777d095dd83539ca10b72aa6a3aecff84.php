<header class="banner">
  <div class="container">
    <div class="row">
      <div class="company-logo large-4 columns">
        <a class="brand" href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a>
      </div>

      <nav class="nav-primary large-8 columns">
        <?php if(has_nav_menu('primary_navigation')): ?>
          <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

        <?php endif; ?>
      </nav>
    </div>

  </div>
</header>
