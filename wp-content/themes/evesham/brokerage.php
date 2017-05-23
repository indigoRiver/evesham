<?php
/*
Template Name: Brokerage
*/
?>
<?php get_header(); ?>

<div class="vc_row wpb_row vc_row-fluid movesert" id="wpc_564dcdba55bcb">
	<div class="row_inner_wrapper clearfix" style="background-color: #fff;background-position: left top;background-repeat: no-repeat;background-size: inherit;padding-top: 40px;padding-bottom: 0px;">
		<div class="row_inner container clearfix">
			<div class="row_full_center_content clearfix">
				<div class="vc_col-sm-12 wpb_column vc_column_container">
					<div class="wpb_wrapper">
						<div class="custom-heading wpb_content_element">
							<h2 class="heading-title">Brokerage</h2><span class="heading-line primary"></span>
						</div>
						<div class="child-page-wrapper">
							<script type="text/javascript">
																											 jQuery(document).ready(function(){
																											 jQuery(".carousel-wrapper-564dcdba569a2").slick({
																											 slidesToShow: 4,
																											 slidesToScroll: 1,
																											 prevArrow: "<span class='carousel-prev'><i class='fa fa-angle-left'><\/i><\/span>",
																											 nextArrow: "<span class='carousel-next'><i class='fa fa-angle-right'><\/i><\/span>",
																											 responsive: [{
																											 breakpoint: 1024,
																											 settings: {
																											 slidesToShow: 4
																											 }
																											 },
																											 {
																											 breakpoint: 600,
																											 settings: {
																											 slidesToShow: 2
																											 }
																											 },
																											 {
																											 breakpoint: 480,
																											 settings: {
																											 slidesToShow: 1
																											 }
																											 }]
																											 });
																											 });
							</script>
							<div class="grid-wrapper grid-4-columns grid-row carousel-wrapper-564dcdba569a2" id="boatz"></div>
							<?php
							$args = array(
								'post_type' => 'brokerage'
							);
							$brokerage = get_posts($args);
							?>

									<?php
									foreach ($brokerage as $posts) {
										$postID = $posts->ID;
										?>
										<div class="products">
										<a href="<?php echo get_the_permalink($postID); ?>" title="<?php echo get_field('boat_name', $postID); ?>"><?php echo get_the_post_thumbnail($postID); ?></a>
										<h4><a href="<?php echo get_the_permalink($postID); ?>"><?php echo get_field('boat_name', $postID); ?></a></h4>
										<div class="price">
											Price: <?php echo get_field('price', $postID);?>
										</div>
										<p></p>
										<p><input class="button" name="Submit" onclick="window.open('<?php echo get_the_permalink($postID); ?>','_self');" style="float:right" type="submit" value="More"></p>
										</div>
										<?php
									}
									?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<footer class="entry-footer"></footer>
</article>
</main>
</div>
</div>
</div>
<div class="clear"></div>
<?php get_footer(); ?>
