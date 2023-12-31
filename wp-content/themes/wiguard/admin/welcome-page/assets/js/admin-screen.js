/*
 * Admin Screen
 * 
 */

( function( $ ) {
	"use strict";
	
	var general_arr = [];
	var post_arr = []; // removed default value ['wp-things']
	var page_arr = [];
	var progres_range = 0;
	var progress_percent = 0;
	var plugins_arr = [];
	var plugins_str = '';
	var menu_stat = 0;
	var total_pages = 0;
	var page_txt_arr = [];
	var general_txt_arr = [];
	var media_parts = 0;
	
	$(document).on( 'click', '.tgm-custom-plugin-install', function(e) {
		e.preventDefault();
		
		var parent_div = $(this).parent(".zozo-col-3");
		
		if( $(".install-plugins-parent > .bulk-action-active").length ){
			parent_div.addClass("install-on-process");

			$(".install-plugins-parent > .bulk-action-active").each(function( index ) {
				if( $(this).attr("data-id") ){
					plugins_arr.push( $(this).attr("data-id") );
				}
			});
			plugins_str = plugins_arr ? plugins_arr.join() : '';
			
			//Plugin install and activation process
			var plugins = wiguard_admin_ajax_var.wiguard_plugins;

			wiguard_plugin_install( 0, plugins, parent_div );
			
		}//if any plugin selected
		
	});
	
	function wiguard_plugin_install( index, plugins, parent_div ){
		var max_len = plugins_arr.length;
		if( max_len > index ){
			console.log('downloading ' + plugins_arr[index] + '...');
			$.ajax({
				type: 'GET',
				url: ajaxurl,
				data: {
					'action' : 'wiguard_tgm_install',
					'plugin' : plugins_arr[index],
					'tgmpa-install' : 'install-plugin',
					'wiguard_tgmpa_nounce' : wiguard_admin_ajax_var.wiguard_tgmpa_nounce,
					'plugins' : plugins
				},
				success: function(response){
					index++;
					wiguard_plugin_install( index, plugins, parent_div );
				},
				error: function(response, errorThrown){
					parent_div.removeClass("install-on-process");
					window.location = location.href;
				}
			});
		}else{
			window.location = wiguard_admin_ajax_var.wiguard_installation_url + "&wiguard_plugin_actv="+ plugins_str;
		}
	}	
	
	$(document).on( 'click', '.plugin-bulk-action-trigger', function(e) {
		e.preventDefault();
		$(this).parents(".install-plugin-wrap").toggleClass("bulk-action-active");
	});
	
	$(document).on( 'click', '.plugin-bulk-action-all-trigger:not(.active)', function(e) {
		e.preventDefault();
		$(".install-plugins-parent > .install-plugin-wrap").each(function( index ) {
			$(this).addClass("bulk-action-active");
		});
		$(this).toggleClass("active");
	});
	$(document).on( 'click', '.plugin-bulk-action-all-trigger.active', function(e) {
		e.preventDefault();
		$(".install-plugins-parent > .install-plugin-wrap").each(function( index ) {
			$(this).removeClass("bulk-action-active");
		});
		$(this).toggleClass("active");
	});
	
	$(document).on( 'click', '.theme-demo-install-checkall', function(e) {
		e.preventDefault();
		var uncheck_stat = false;
		uncheck_stat = $(this).hasClass("theme-demo-install-uncheckall") ? true : false;
		$(this).toggleClass("theme-demo-install-uncheckall");
		
		var chk_parent = $(this).parents(".theme-demo-install-parts");
		$( chk_parent ).find('input[type="checkbox"]').each(function( index ) {
			if( uncheck_stat ){
				$(this).removeAttr( "checked" );
			}else{
				$(this).attr( "checked", "checked" );
			}
		});

	});

	$(document).on( 'click', '.theme-demo-install-custom', function(e) {
		e.preventDefault();
		$(this).next(".theme-demo-install-parts").slideToggle(500);
	});
	
	$(document).on( 'click', '.button-uninstall-demo', function(e) {
		
		var current	= this;
		
		$.confirm({
			theme: 'supervan',
			title: false,
			content: wiguard_admin_ajax_var.unins_confirm,
			confirmButtonClass: 'btn-success',
			cancelButtonClass: 'btn-danger',
			confirmButton: wiguard_admin_ajax_var.yes,
   			cancelButton: wiguard_admin_ajax_var.no,
			confirm: function(){
				
				var choosed_demo = $(this).data('demo-id');
				var loading_wrap = $(current).parents('.demo-inner').find('.zozo-demo-import-loader');
				$(current).parents('.zozothemes-demo-item').find('.installation-progress').fadeIn(300);
				var progress = $(current).parents('.zozothemes-demo-item').find('.installation-progress .progress');
				var progress_text = $(current).parents('.zozothemes-demo-item').find('.installation-progress p');
				progress.css('width', '0%');
				progress_text.text(wiguard_admin_ajax_var.uninstalling);
				loading_wrap.show();
				
				//Delete Attachments
				$.ajax({
					type: 'POST',
					url: ajaxurl,
					data: {
						action: 'wiguard_uninstall',
						nounce:  wiguard_admin_ajax_var.wiguard_demo_nounce
					},
					success: function(response){
						if( response && response.indexOf('success') == -1 ) {
							loading_wrap.hide();
							alert(response);
						}else{
							$('.zozothemes-demo-item').removeClass('demo-actived demo-inactive').addClass('demo-active');
							loading_wrap.hide();
							progress_text.text(wiguard_admin_ajax_var.uninstalled);
							window.location = location.href;
						}
					},
					error: function(response, errorThrown){
						loading_wrap.hide();
						alert(wiguard_admin_ajax_var.unins_pbm);
					}
				});
			}
		});

		return false;
	});

	var zozo_admin_screen = {

		install_demos: function() {
			$(document).on( 'click', '.button-install-demo', function(e) {
				
				e.preventDefault();
				var current			= this;
				
				var progress = $(current).parents('.zozothemes-demo-item').find('.installation-progress .progress');
				var progress_text = $(current).parents('.zozothemes-demo-item').find('.installation-progress p');
				var choosed_demo 	= $(this).data('demo-id');
				var loading_wrap 	= $('.zozo-preview-' + choosed_demo);
				var requirement 	= $(this).parents('.install-plugin-inner').find('.theme-requirements').data('requirements');
				var revslider = $(this).data('revslider');
				media_parts = $(this).data('media');
				
				var inner_wrap = $(loading_wrap).parent(".install-plugin-inner");
				$(inner_wrap).find(".theme-demo-install-parts").slideUp();
				var inner_wrap_offset = $(inner_wrap).offset();
				$( 'html,body' ).animate({ scrollTop: inner_wrap_offset.top - 50 }, 300);	
				
				var empty_stat = 0;
				$( "#demo-install-parts-" + choosed_demo ).find('input[type="checkbox"]').each(function( index ) {
					if( $(this). prop("checked") == true ){
						empty_stat = 1;
					}
				});
				
				if( !empty_stat ){
					$( "#demo-install-parts-" + choosed_demo ).find('input[type="checkbox"]').each(function( index ) {
						$(this).attr( "checked", "checked" );
					});
				}
				
				$( "#demo-install-parts-" + choosed_demo + " .general-install-parts-list"  ).find('input[type="checkbox"]').each(function( index ) {
					if( $(this).prop("checked") == true ){
						general_arr.push(this.value);
						general_txt_arr.push( $(this).data("text") );
					}
				});

				$( "#demo-install-parts-" + choosed_demo + " .page-install-parts-list"  ).find('input[type="checkbox"]').each(function( index ) {
					if( $(this). prop("checked") == true ){
						page_arr.push(this.value);
						page_txt_arr.push( $(this).data("text") );
					}
					total_pages++;
				});
				
				if( page_arr.length == total_pages && page_arr.length != 0 ) menu_stat = 1;
				
				var general_arr_stat = general_arr.length ? general_arr.join() : '';
				var post_arr_stat = post_arr.length ? post_arr.join() : '';
				var page_arr_stat = page_arr.length ? page_arr.join() : '';
				
				var req_plugins_stat = $("#wiguard-required-plugins-stat").val();
				var proceed_btn = req_plugins_stat == '1' ? wiguard_admin_ajax_var.proceed : '';
				if( req_plugins_stat != '1' ){
					requirement = '<h2 class="wiguard-blink">You must install and activate required plugins.</h2>'+requirement;
				}
				
				if( choosed_demo !== null ) {
					
					$.confirm({
						theme: 'supervan',
						title: false,
						content: requirement,
						confirmButtonClass: 'btn-success',
    					cancelButtonClass: 'btn-danger',
						confirmButton: proceed_btn,
   						cancelButton: wiguard_admin_ajax_var.cancel,
						confirm: function(){

							if( req_plugins_stat == '1' ){
								
								$(current).parents('.zozothemes-demo-item').find('.installation-progress').fadeIn(300);
								progress.css('opacity', '1');
								
								progress_percent = general_arr.length + post_arr.length + page_arr.length;
								progress_percent = progress_percent ? 100/ ( progress_percent * 2 ) : 1;
								
								loading_wrap.show();
								$(current).parents('.zozothemes-demo-item').find('.installation-progress p').text(wiguard_admin_ajax_var.downloading);
								$('.zozo-importer-notice').hide();
							
								/*Demo Files Download*/
								wiguard_check_file_access_permission( choosed_demo, revslider, progress, progress_text );
								
							}
							
						},
						cancel: function(){}
					});
					
				}
				
			});
		},
		
	};
	
	function wiguard_progress_update( progress ){
		progres_range = Number( progres_range ) + Number( progress_percent );
		progres_range = progres_range >= 100 ? 100 : progres_range;
		progress.children(".progress-bar").css("width", progres_range + "%").attr("aria-valuenow", progres_range);
		var p_txt = progress.prev('p').text();
		progress.prev('p').text( p_txt +' '+ parseInt( progres_range ) +'%' );
	}
	
	function wiguard_progress_end( choosed_demo, progress ){
		$('.zozo-preview-' + choosed_demo).hide();
		progress.children(".progress-bar").removeClass("progress-bar-striped");
		$.confirm({
			theme: 'supervan',
			title: false,
			content: 'File access permission issue. Please check your ftp permission and try to install again.',
			confirmButtonClass: 'btn-success',
			cancelButtonClass: 'btn-danger',
			confirmButton: 'Ok',
			cancelButton: 'Close',
			confirm: function(){ window.location = wiguard_admin_ajax_var.wiguard_installation_url; }
		});
	}
	
	function wiguard_progress_details( progress, msg, stat ){
		var stat_class = stat == 'failed' ? ' class="failed-import"' : '';
		var parent_prog = progress.parents( ".install-plugin-inner" ).find(".zozotheme-screenshot");
		if( $( parent_prog ).find(".installation-progress-details").length ){
			$( parent_prog ).find(".installation-progress-details").append('<li'+ stat_class +'>'+ msg +'</li>');
		}else{
			$(parent_prog).append('<ul class="installation-progress-details"><li'+ stat_class +'>'+ msg +'</li></ul>');
		}	
		$( parent_prog ).find(".installation-progress-details").animate({ scrollTop: $( parent_prog ).find(".installation-progress-details").prop("scrollHeight")}, 300);		
	}
	
	function wiguard_check_file_access_permission( choosed_demo, revslider, progress, progress_text ){
		$.ajax({
			type: 'post',
			dataType: 'json',
			url: ajaxurl,
			data: {
				action: 'wiguard_chk_prmsn',
				nounce:  wiguard_admin_ajax_var.wiguard_demo_nounce
			},
			success: function(response){
				if( response['msg'] == 'failed' ) {
					progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], '' );
					wiguard_progress_end( choosed_demo, progress );					
				}else{
					wiguard_general_file_download_function( 0, choosed_demo, revslider, progress, progress_text );
				}
			},
			error: function(response, errorThrown){
				progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], 'failed' );
				wiguard_progress_end( choosed_demo, progress );
			}
		});//ajax end		
	}
	
	function wiguard_general_file_download_function( index, choosed_demo, revslider, progress, progress_text ){
		var max_len = general_arr.length;

		if( max_len > index ){
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: ajaxurl,
				data: {
					action: 'wiguard_download_parts',
					nounce:  wiguard_admin_ajax_var.wiguard_demo_nounce,
					demo_type: choosed_demo,
					revslider: revslider,
					key: general_arr[index],
					menu_stat: menu_stat,
					label: general_txt_arr[index],
					media_parts: media_parts
				},
				success: function(response){
					if( response['msg'] == 'failed' ) {
						progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], 'failed' );
					}else{
						progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], '' );
						index += 1;
					}
					if( max_len > index ){
						wiguard_general_file_download_function( index, choosed_demo, revslider, progress, progress_text );
					}else{
						wiguard_page_file_download_function( 0, choosed_demo, revslider, progress, progress_text );
					}
					wiguard_progress_update( progress );
				},
				error: function(response, errorThrown){
					wiguard_progress_details( progress, response['msg'], 'failed' );
					index += 1;
					if( max_len > index ){
						wiguard_general_file_download_function( index, choosed_demo, revslider, progress, progress_text );
					}else{
						wiguard_page_file_download_function( 0, choosed_demo, revslider, progress, progress_text );
					}
					wiguard_progress_update( progress );
				}
			});//ajax end
		}
		
		if( max_len == 0 ){
			wiguard_page_file_download_function( 0, choosed_demo, revslider, progress, progress_text );
		}
		
	}
	
	function wiguard_page_file_download_function( index, choosed_demo, revslider, progress, progress_text ){
		var max_len = page_arr.length;
		if( max_len > index ){
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: ajaxurl,
				data: {
					action: 'wiguard_download_parts_xml',
					nounce:  wiguard_admin_ajax_var.wiguard_demo_nounce,
					demo_type: choosed_demo,
					revslider: revslider,
					key: page_arr[index],
					part: 'pages',
					label: page_txt_arr[index]
				},
				success: function(response){
					if(  response['msg'] == 'failed' ) {
						progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], 'failed' );
					}else{
						progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], '' );
						index += 1;
					}
					if( max_len > index ){
						wiguard_page_file_download_function( index, choosed_demo, revslider, progress, progress_text );
					}else{
						wiguard_general_file_install_function( 0, choosed_demo, revslider, progress, progress_text );
					}
					wiguard_progress_update( progress );
				},
				error: function(response, errorThrown){
					wiguard_progress_details( progress, response['msg'], 'failed' );
					index += 1;
					if( max_len > index ){
						wiguard_page_file_download_function( index, choosed_demo, revslider, progress, progress_text );
					}else{
						wiguard_general_file_install_function( 0, choosed_demo, revslider, progress, progress_text );
					}
					wiguard_progress_update( progress );
				}
			});//ajax end
		}
		
		if( max_len == 0 ){
			wiguard_general_file_install_function( index, choosed_demo, revslider, progress, progress_text );
		}
		
	}
	
	function wiguard_general_media_install_function( index, choosed_demo, revslider, progress, progress_text, parent_index ){
		var max_len = media_parts;
		if( max_len > index ){
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: ajaxurl,
				data: {
					action: 'wiguard_install_parts',
					nounce:  wiguard_admin_ajax_var.wiguard_demo_nounce,
					demo_type: choosed_demo,
					key: 'media',
					inner_key: 'media-' + parseInt( index + 1 ),
					inner_index: parseInt( index + 1 ),
					label: general_txt_arr[parent_index]
				},
				success: function(response){
					if(  response['msg'] == 'failed' ) {
						progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], 'failed' );
					}else{
						progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], '' );
					}
					index += 1;
					if( max_len > index ){
						wiguard_general_media_install_function( index, choosed_demo, revslider, progress, progress_text, parent_index );
					}else{
						wiguard_progress_update( progress );
						parent_index += 1;
						wiguard_page_file_install_function( 0, choosed_demo, revslider, progress, progress_text );
					}
				},
				error: function(response, errorThrown){
					var msg = general_arr[index] + ' not imported';
					wiguard_progress_details( progress, msg, 'failed' );
					index += 1;
					if( max_len > index ){
						wiguard_general_media_install_function( index, choosed_demo, revslider, progress, progress_text, parent_index );
					}else{
						wiguard_progress_update( progress );
						parent_index += 1;
						wiguard_page_file_install_function( 0, choosed_demo, revslider, progress, progress_text );
					}
				}
			});//ajax end
		}
	}

	function wiguard_page_file_install_function( index, choosed_demo, revslider, progress, progress_text ){
		var parent_index = 0;
		var max_len = page_arr.length;
		if( max_len > index ){
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: ajaxurl,
				data: {
					action: 'wiguard_install_parts_xml',
					nounce:  wiguard_admin_ajax_var.wiguard_demo_nounce,
					key: page_arr[index],
					part: 'pages',
					label: page_txt_arr[index]
				},
				success: function(response){
					if(  response.status == 'failed' ) {
						progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], 'failed' );
					}else{
						progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], '' );
					}
					index += 1;
					if( max_len > index ){
						wiguard_page_file_install_function( index, choosed_demo, revslider, progress, progress_text );
					}else{
						parent_index = media_parts ? 1 : 0;
						wiguard_general_file_install_function( parent_index, choosed_demo, revslider, progress, progress_text );
					}
					wiguard_progress_update( progress );
				},
				error: function(response, errorThrown){
					var msg = page_arr[index] + ' not imported';
					wiguard_progress_details( progress, msg, 'failed' );
					index += 1;
					if( max_len > index ){
						wiguard_page_file_install_function( index, choosed_demo, revslider, progress, progress_text );
					}else{
						parent_index = media_parts ? 1 : 0;
						wiguard_general_file_install_function( parent_index, choosed_demo, revslider, progress, progress_text );
					}
					wiguard_progress_update( progress );
				}
			});//ajax end
		}
		
		if( max_len == 0 ){
			parent_index = media_parts ? 1 : 0;
			wiguard_general_file_install_function( parent_index, choosed_demo, revslider, progress, progress_text );
		}
		
	}

	function wiguard_general_file_install_function( index, choosed_demo, revslider, progress, progress_text ){
		var max_len = general_arr.length;
		if( max_len > index ){
		
			if( general_arr[index] == 'media' ){
				wiguard_general_media_install_function( 0, choosed_demo, revslider, progress, progress_text, index );
			}else{
		
				$.ajax({
					type: 'post',
					dataType: 'json',
					url: ajaxurl,
					data: {
						action: 'wiguard_install_parts',
						nounce:  wiguard_admin_ajax_var.wiguard_demo_nounce,
						demo_type: choosed_demo,
						revslider: revslider,
						key: general_arr[index],
						menu_stat: menu_stat,
						label: general_txt_arr[index]
					},
					success: function(response){
						if(  response['msg'] == 'failed' ) {
							progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], 'failed' );
						}else{
							progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], '' );
						}
						index += 1;
						if( max_len > index ){
							wiguard_general_file_install_function( index, choosed_demo, revslider, progress, progress_text );
						}else{
							wiguard_import_final( choosed_demo, progress, progress_text );
						}
						wiguard_progress_update( progress );
					},
					error: function(response, errorThrown){
						var msg = general_arr[index] + ' not imported';
						wiguard_progress_details( progress, msg, 'failed' );
						index += 1;
						if( max_len > index ){
							wiguard_general_file_install_function( index, choosed_demo, revslider, progress, progress_text );
						}else{
							wiguard_import_final( choosed_demo, progress, progress_text );
						}
						wiguard_progress_update( progress );
					}
				});//ajax end
				
			}//not media
		}
		
		if( max_len == 0 ){
			wiguard_import_final( choosed_demo, progress, progress_text );
		}
		
	}	
	
	function wiguard_import_final( choosed_demo, progress, progress_text ){
		$.ajax({
			type: 'post',
			dataType: 'json',
			url: ajaxurl,
			data: {
				action: 'wiguard_import_set_default',
				nounce:  wiguard_admin_ajax_var.wiguard_demo_nounce,
				demo_type: choosed_demo
			},
			success: function(response){
				progress_text.text(response['msg']); wiguard_progress_details( progress, response['msg'], '' );
				$('.zozo-preview-' + choosed_demo).hide();
				progress.children(".progress-bar").removeClass("progress-bar-striped");

				var none_imported_things = '';
				var sucs_content = '';
				
				$("ul.installation-progress-details").children("li.failed-import").each(function( index ) {
					none_imported_things += '<li>'+ $(this).text() +'</li>';
				});
				
				if( none_imported_things != '' ){
					sucs_content += '<h3>Non imported things</h3><ul>'+ none_imported_things +'</ul>';
				}
				
				sucs_content += '<h2>Regenerate Thumbnails</h2><p>This demo was imported well. So for exact image cropping use Regenerate Thumbnails plugin once. Are you sure want to regenerate thumbnails now?</p>';
				
				$.confirm({
					theme: 'supervan',
					title: false,
					content: sucs_content,
					confirmButtonClass: 'btn-success',
					cancelButtonClass: 'btn-danger',
					confirmButton: wiguard_admin_ajax_var.yes,
					cancelButton: wiguard_admin_ajax_var.no,
					confirm: function(){
						var win = window.open($("a.regenerate-thumbnails-plugin-url").attr("href"), '_blank');
						if (win) {
							win.focus();
						}
						window.location = wiguard_admin_ajax_var.wiguard_installation_url;
					},
					cancel: function(){
						progress.parents(".install-plugin-wrap.theme").find("a.button-install-demo").attr("disabled", "disabled");
					}
				});

			},
			error: function(response, errorThrown){
				$('.zozo-preview-' + choosed_demo).hide();
				progress.children(".progress-bar").removeClass("progress-bar-striped");
				window.location = wiguard_admin_ajax_var.wiguard_installation_url;
			}
		});//ajax end
	}
	
	$(document).ready(function(){
		zozo_admin_screen.install_demos();
	});
	
})( jQuery );