<div class="navbar-wrapper">
  <div class="container">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
            <span class="menu-button">menu</span>
          </button>
          <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div>

        <nav class="collapse navbar-collapse navbar-right" role="navigation">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
          endif;
          ?>
        </nav>
      </div>
    </nav>
  </div>
</div>


    <!-- Header -->
    <header class="header-front-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

          </div>

          <div class="col-md-8">
            <div class="intro-text">
              <div class="intro-lead-in">Join My New Business Bootcamp for Free!</div>
              <div class="intro-heading"><small>I'll show you how to start, run &amp; grow a business in the 21st century.</small></div>
                <div class="col-sm-6 col-md-6">
                  <ul>
                    <li><span class="glyphicon glyphicon-ok"></span>Apply Smart Social Media Stratagies</li>
                    <li><span class="glyphicon glyphicon-ok"></span>Apply Smart Social Media Stratagies</li>
                    <li><span class="glyphicon glyphicon-ok"></span>Apply Smart Social Media Stratagies</li>                    
                  </ul>

                </div>
                <div class="col-sm-6 col-md-6">
                  <ul>
                    <li><span class="glyphicon glyphicon-ok"></span>Apply Smart Social Media Stratagies</li>
                    <li><span class="glyphicon glyphicon-ok"></span>Apply Smart Social Media Stratagies</li>
                    <li><span class="glyphicon glyphicon-ok"></span>Apply Smart Social Media Stratagies</li>
                  </ul>
                </div>
            </div>

              <div class="row">
                <div class="col-md-10 col-md-offset-1">
                  <?php get_template_part('templates/form-signup'); ?>             
                  <p>100&#37 Privacy Guaranteed!</p>
                </div>
              </div>

          </div>
        </div> 



      </div>
    </header>

