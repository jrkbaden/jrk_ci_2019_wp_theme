</div>

<div id="footer" class="margin-top-xlarge">
	<div class="wrapper padding-topbottom-large link-white">
	
		<div class="row">
			<div class="col-sm padding-topbottom-large">
				<?php if ( is_active_sidebar( 'jrk-footer1' ) ) : dynamic_sidebar( 'jrk-footer1' ); endif; ?>
			</div>
			<div class="col-sm padding-topbottom-large">
				<?php if ( is_active_sidebar( 'jrk-footer2' ) ) : dynamic_sidebar( 'jrk-footer2' ); endif; ?>
			</div>
			<div class="col-sm padding-topbottom-large">
				<?php if ( is_active_sidebar( 'jrk-footer3' ) ) : dynamic_sidebar( 'jrk-footer3' ); endif; ?>
			</div>
			<div class="col-sm padding-topbottom-large">
				<?php if ( is_active_sidebar( 'jrk-footer4' ) ) : dynamic_sidebar( 'jrk-footer4' ); endif; ?>
			</div>
		</div>

	</div>
</div>

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script> 
jQuery(window).scroll(function (event) {
    scroll = jQuery(window).scrollTop();
    if(scroll > 10){
		jQuery("#header-fixed").addClass('scrolled');
	}else{
		jQuery("#header-fixed").removeClass('scrolled');
	}
});

jQuery('.menu-item-has-children').children('a').each(function(index){
  temp_text = jQuery(this).text();
  temp_link = jQuery(this).attr('href');
  jQuery(this).replaceWith('<div class="c2a-menu-sub-con"><div class="c2a-menu-sub-link"><a href="'+temp_link+'">'+temp_text+'</a></div><div class="c2a-menu-sub-icon"></div></div>');
});

jQuery(".c2a-menu").click(function() {
	jQuery(this).toggleClass('open');
	if(jQuery(this).hasClass('open')){
		jQuery(this).siblings('.c2a-menu-sub').show();
	}else{
		jQuery(this).siblings('.c2a-menu-sub').hide();
	}
	jQuery('.sprite-menu').toggleClass('show');
	jQuery('.sprite-close').toggleClass('show');
});

jQuery('.menu-item-has-children').children('.c2a-menu-sub-con').children('.c2a-menu-sub-icon').click(function() {
	jQuery(this).toggleClass('open');
	if(jQuery(this).hasClass('open')){
		jQuery(this).parent('.c2a-menu-sub-con').siblings('.sub-menu').show();
	}else{
		jQuery(this).parent('.c2a-menu-sub-con').siblings('.sub-menu').hide();
	}
});
</script>
    
</body>
</html>