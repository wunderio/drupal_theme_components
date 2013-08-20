<?php

?>
  <div class="page">

    <header role="banner">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <!--  possible seo scenario where a header text should be output on every page  -->
      <?php if ($site_name || $site_slogan): ?>
        <hgroup class="name-and-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div class="site-name<?php if ($hide_site_name) { print ' element-invisible'; } ?>"><strong>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 class="site-name<?php if ($hide_site_name) { print ' element-invisible'; } ?>">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <h2 class="site-slogan<?php if ($hide_site_slogan) { print ' element-invisible'; } ?>"><?php print $site_slogan; ?></h2>
          <?php endif; ?>
        </hgroup> <!-- /.name-and-slogan -->
      <?php endif; ?>



    </header> <!-- /.header -->
  </div><!-- /.page -->

