<!-- here we have our header -->
				<!-- header has flexbox on large screens only -->
				<div class="flex-l">
				<!-- our header background image -->
				<!-- header has 100% width on smaller screens, and 60% width on large screens. 50vh and 100vh height respectively -->
					<div class="w-100 w-60-l vh-50 vh-100-l cover bg-center" style="<?php nice_background('hero_image'); ?>">
					
					</div>
				<!-- our header content -->
				<!-- content block has 100% width on smaller screens and 40% width on large screens -->
					<div class="w-100 w-40-l ph3 ph4-l flex items-center justify-center relative">
						
						<!-- Putting all the elements in a div means that flexbox will only vertically center the div and not its child elements -->
						<div class="tc">
							<p class="f6 archivo mt0 mb5 mb0-l ttu tracked absolute-l top-0-l left-0-l w-100-l pt4">
							<?php
								// uses function we created in functions.php to format the date
								nice_date(get_field('date'));
							?>
								<span class="line mt4"></span>
							</p>
							
							<!-- standard wordpress data -->
							<h1 class="f2 f1-l archivo mt0 mb4 ttu lh-title">
								<?php the_title(); ?>
							</h1>

							<p class="f3 f1-l f1 tenor mt0 mb4 mb5-l ttu lh-title">
								<?php the_field('subhead'); ?>
							</p>

							<!-- specific to this component -->
							<p class="f4 cardo i measure center mv0">
								<?php the_sub_field('header_intro'); ?>
							</p>
						</div>	
					</div>
				</div>