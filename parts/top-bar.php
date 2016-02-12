<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<header class="main-header">
    <a class="top-brand" href="<?php echo home_url(); ?>">
      <img class="top-brand__image" src="<?php bloginfo('template_directory'); ?>/assets/img/brand/simbol-light.svg" alt="" />
     </a>
    <nav  role="navigation" >
     <span class="hide-for-small">
       <?php menuPrincipal(); ?>
     </span>
             	

             
              <ul id="menu-principal-mobile" class="menu-principal show-for-small">
                <li><a href="#" class="left-off-canvas-toggle menu-icon">Menu</a></li>
              </ul>

      </nav>
</header>
