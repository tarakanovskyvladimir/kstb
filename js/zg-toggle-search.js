/*
 * Show/Hide search box
 */

jQuery(document).ready(function() {
	
	jQuery(".search-top-bar #btn-search").hide();
	
	jQuery(".toggle-search").click(function() {
		jQuery(".wrapper-search-top-bar").toggle();
		jQuery(".wrapper-search-top-bar .txt-search").focus();
	});
	
	jQuery(".boton-menu-movil").click(function() {
		jQuery("#menu-movil").toggle();
	});
	
	if (jQuery(".credits-right").text().indexOf('ZeroGravity') == -1) {
		jQuery(".credits-right").html("<a href='http://galussothemes.com/wordpress-themes/zerogravity'>ZeroGravity</a> by GalussoThemes.com<br />Powered by <a href='http://wordpress.org/'>WordPress</a>");
	}
	
	// Mostrar/Ocultar botón 'Volver arriba'
	if (jQuery('.ir-arriba').length) { // Comprobamos que exista el div (se ha podido desactivar en las opciones)
		var refScroll = jQuery('#main');
		var refScroll_offset = refScroll.offset();
		
		jQuery(window).on('scroll', function() {
			if(jQuery(window).scrollTop() > refScroll_offset.top) { jQuery(".ir-arriba").show(500); } 
			else { jQuery(".ir-arriba").hide(); }
		});
	}
	jQuery("#menu-movil .page-item-12>.children .page_item_has_children>a").attr('href', 'javascript:void(0);');
	jQuery("#menu-movil .page-item-12>.children .children").each(function() {
		var parent_cat_text = jQuery(this).prev().text();
		jQuery(this).prepend('<li class="close_children">'+parent_cat_text+'</li>');
	});
	jQuery("#menu-movil .page-item-12>.children .page_item_has_children>a").click(function(event) {
		jQuery(this).next().addClass('children_visible');
	});
	jQuery(".close_children").click(function(event) {
		jQuery(this).parent().removeClass('children_visible');
	});
});