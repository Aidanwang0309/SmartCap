<header class="banner">
  <div class="container">
    <div class="row">
      <div class="company-logo large-4 columns">
        <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      </div>

      <nav class="nav-primary large-8 columns">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>

  </div>
</header>
