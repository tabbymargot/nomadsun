	

	
	
	<section class="hero min-vh-100 cover bg-center flex items-center justify-center" style="
		<?php nice_background('hero_image'); ?>">
		<div class="hero-content white tc">
			<h1 class="hero-heading archivo b mt0 mb3 ttu"><?php the_title(); ?></h1>

			<?php if( get_field('subhead') ): ?>
				<p class="hero-subhead tenor mb6 mt0 ttu"><?php the_field('subhead'); ?></p>
			<?php endif; ?>

			<?php if( get_field('date') ): ?>
				<p class="f6 archivo date ma0 ttu tracked">
					<?php
					// uses function we created in functions.php to format the date
					nice_date(get_field('date'));
					?>
				</p>
			<?php endif; ?>
		</div>
	</section>