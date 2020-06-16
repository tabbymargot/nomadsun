            <!-- this div contains the entire gallery -->
            <div class="container flex flex-wrap center ph4-l">
					<?php $images = get_sub_field('gallery'); ?>

					<?php foreach($images as $image) : ?>
						
						<!-- get image by id; specify full size -->
						<!-- adds custom field to attachments (images) which controls their width -->
						<div class="gallery-image ph3 mb4 <?php the_field( 'image_width', $image['id']) ?>">
							<!-- get each image by its id -->
							<?php echo wp_get_attachment_image( $image[id], 'full' ); ?>

							
							<!-- assign our caption to a variable -->
							<?php $caption = wp_get_attachment_caption( $image[id] ); ?>

							<!-- if caption is not empty, render it to page -->
							<?php if(!empty($caption)) : ?>
								<p class="caption archivo-regular f5 o-50 pt3 mv0">
									<?php echo $caption; ?>
								</p>

							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>