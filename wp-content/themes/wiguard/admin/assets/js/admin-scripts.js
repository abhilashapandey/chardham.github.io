(function( $ ) {
	"use strict";
	jQuery( document ).ready(function() {
		$(".wiguard-post-featured-status").change(function(){
												 
			var postid = $(this).attr('data-post');
			var stat;
			if( $(this).is( ":checked" ) ) {
				stat = 1;
			}else{
				stat = 0;
			}
			$( "#post-featured-stat-msg-" + postid ).text( wiguard_admin_ajax_var.process + "..." );
			if( postid ){
				// Ajax call
				$.ajax({
					type: "post",
					url: ajaxurl,
					data: "action=wiguard-post-featured-active&nonce="+wiguard_admin_ajax_var.featured_nonce+"&featured-stat="+ stat +"&postid="+ postid,
					success: function(data){
						$( "#post-featured-stat-msg-"+ postid ).text( "" );
					}
				});
			}
		});
		$( document ).on( "click", ".export-custom-sidebar", function() {
			// Ajax call
			$.ajax({
				type: "post",
				url: ajaxurl,
				data: "action=wiguard-custom-sidebar-export&nonce="+wiguard_admin_ajax_var.sidebar_nounce,
				success: function( data ){
					
					$("<a />", {
						"download": "custom-sidebars.json",
						"href" : "data:application/json," + encodeURIComponent( data )
					}).appendTo("body").on( "click", function() {
						$(this).remove();
					})[0].click ();
				}
			});
			return false;
		});
		
		if( $( '#import-code-value' ).length ){
			$( document ).on( "click", "#redux-import", function( e ) {
				$( '#redux-import' ).attr( "disabled", "disabled" );
				if ( $( '#import-code-value' ).val() === "" && $( '#import-link-value' ).val() === "" ) {
					e.preventDefault();
					return false;
				}else{
					var json_data = '';
					var stat = '';
					if( $( '#import-code-value' ).val() != "" ){
						json_data = $( '#import-code-value' ).val();
						stat = 'data';
					}else if( $( '#import-link-value' ).val() != "" ){
						json_data = $( '#import-link-value' ).val()
						stat = 'url';
					}
					var post_data = { action: "wiguard-redux-themeopt-import", nonce: wiguard_admin_ajax_var.redux_themeopt_import, json_data : json_data, stat: stat };
					jQuery.post(ajaxurl, post_data, function( response ) {
						location.reload(true);
						$( '#redux-import' ).removeAttr( "disabled" );
					});
					
					return false;
				}
			});
		}

		$(document).find( '.widget-color-field' ).wpColorPicker({
			change: function(event, ui){ 
				$(this).parents("form").find('input[name="savewidget"]').removeAttr("disabled");					
			}
		});
		
		//Save customizer auto load option
		$( document ).on( "change", ".wiguard-customizer-option .switch-checkbox", function( e ) {
			var auto_load_stat = $(this).is(":checked") ? 1 : 0;
			$.ajax({
				type: "post",
				url: ajaxurl,
				data: "action=wiguard-customizer-auto-load&nonce="+wiguard_admin_ajax_var.customizer_nounce+'&auto_load='+auto_load_stat,
				success: function( data ){
					console.log(data);
				}
			});
			return false;
		});
	
	});
	
})(jQuery);