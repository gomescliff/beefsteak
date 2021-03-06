<div class="header-top">
    <div class="container">
        <div class="header-identity">
            <a href="<?php echo site_url(); ?>" class="header-identity-target">

                <?php if ( get_theme_mod('general_logo') ) : ?>
                    <span class="header-icon"><img src="<?php echo get_theme_mod('general_logo'); ?>" alt="<?php echo __( 'Home', 'aviators' ); ?>"></span>
                <?php else: ?>
                    <span class="header-icon"><i class="fa fa-home"></i></span>
                <?php endif; ?>
                <span class="header-title"><?php echo get_bloginfo( 'name' ); ?></span><!-- /.header-title -->
                <span class="header-slogan"><?php echo html_entity_decode(get_bloginfo( 'description' )); ?></span><!-- /.header-slogan -->
            </a><!-- /.header-identity-target-->
        </div><!-- /.header-identity -->

        <?php if(function_exists('aviators_settings_get')): ?>
            <?php if( aviators_settings_get('submission', 'general', 'display_link')): ?>
                <div class="header-actions pull-right">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'header',
                        'fallback_cb' => false,
                        'menu_class' => 'nav nav-pills',
                        'container_class' => '',
                    ) ); ?>
                </div><!-- /.header-actions -->
            <?php endif; ?>
        <?php endif; ?>

        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".header-navigation">
            <span class="sr-only"><?php echo __('Toggle navigation', 'aviators'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div><!-- /.container -->
</div><!-- /.header-top -->