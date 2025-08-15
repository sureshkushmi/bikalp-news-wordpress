<div class="post-components">

			<div id="comments" class="comments-area">
				<div class="pratikriya mag-box-title the-global-title"><h3>प्रतिक्रिया राख्नुहोस्</h3></div>
				<div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="https://nepaltvonline.com/2025/08/156999/" data-numposts="10" data-width="100%" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=409264593067931&amp;container_width=770&amp;height=100&amp;href=https%3A%2F%2Fnepaltvonline.com%2F2025%2F08%2F156999%2F&amp;locale=en_US&amp;numposts=10&amp;sdk=joey&amp;version=v9.0&amp;width=" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 201px;"><iframe name="fe0fa2afd1b7b05e0" width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v9.0/plugins/comments.php?app_id=409264593067931&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df736e66641c926b8c%26domain%3Dnepaltvonline.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fnepaltvonline.com%252Ff75921259d994b54d%26relation%3Dparent.parent&amp;container_width=770&amp;height=100&amp;href=https%3A%2F%2Fnepaltvonline.com%2F2025%2F08%2F156999%2F&amp;locale=en_US&amp;numposts=10&amp;sdk=joey&amp;version=v9.0&amp;width=" style="border: none; visibility: visible; width: 100%; height: 201px;" class=""></iframe></span></div>	
			</div><!-- .comments-area -->

				<div id="related-posts" class="container-wrapper">
					<div class="mag-box-title the-global-title">
						<h3>सम्बन्धित खबर</h3>
					</div>

					<div class="related-posts-list">
						<?php
						$categories = wp_get_post_categories(get_the_ID());
						$related = new WP_Query(array(
							'category__in'   => $categories,
							'post__not_in'   => array(get_the_ID()), // exclude current post
							'posts_per_page' => 6,
							'orderby'        => 'date',
						));

						if($related->have_posts()):
							while($related->have_posts()): $related->the_post(); ?>
								<div class="related-item tie-standard">
									<a aria-label="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>" class="post-thumb">
										<?php 
										if(has_post_thumbnail()){
											the_post_thumbnail('jannah-image-large', array(
												'class'=>'attachment-jannah-image-large size-jannah-image-large wp-post-image',
												'alt'=>get_the_title()
											));
										} else {
											echo '<img src="'.get_template_directory_uri().'/images/default-large.jpg" alt="'.get_the_title().'">';
										}
										?>
									</a>
									<h3 class="post-title"><a href="<?php the_permalink(); ?>">
									<?php echo wp_trim_words( get_the_title(), 3, '...' ); ?></a></h3>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						endif;
						?>
					</div><!-- .related-posts-list -->
				</div><!-- #related-posts -->		
	</div>