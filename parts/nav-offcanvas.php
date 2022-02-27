<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://cv.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
		</ul>
	</div>
	<div class="top-bar-right">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'cv' ); ?></a></li>
		</ul>
	</div>
</div>