<?php
/**
 * wp-blank WordPress Theme, ordasvit.com
 * wp-blank is distributed under the terms of the GNU GPL
 * Copyright: OrdaSvit, Andrey Kvasnevskiy, ordasvit.com
 */

get_header();

?>

<div id="main" class="site-main">

	<div id="wrapper-content">
		<div class="row">

			<?php
			if (!wp_blank_show_position_preview("top_left", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("top_left")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("top_right") && wp_blank_is_active_sidebar("top_left_center") && wp_blank_is_active_sidebar("top_right_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("top_right") && wp_blank_is_active_sidebar("top_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_right") && wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_left_center") && wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_right") || wp_blank_is_active_sidebar("top_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_left_center") || wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_right") || wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_right") || wp_blank_is_active_sidebar("top_left_center") || wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('top_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("top_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("top_left_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("top_right") && wp_blank_is_active_sidebar("top_left") && wp_blank_is_active_sidebar("top_right_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("top_right") && wp_blank_is_active_sidebar("top_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_right") && wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_left") && wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_right") || wp_blank_is_active_sidebar("top_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_left") || wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_right") || wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_right") || wp_blank_is_active_sidebar("top_left") || wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('top_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("top_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("top_right_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("top_right") && wp_blank_is_active_sidebar("top_left_center") && wp_blank_is_active_sidebar("top_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("top_right") && wp_blank_is_active_sidebar("top_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_right") && wp_blank_is_active_sidebar("top_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_left_center") && wp_blank_is_active_sidebar("top_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_right") || wp_blank_is_active_sidebar("top_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_left_center") || wp_blank_is_active_sidebar("top_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_right") || wp_blank_is_active_sidebar("top_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_right") || wp_blank_is_active_sidebar("top_left_center") || wp_blank_is_active_sidebar("top_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('top_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("top_right", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("top_right")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("top_left") && wp_blank_is_active_sidebar("top_left_center") && wp_blank_is_active_sidebar("top_right_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("top_left") && wp_blank_is_active_sidebar("top_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_left") && wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_left_center") && wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_left") || wp_blank_is_active_sidebar("top_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_left_center") || wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_left") || wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("top_left") || wp_blank_is_active_sidebar("top_left_center") || wp_blank_is_active_sidebar("top_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('top_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div class="row">

			<?php
			if (!wp_blank_show_position_preview("line1_left", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line1_left")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line1_right") && wp_blank_is_active_sidebar("line1_left_center") && wp_blank_is_active_sidebar("line1_right_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line1_right") && wp_blank_is_active_sidebar("line1_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_right") && wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_left_center") && wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_right") || wp_blank_is_active_sidebar("line1_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_left_center") || wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_right") || wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_right") || wp_blank_is_active_sidebar("line1_left_center") || wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12 title_blog');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line1_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line1_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line1_left_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line1_right") && wp_blank_is_active_sidebar("line1_left") && wp_blank_is_active_sidebar("line1_right_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line1_right") && wp_blank_is_active_sidebar("line1_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_right") && wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_left") && wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_right") || wp_blank_is_active_sidebar("line1_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_left") || wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_right") || wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_right") || wp_blank_is_active_sidebar("line1_left") || wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line1_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line1_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line1_right_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line1_right") && wp_blank_is_active_sidebar("line1_left_center") && wp_blank_is_active_sidebar("line1_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line1_right") && wp_blank_is_active_sidebar("line1_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_right") && wp_blank_is_active_sidebar("line1_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_left_center") && wp_blank_is_active_sidebar("line1_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_right") || wp_blank_is_active_sidebar("line1_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_left_center") || wp_blank_is_active_sidebar("line1_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_right") || wp_blank_is_active_sidebar("line1_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_right") || wp_blank_is_active_sidebar("line1_left_center") || wp_blank_is_active_sidebar("line1_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line1_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line1_right", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line1_right")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line1_left") && wp_blank_is_active_sidebar("line1_left_center") && wp_blank_is_active_sidebar("line1_right_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line1_left") && wp_blank_is_active_sidebar("line1_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_left") && wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_left_center") && wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_left") || wp_blank_is_active_sidebar("line1_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_left_center") || wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_left") || wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line1_left") || wp_blank_is_active_sidebar("line1_left_center") || wp_blank_is_active_sidebar("line1_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line1_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div class="container wrapper-gender">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 col-sx-12">
					<div class="inner-wrapper-gender">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/gender-man.jpg'); ?>"
							alt="gender">
						<a href="#!">
							<?php esc_html_e('Men\'s', 'wp-blank') ?>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 col-sx-12 center">
					<div class="inner-wrapper-gender">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/gender-child.jpg'); ?>"
							alt="gender" />
						<a href="#!">
							<?php esc_html_e('Children\’s', 'wp-blank') ?>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 col-sx-12">
					<div class="inner-wrapper-gender">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/gender-women.jpg'); ?>"
							alt="gender" />
						<a href="#!">
							<?php esc_html_e('Women\'s', 'wp-blank') ?>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row">

			<?php
			if (!wp_blank_show_position_preview("line2_left", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line2_left")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line2_left_center") && wp_blank_is_active_sidebar("line2_right_center") && wp_blank_is_active_sidebar("line2_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line2_left_center") && wp_blank_is_active_sidebar("line2_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left_center") && wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_right_center") && wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left_center") || wp_blank_is_active_sidebar("line2_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 line2 left');
				} else if (wp_blank_is_active_sidebar("line2_right_center") || wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 left');
				} else if (wp_blank_is_active_sidebar("line2_left_center") || wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 left');
				} else if (wp_blank_is_active_sidebar("line2_left_center") || wp_blank_is_active_sidebar("line2_right_center") || wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 line2 left');
				} else {
					echo ('col-lg-12 menu_title');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line2_left'); ?>

				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line2_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line2_left_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line2_left") && wp_blank_is_active_sidebar("line2_right_center") && wp_blank_is_active_sidebar("line2_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line2_left") && wp_blank_is_active_sidebar("line2_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left") && wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_right_center") && wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left") || wp_blank_is_active_sidebar("line2_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else if (wp_blank_is_active_sidebar("line2_right_center") || wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else if (wp_blank_is_active_sidebar("line2_left") || wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else if (wp_blank_is_active_sidebar("line2_left") || wp_blank_is_active_sidebar("line2_right_center") || wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 line2 right');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line2_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line2_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line2_right_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line2_left_center") && wp_blank_is_active_sidebar("line2_left") && wp_blank_is_active_sidebar("line2_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line2_left_center") && wp_blank_is_active_sidebar("line2_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left_center") && wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left") && wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left_center") || wp_blank_is_active_sidebar("line2_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left") || wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left_center") || wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left_center") || wp_blank_is_active_sidebar("line2_left") || wp_blank_is_active_sidebar("line2_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 line2');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line2_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line2_right", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line2_right")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line2_left_center") && wp_blank_is_active_sidebar("line2_right_center") && wp_blank_is_active_sidebar("line2_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line2_left_center") && wp_blank_is_active_sidebar("line2_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left_center") && wp_blank_is_active_sidebar("line2_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left_center") && wp_blank_is_active_sidebar("line2_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left_center") || wp_blank_is_active_sidebar("line2_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_right_center") || wp_blank_is_active_sidebar("line2_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left_center") || wp_blank_is_active_sidebar("line2_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line2_left_center") || wp_blank_is_active_sidebar("line2_right_center") || wp_blank_is_active_sidebar("line2_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12 line2');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line2_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div class="container">
			<div class="row">

				<?php
				if (!wp_blank_show_position_preview("line3_left", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line3_left")) { ?>
					<div class="<?php if (wp_blank_is_active_sidebar("line3_left_center") && wp_blank_is_active_sidebar("line3_right_center") && wp_blank_is_active_sidebar("line3_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_blank_is_active_sidebar("line3_left_center") && wp_blank_is_active_sidebar("line3_right_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") && wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_right_center") && wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") || wp_blank_is_active_sidebar("line3_right_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12 title_left');
					} else if (wp_blank_is_active_sidebar("line3_right_center") || wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") || wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") || wp_blank_is_active_sidebar("line3_right_center") || wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 title_left');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line3_left'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_blank_show_position_preview("line3_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line3_left_center")) { ?>
					<div class="<?php if (wp_blank_is_active_sidebar("line3_left") && wp_blank_is_active_sidebar("line3_right_center") && wp_blank_is_active_sidebar("line3_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_blank_is_active_sidebar("line3_left") && wp_blank_is_active_sidebar("line3_right_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left") && wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_right_center") && wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left") || wp_blank_is_active_sidebar("line3_right_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12 right');
					} else if (wp_blank_is_active_sidebar("line3_right_center") || wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 right');
					} else if (wp_blank_is_active_sidebar("line3_left") || wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 right');
					} else if (wp_blank_is_active_sidebar("line3_left") || wp_blank_is_active_sidebar("line3_right_center") || wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 right');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line3_left_center'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_blank_show_position_preview("line3_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line3_right_center")) { ?>
					<div class="<?php if (wp_blank_is_active_sidebar("line3_left_center") && wp_blank_is_active_sidebar("line3_left") && wp_blank_is_active_sidebar("line3_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_blank_is_active_sidebar("line3_left_center") && wp_blank_is_active_sidebar("line3_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") && wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left") && wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") || wp_blank_is_active_sidebar("line3_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left") || wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") || wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") || wp_blank_is_active_sidebar("line3_left") || wp_blank_is_active_sidebar("line3_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line3_right_center'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_blank_show_position_preview("line3_right", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line3_right")) { ?>
					<div class="<?php if (wp_blank_is_active_sidebar("line3_left_center") && wp_blank_is_active_sidebar("line3_right_center") && wp_blank_is_active_sidebar("line3_left")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_blank_is_active_sidebar("line3_left_center") && wp_blank_is_active_sidebar("line3_right_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") && wp_blank_is_active_sidebar("line3_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") && wp_blank_is_active_sidebar("line3_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") || wp_blank_is_active_sidebar("line3_right_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_right_center") || wp_blank_is_active_sidebar("line3_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") || wp_blank_is_active_sidebar("line3_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line3_left_center") || wp_blank_is_active_sidebar("line3_right_center") || wp_blank_is_active_sidebar("line3_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line3_right'); ?>
					</div>
				<?php }
				; ?>

			</div>
		</div>

		<div class="row">

			<?php
			if (!wp_blank_show_position_preview("line4_left", 'col-md-3 col-sm-3 col-xs-12 blocks left') && wp_blank_is_active_sidebar("line4_left")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line4_left_center") && wp_blank_is_active_sidebar("line4_right_center") && wp_blank_is_active_sidebar("line4_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12 blocks left';
				} else if (wp_blank_is_active_sidebar("line4_left_center") && wp_blank_is_active_sidebar("line4_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") && wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_right_center") && wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") || wp_blank_is_active_sidebar("line4_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_right_center") || wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") || wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") || wp_blank_is_active_sidebar("line4_right_center") || wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line4_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line4_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line4_left_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line4_left") && wp_blank_is_active_sidebar("line4_right_center") && wp_blank_is_active_sidebar("line4_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line4_left") && wp_blank_is_active_sidebar("line4_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left") && wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_right_center") && wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left") || wp_blank_is_active_sidebar("line4_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_right_center") || wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left") || wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left") || wp_blank_is_active_sidebar("line4_right_center") || wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line4_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line4_right_center", 'col-md-3 col-sm-3 col-xs-12 blocks in_up') && wp_blank_is_active_sidebar("line4_right_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line4_left_center") && wp_blank_is_active_sidebar("line4_left") && wp_blank_is_active_sidebar("line4_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12 blocks in_up';
				} else if (wp_blank_is_active_sidebar("line4_left_center") && wp_blank_is_active_sidebar("line4_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") && wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left") && wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") || wp_blank_is_active_sidebar("line4_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left") || wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") || wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") || wp_blank_is_active_sidebar("line4_left") || wp_blank_is_active_sidebar("line4_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line4_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line4_right", 'col-md-3 col-sm-3 col-xs-12 blocks right') && wp_blank_is_active_sidebar("line4_right")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line4_left_center") && wp_blank_is_active_sidebar("line4_right_center") && wp_blank_is_active_sidebar("line4_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12 blocks right';
				} else if (wp_blank_is_active_sidebar("line4_left_center") && wp_blank_is_active_sidebar("line4_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") && wp_blank_is_active_sidebar("line4_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") && wp_blank_is_active_sidebar("line4_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") || wp_blank_is_active_sidebar("line4_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_right_center") || wp_blank_is_active_sidebar("line4_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") || wp_blank_is_active_sidebar("line4_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line4_left_center") || wp_blank_is_active_sidebar("line4_right_center") || wp_blank_is_active_sidebar("line4_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line4_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div class="wrapper-t-shirt">
			<div class="wrapper-inner-t-shirt">
				<h3>
					<?php esc_html_e('Shop For Great Selection Of Suits and jackets', 'wp-blank') ?>
				</h3>
				<a href="#!">
					<?php esc_html_e('Shop now', 'wp-blank') ?>
				</a>
			</div>
		</div>

		<div class="container">
			<div class="row">

				<?php
				if (!wp_blank_show_position_preview("center_left", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("center_left")) { ?>
					<div class="<?php if (wp_blank_is_active_sidebar("center_left_position") && wp_blank_is_active_sidebar("center_right_position") && wp_blank_is_active_sidebar("center_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_blank_is_active_sidebar("center_left_position") && wp_blank_is_active_sidebar("center_right_position")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left_position") && wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_right_position") && wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left_position") || wp_blank_is_active_sidebar("center_right_position")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_right_position") || wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left_position") || wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left_position") || wp_blank_is_active_sidebar("center_right_position") || wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('center_left'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_blank_show_position_preview("center_left_position", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("center_left_position")) {
					?>
					<div class="<?php if (wp_blank_is_active_sidebar("center_left") && wp_blank_is_active_sidebar("center_right_position") && wp_blank_is_active_sidebar("center_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_blank_is_active_sidebar("center_left") && wp_blank_is_active_sidebar("center_right_position")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left") && wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_right_position") && wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left") || wp_blank_is_active_sidebar("center_right_position")) {
						echo ('col-md-6 col-sm-6 col-xs-12 title_left');
					} else if (wp_blank_is_active_sidebar("center_right_position") || wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 title_left');
					} else if (wp_blank_is_active_sidebar("center_left") || wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 title_left');
					} else if (wp_blank_is_active_sidebar("center_left") || wp_blank_is_active_sidebar("center_right_position") || wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12 title_left');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('center_left_position'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_blank_show_position_preview("center_right_position", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("center_right_position")) { ?>
					<div class="<?php if (wp_blank_is_active_sidebar("center_left_position") && wp_blank_is_active_sidebar("center_left") && wp_blank_is_active_sidebar("center_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_blank_is_active_sidebar("center_left_position") && wp_blank_is_active_sidebar("center_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left_position") && wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left") && wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left_position") || wp_blank_is_active_sidebar("center_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left") || wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left_position") || wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left_position") || wp_blank_is_active_sidebar("center_left") || wp_blank_is_active_sidebar("center_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('center_right_position'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_blank_show_position_preview("center_right", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("center_right")) { ?>
					<div class="<?php if (wp_blank_is_active_sidebar("center_left_position") && wp_blank_is_active_sidebar("center_right_position") && wp_blank_is_active_sidebar("center_left")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_blank_is_active_sidebar("center_left_position") && wp_blank_is_active_sidebar("center_right_position")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left_position") && wp_blank_is_active_sidebar("center_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_right_position") && wp_blank_is_active_sidebar("center_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left_position") || wp_blank_is_active_sidebar("center_right_position")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_right_position") || wp_blank_is_active_sidebar("center_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left_position") || wp_blank_is_active_sidebar("center_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("center_left_position") || wp_blank_is_active_sidebar("center_right_position") || wp_blank_is_active_sidebar("center_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('center_right'); ?>
					</div>
				<?php }
				; ?>

			</div>
		</div>

		<div class="container">
			<div class="row">

				<?php
				if (!wp_blank_show_position_preview("sidebar_left", 'col-lg-3 col-md-12 col-sm-12 col-xs-12') && wp_blank_is_active_sidebar("sidebar_left")) { ?>
					<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 side_bar_left_page">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('sidebar_left'); ?>
					</div>
				<?php }
				; ?>

				<div class="<?php if (wp_blank_is_active_sidebar("sidebar_right") && wp_blank_is_active_sidebar("sidebar_left")) {
					echo ('col-lg-6 col-md-12 col-sm-12 col-xs-12');
				} else if (wp_blank_is_active_sidebar("sidebar_right") || wp_blank_is_active_sidebar("sidebar_left")) {
					echo ('col-lg-9 col-md-12 col-sm-12 col-xs-12');
				} else {
					echo ('col-lg-12 col-md-12 col-sm-12 col-xs-12');
				} ?>  main_page">

					<?php wp_blank_show_position_preview("main_content"); ?>


				</div>


				<?php
				if (!wp_blank_show_position_preview("sidebar_right", "col-lg-3 col-md-12 col-sm-12 col-xs-12") && wp_blank_is_active_sidebar("sidebar_right")) {
					if (function_exists('dynamic_sidebar') && wp_blank_is_active_sidebar("sidebar_right")) {
						?>
						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 side_bar_right_page">
							<?php
							dynamic_sidebar('sidebar_right');
							?>
						</div>
						<?php
					}
				}
				;
				?>

			</div>
		</div>

		<div class="row">
			<?php
			if (!wp_blank_show_position_preview("line5_left", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line5_left")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line5_right_center") && wp_blank_is_active_sidebar("line5_right") && wp_blank_is_active_sidebar("line5_left_center")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line5_right_center") && wp_blank_is_active_sidebar("line5_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_right_center") && wp_blank_is_active_sidebar("line5_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_right_center") && wp_blank_is_active_sidebar("line5_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_right_center") || wp_blank_is_active_sidebar("line5_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
				} else if (wp_blank_is_active_sidebar("line5_right") || wp_blank_is_active_sidebar("line5_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
				} else if (wp_blank_is_active_sidebar("line5_right_center") || wp_blank_is_active_sidebar("line5_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
				} else if (wp_blank_is_active_sidebar("line5_right_center") || wp_blank_is_active_sidebar("line5_right") || wp_blank_is_active_sidebar("line5_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 gallery left');
				} else {
					echo ('col-lg-12');
				} ?>">

					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line5_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line5_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line5_left_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line5_right_center") && wp_blank_is_active_sidebar("line5_right") && wp_blank_is_active_sidebar("line5_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line5_right_center") && wp_blank_is_active_sidebar("line5_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_right_center") && wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_right") && wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_right_center") || wp_blank_is_active_sidebar("line5_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else if (wp_blank_is_active_sidebar("line5_right") || wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else if (wp_blank_is_active_sidebar("line5_right_center") || wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else if (wp_blank_is_active_sidebar("line5_right_center") || wp_blank_is_active_sidebar("line5_right") || wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12 right');
				} else {
					echo ('col-lg-12');
				} ?>">

					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line5_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line5_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line5_right_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line5_left_center") && wp_blank_is_active_sidebar("line5_right") && wp_blank_is_active_sidebar("line5_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line5_left_center") && wp_blank_is_active_sidebar("line5_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_left_center") && wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_right") && wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_left_center") || wp_blank_is_active_sidebar("line5_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_right") || wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_left_center") || wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_left_center") || wp_blank_is_active_sidebar("line5_right") || wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">

					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line5_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line5_right", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line5_right")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line5_right_center") && wp_blank_is_active_sidebar("line5_left_center") && wp_blank_is_active_sidebar("line5_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line5_right_center") && wp_blank_is_active_sidebar("line5_left_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_right_center") && wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_left_center") && wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_right_center") || wp_blank_is_active_sidebar("line5_left_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_left_center") || wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_right_center") || wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line5_right_center") || wp_blank_is_active_sidebar("line5_left_center") || wp_blank_is_active_sidebar("line5_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line5_right'); ?>
				</div>
			<?php }
			; ?>
		</div>

		<div class="wrapper-promo">
			<div class="wrapper-inner-promo">
				<h3>
					<?php esc_html_e('buy our products using promo code', 'wp-blank') ?>
					<span>
						<?php esc_html_e('PC3U8HWW', 'wp-blank') ?>
					</span>
					<?php esc_html_e('and get a discount up to 35%', 'wp-blank') ?>
				</h3>
				<a href="#!">
					<?php esc_html_e('Shop now', 'wp-blank') ?>
				</a>
			</div>
		</div>

		<div class="container wrapper-testimonials">
			<h3 class="my_widget_title_custom">
				<?php _e('Testimonials', 'wp-blank'); ?>
			</h3>
			<div class="row">
				<div class="col-lg-3 col-md-6 sol-sm-12 col-xs-12">
					<div class="wrapper-one-testimonials">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/testimonials-1.jpg'); ?>"
							alt="testimonial" />
						<h4>
							<?php esc_html_e('Peter Parker', 'wp-blank') ?>
						</h4>
						<p>
							<?php esc_html_e('If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything
							embarrassing hidden in the middle of text.', 'wp-blank') ?>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 sol-sm-12 col-xs-12">
					<div class="wrapper-one-testimonials">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/testimonials-2.jpg'); ?>"
							alt="testimonial" />
						<h4>
							<?php esc_html_e('Natali Portman', 'wp-blank') ?>
						</h4>
						<p>
							<?php esc_html_e('There are many variations of passages of Lorem Ipsum available, but the majority have
							suffered alteration in some form', 'wp-blank') ?>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 sol-sm-12 col-xs-12">
					<div class="wrapper-one-testimonials">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/testimonials-3.jpg'); ?>"
							alt="testimonial" />
						<h4>
							<?php esc_html_e('Alisa Johnson', 'wp-blank') ?>
						</h4>
						<p>
							<?php esc_html_e('All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary', 'wp-blank') ?>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 sol-sm-12 col-xs-12">
					<div class="wrapper-one-testimonials">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/testimonials-4.jpg'); ?>"
							alt="testimonial" />
						<h4>
							<?php esc_html_e('Kate Wilsson', 'wp-blank') ?>
						</h4>
						<p>
							<?php esc_html_e('Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
							using \'Content here, content here\'', 'wp-blank') ?>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">

			<?php
			if (!wp_blank_show_position_preview("line6_left", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line6_left")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line6_left_center") && wp_blank_is_active_sidebar("line6_right_center") && wp_blank_is_active_sidebar("line6_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line6_left_center") && wp_blank_is_active_sidebar("line6_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left_center") && wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_right_center") && wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left_center") || wp_blank_is_active_sidebar("line6_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post left');
				} else if (wp_blank_is_active_sidebar("line6_right_center") || wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post');
				} else if (wp_blank_is_active_sidebar("line6_left_center") || wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post');
				} else if (wp_blank_is_active_sidebar("line6_left_center") || wp_blank_is_active_sidebar("line6_right_center") || wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line6_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line6_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line6_left_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line6_left") && wp_blank_is_active_sidebar("line6_right_center") && wp_blank_is_active_sidebar("line6_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line6_left") && wp_blank_is_active_sidebar("line6_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left") && wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_right_center") && wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left") || wp_blank_is_active_sidebar("line6_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post_left');
				} else if (wp_blank_is_active_sidebar("line6_right_center") || wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post_left');
				} else if (wp_blank_is_active_sidebar("line6_left") || wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post_left');
				} else if (wp_blank_is_active_sidebar("line6_left") || wp_blank_is_active_sidebar("line6_right_center") || wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 title_post_left');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line6_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line6_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line6_right_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line6_left_center") && wp_blank_is_active_sidebar("line6_left") && wp_blank_is_active_sidebar("line6_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line6_left_center") && wp_blank_is_active_sidebar("line6_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left_center") && wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left") && wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left_center") || wp_blank_is_active_sidebar("line6_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left") || wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left_center") || wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left_center") || wp_blank_is_active_sidebar("line6_left") || wp_blank_is_active_sidebar("line6_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line6_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line6_right", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line6_right")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line6_left_center") && wp_blank_is_active_sidebar("line6_right_center") && wp_blank_is_active_sidebar("line6_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line6_left_center") && wp_blank_is_active_sidebar("line6_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left_center") && wp_blank_is_active_sidebar("line6_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left_center") && wp_blank_is_active_sidebar("line6_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left_center") || wp_blank_is_active_sidebar("line6_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_right_center") || wp_blank_is_active_sidebar("line6_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left_center") || wp_blank_is_active_sidebar("line6_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line6_left_center") || wp_blank_is_active_sidebar("line6_right_center") || wp_blank_is_active_sidebar("line6_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line6_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div class="row">

			<?php
			if (!wp_blank_show_position_preview("line7_left", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line7_left")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line7_left_center") && wp_blank_is_active_sidebar("line7_right_center") && wp_blank_is_active_sidebar("line7_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line7_left_center") && wp_blank_is_active_sidebar("line7_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left_center") && wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_right_center") && wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left_center") || wp_blank_is_active_sidebar("line7_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right left');
				} else if (wp_blank_is_active_sidebar("line7_right_center") || wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right left');
				} else if (wp_blank_is_active_sidebar("line7_left_center") || wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right left');
				} else if (wp_blank_is_active_sidebar("line7_left_center") || wp_blank_is_active_sidebar("line7_right_center") || wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right left');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line7_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line7_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line7_left_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line7_left") && wp_blank_is_active_sidebar("line7_right_center") && wp_blank_is_active_sidebar("line7_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line7_left") && wp_blank_is_active_sidebar("line7_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left") && wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_right_center") && wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left") || wp_blank_is_active_sidebar("line7_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title');
				} else if (wp_blank_is_active_sidebar("line7_right_center") || wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title');
				} else if (wp_blank_is_active_sidebar("line7_left") || wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title_right');
				} else if (wp_blank_is_active_sidebar("line7_left") || wp_blank_is_active_sidebar("line7_right_center") || wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12 contact_title');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line7_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line7_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line7_right_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line7_left_center") && wp_blank_is_active_sidebar("line7_left") && wp_blank_is_active_sidebar("line7_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line7_left_center") && wp_blank_is_active_sidebar("line7_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left_center") && wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left") && wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left_center") || wp_blank_is_active_sidebar("line7_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left") || wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left_center") || wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left_center") || wp_blank_is_active_sidebar("line7_left") || wp_blank_is_active_sidebar("line7_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line7_right_center'); ?>

				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line7_right", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line7_right")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line7_left_center") && wp_blank_is_active_sidebar("line7_right_center") && wp_blank_is_active_sidebar("line7_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line7_left_center") && wp_blank_is_active_sidebar("line7_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left_center") && wp_blank_is_active_sidebar("line7_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left_center") && wp_blank_is_active_sidebar("line7_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left_center") || wp_blank_is_active_sidebar("line7_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_right_center") || wp_blank_is_active_sidebar("line7_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left_center") || wp_blank_is_active_sidebar("line7_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line7_left_center") || wp_blank_is_active_sidebar("line7_right_center") || wp_blank_is_active_sidebar("line7_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line7_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div class="container">
			<div class="row">

				<?php
				if (!wp_blank_show_position_preview("line8_left", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line8_left")) { ?>
					<div class="<?php if (wp_blank_is_active_sidebar("line8_left_center") && wp_blank_is_active_sidebar("line8_right_center") && wp_blank_is_active_sidebar("line8_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_blank_is_active_sidebar("line8_left_center") && wp_blank_is_active_sidebar("line8_right_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12 contact_block left');
					} else if (wp_blank_is_active_sidebar("line8_left_center") && wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12 contact_block left');
					} else if (wp_blank_is_active_sidebar("line8_right_center") && wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12 contact_block left');
					} else if (wp_blank_is_active_sidebar("line8_left_center") || wp_blank_is_active_sidebar("line8_right_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_right_center") || wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_left_center") || wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_left_center") || wp_blank_is_active_sidebar("line8_right_center") || wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line8_left'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_blank_show_position_preview("line8_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line8_left_center")) { ?>
					<div class="<?php if (wp_blank_is_active_sidebar("line8_left") && wp_blank_is_active_sidebar("line8_right_center") && wp_blank_is_active_sidebar("line8_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_blank_is_active_sidebar("line8_left") && wp_blank_is_active_sidebar("line8_right_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12 map_block in_up');
					} else if (wp_blank_is_active_sidebar("line8_left") && wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12 map_block in_up');
					} else if (wp_blank_is_active_sidebar("line8_right_center") && wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12 map_block in_up');
					} else if (wp_blank_is_active_sidebar("line8_left") || wp_blank_is_active_sidebar("line8_right_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_right_center") || wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_left") || wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_left") || wp_blank_is_active_sidebar("line8_right_center") || wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line8_left_center'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_blank_show_position_preview("line8_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line8_right_center")) { ?>
					<div class="<?php if (wp_blank_is_active_sidebar("line8_left_center") && wp_blank_is_active_sidebar("line8_left") && wp_blank_is_active_sidebar("line8_right")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_blank_is_active_sidebar("line8_left_center") && wp_blank_is_active_sidebar("line8_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12 adress_block right');
					} else if (wp_blank_is_active_sidebar("line8_left_center") && wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12 adress_block right');
					} else if (wp_blank_is_active_sidebar("line8_left") && wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-4 col-sm-4 col-xs-12 adress_block right');
					} else if (wp_blank_is_active_sidebar("line8_left_center") || wp_blank_is_active_sidebar("line8_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_left") || wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_left_center") || wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_left_center") || wp_blank_is_active_sidebar("line8_left") || wp_blank_is_active_sidebar("line8_right")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line8_right_center'); ?>
					</div>
				<?php }
				; ?>

				<?php
				if (!wp_blank_show_position_preview("line8_right", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line8_right")) { ?>
					<div class="<?php if (wp_blank_is_active_sidebar("line8_left_center") && wp_blank_is_active_sidebar("line8_right_center") && wp_blank_is_active_sidebar("line8_left")) {
						echo 'col-md-3 col-sm-3 col-xs-12';
					} else if (wp_blank_is_active_sidebar("line8_left_center") && wp_blank_is_active_sidebar("line8_right_center")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_left_center") && wp_blank_is_active_sidebar("line8_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_left_center") && wp_blank_is_active_sidebar("line8_left")) {
						echo ('col-md-4 col-sm-4 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_left_center") || wp_blank_is_active_sidebar("line8_right_center")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_right_center") || wp_blank_is_active_sidebar("line8_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_left_center") || wp_blank_is_active_sidebar("line8_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else if (wp_blank_is_active_sidebar("line8_left_center") || wp_blank_is_active_sidebar("line8_right_center") || wp_blank_is_active_sidebar("line8_left")) {
						echo ('col-md-6 col-sm-6 col-xs-12');
					} else {
						echo ('col-lg-12');
					} ?>">
						<?php if (function_exists('dynamic_sidebar'))
							dynamic_sidebar('line8_right'); ?>
					</div>
				<?php }
				; ?>

			</div>
		</div>

		<div class="row">

			<?php
			if (!wp_blank_show_position_preview("line9_left", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line9_left")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line9_left_center") && wp_blank_is_active_sidebar("line9_right_center") && wp_blank_is_active_sidebar("line9_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line9_left_center") && wp_blank_is_active_sidebar("line9_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") && wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_right_center") && wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") || wp_blank_is_active_sidebar("line9_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_right_center") || wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") || wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") || wp_blank_is_active_sidebar("line9_right_center") || wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line9_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line9_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line9_left_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line9_left") && wp_blank_is_active_sidebar("line9_right_center") && wp_blank_is_active_sidebar("line9_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line9_left") && wp_blank_is_active_sidebar("line9_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left") && wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_right_center") && wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left") || wp_blank_is_active_sidebar("line9_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_right_center") || wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left") || wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left") || wp_blank_is_active_sidebar("line9_right_center") || wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line9_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line9_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line9_right_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line9_left_center") && wp_blank_is_active_sidebar("line9_left") && wp_blank_is_active_sidebar("line9_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line9_left_center") && wp_blank_is_active_sidebar("line9_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") && wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left") && wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") || wp_blank_is_active_sidebar("line9_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left") || wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") || wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") || wp_blank_is_active_sidebar("line9_left") || wp_blank_is_active_sidebar("line9_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line9_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("line9_right", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("line9_right")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("line9_left_center") && wp_blank_is_active_sidebar("line9_right_center") && wp_blank_is_active_sidebar("line9_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("line9_left_center") && wp_blank_is_active_sidebar("line9_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") && wp_blank_is_active_sidebar("line9_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") && wp_blank_is_active_sidebar("line9_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") || wp_blank_is_active_sidebar("line9_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_right_center") || wp_blank_is_active_sidebar("line9_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") || wp_blank_is_active_sidebar("line9_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("line9_left_center") || wp_blank_is_active_sidebar("line9_right_center") || wp_blank_is_active_sidebar("line9_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('line9_right'); ?>
				</div>
			<?php }
			; ?>

		</div>

		<div class="row">

			<?php
			if (!wp_blank_show_position_preview("bottom_left", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("bottom_left")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("bottom_left_center") && wp_blank_is_active_sidebar("bottom_right_center") && wp_blank_is_active_sidebar("bottom_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("bottom_left_center") && wp_blank_is_active_sidebar("bottom_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left_center") && wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_right_center") && wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left_center") || wp_blank_is_active_sidebar("bottom_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_right_center") || wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left_center") || wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left_center") || wp_blank_is_active_sidebar("bottom_right_center") || wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('bottom_left'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("bottom_left_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("bottom_left_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("bottom_left") && wp_blank_is_active_sidebar("bottom_right_center") && wp_blank_is_active_sidebar("bottom_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("bottom_left") && wp_blank_is_active_sidebar("bottom_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left") && wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_right_center") && wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left") || wp_blank_is_active_sidebar("bottom_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_right_center") || wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left") || wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left") || wp_blank_is_active_sidebar("bottom_right_center") || wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('bottom_left_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("bottom_right_center", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("bottom_right_center")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("bottom_left_center") && wp_blank_is_active_sidebar("bottom_left") && wp_blank_is_active_sidebar("bottom_right")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("bottom_left_center") && wp_blank_is_active_sidebar("bottom_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left_center") && wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left") && wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left_center") || wp_blank_is_active_sidebar("bottom_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left") || wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left_center") || wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left_center") || wp_blank_is_active_sidebar("bottom_left") || wp_blank_is_active_sidebar("bottom_right")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('bottom_right_center'); ?>
				</div>
			<?php }
			; ?>

			<?php
			if (!wp_blank_show_position_preview("bottom_right", 'col-md-3 col-sm-3 col-xs-12') && wp_blank_is_active_sidebar("bottom_right")) { ?>
				<div class="<?php if (wp_blank_is_active_sidebar("bottom_left_center") && wp_blank_is_active_sidebar("bottom_right_center") && wp_blank_is_active_sidebar("bottom_left")) {
					echo 'col-md-3 col-sm-3 col-xs-12';
				} else if (wp_blank_is_active_sidebar("bottom_left_center") && wp_blank_is_active_sidebar("bottom_right_center")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left_center") && wp_blank_is_active_sidebar("bottom_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_right_center") && wp_blank_is_active_sidebar("bottom_left")) {
					echo ('col-md-4 col-sm-4 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left_center") || wp_blank_is_active_sidebar("bottom_right_center")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_right_center") || wp_blank_is_active_sidebar("bottom_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left_center") || wp_blank_is_active_sidebar("bottom_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else if (wp_blank_is_active_sidebar("bottom_left_center") || wp_blank_is_active_sidebar("bottom_right_center") || wp_blank_is_active_sidebar("bottom_left")) {
					echo ('col-md-6 col-sm-6 col-xs-12');
				} else {
					echo ('col-lg-12');
				} ?>">
					<?php if (function_exists('dynamic_sidebar'))
						dynamic_sidebar('bottom_right'); ?>
				</div>
			<?php }
			; ?>

		</div>
	</div>

	<div class="container">
		<div class="row">
			<h3 class="my_widget_title_custom">
				<?php _e('recent news', 'wp-blank'); ?>
			</h3>

			<?php
			function display_latest_posts_with_details($atts)
			{
				$atts = shortcode_atts(
					array(
						'posts_per_page' => 3,
					),
					$atts,
					'latest_posts'
				);

				$args = array(
					'posts_per_page' => intval($atts['posts_per_page']),
					'post_status' => 'publish',
				);

				$query = new WP_Query($args);

				// Starting output buffering
				ob_start();

				if ($query->have_posts()): ?>
					<div class="wrapper-recent-news-blank">
						<?php while ($query->have_posts()):
							$query->the_post(); ?>
							<div class="single-recent-news-blank">
								<div class="wrapper-img-recent-news-blank">
									<?php if (has_post_thumbnail()): ?>
										<a href="<?php the_permalink(); ?>" class="post-thumbnail">
											<?php the_post_thumbnail('big'); ?>
										</a>
									<?php endif; ?>
								</div>

								<div class="wrapper-desc-recent-news-blank">

									<div class="post-categories">
										<?php the_category(' '); ?>
									</div>

									<h2 class="post-title">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h2>

									<div class="post-meta">
										<span class="date">
											<i class="fas fa-calendar"></i>
											<?php echo get_the_date(); ?>
										</span>
									</div>

									<div class="post-excerpt">
										<?php the_excerpt(); ?>
									</div>

								</div>
							</div>
						<?php endwhile; ?>
					</div>
					<?php
				else:
					echo '<p>not found</p>';
				endif;

				wp_reset_postdata();

				return ob_get_clean();
			}

			?>

			<?php echo display_latest_posts_with_details(array('posts_per_page' => 3)); ?>

		</div>
	</div>

</div><!-- #main -->

<?php
get_footer();
?>