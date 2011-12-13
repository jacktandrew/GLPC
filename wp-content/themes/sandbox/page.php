<?php get_header() ?>
	<div id="container">
		<div id="content">
			<div id="two_column_wrapper">
<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>

<?php edit_post_link( __( 'Edit', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>

				</div>
			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
			</div><!-- #two_column_wrapper -->
			
			<div id="third_column">
			  <div id="black_box"><br/><br/><br/><br/><br/><br/></div>
			  <img id="scroll" src="wp-content/uploads/2011/12/scroll.png" />
			</div>
		</div><!-- #content -->
	</div><!-- #container -->
  </div>  
<?php get_footer() ?>