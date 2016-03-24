<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-bootstrap-blog
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<!-- Blog Search Well -->
<div class="well">
	<h4>Blog Search</h4>
	<form role="search" method="get" id="searchform" class="searchform" action="<?= bloginfo('url');?>">
	<div class="input-group">

		<input type="search" name="s" class="form-control">
                        <span class="input-group-btn">
                            <button  onclick="document.getElementById('searchform').submit();" class="btn btn-default" type="button">
								<span class="glyphicon glyphicon-search"></span>
							</button>
                        </span>
	</div>
	</form>
	<!-- /.input-group -->
</div>
<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
