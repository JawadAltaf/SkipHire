"use strict";
jQuery(document).on('ready', function() {
	/* MOBILE MENU*/
	function collapseMenu(){
		jQuery('.wt-navigation ul li.menu-item-has-children, .wt-navdashboard ul li.menu-item-has-children, .wt-navigation ul li.menu-item-has-mega-menu').prepend('<span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>');
		jQuery('.wt-navigation ul li.menu-item-has-children span, .wt-navigation ul li.menu-item-has-mega-menu span').on('click', function() {
			jQuery(this).parent('li').toggleClass('wt-open');
			jQuery(this).next().next().slideToggle(300);
		});
		jQuery('.wt-navdashboard ul li.menu-item-has-children').on('click', function(){
			jQuery(this).toggleClass('wt-open');
			jQuery(this).find('.sub-menu').slideToggle(300);
		});
	}
	collapseMenu();
	
	/* PROGRESS BAR */
	if(jQuery('#wt-ourskill').length > 0){
		var _wt_ourskill = jQuery('#wt-ourskill');
		_wt_ourskill.appear(function () {
			jQuery('.skill-holder').each(function () {
				jQuery(this).find('.skill-bar').animate({
					width: jQuery(this).attr('data-percent')
				}, 2500);
			});
		});
	}
	
	/* Google Map */
	if(jQuery('#wt-locationmap').length > 0){
		var _wt_locationmap = jQuery('#wt-locationmap');
		_wt_locationmap.gmap3({
			marker: {
				address: '1600 Elizabeth St, Melbourne, Victoria, Australia',
				options: {
					title: 'Robert Frost Elementary School'
				}
			},
			map: {
				options: {
					zoom: 16,
					scrollwheel: false,
					disableDoubleClickZoom: true,
				}
			}
		});
	}
	/*OPEN CLOSE */
	jQuery('#wt-loginbtn, .wt-loginheader a').on('click', function(event){
		event.preventDefault();
		jQuery('.wt-loginarea .wt-loginformhold').slideToggle();
	});
	/*OPEN CLOSE */
	jQuery('.wt-dropdown').on('click', function(event){
		event.preventDefault();
		jQuery('.wt-radioholder').slideToggle();
	});
	/* BANNER VIDEO */
	jQuery("a[data-rel]").each(function () {
		jQuery(this).attr("rel", jQuery(this).data("rel"));
	});
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'normal',
		theme: 'dark_square',
		slideshow: 3000,
		autoplay_slideshow: false,	
		social_tools: false
	});
	/* DROPDOWN RADIO */
	jQuery('input:radio[name="searchtype"]').on('change',
	    function(){
	        var _type = jQuery(this).data('title');
	        jQuery('.selected-search-type').html(_type);
	    }
    );
    /* COUNTER */
	try {
		var _wt_statistics = jQuery('#wt-statistics');
		_wt_statistics.appear(function () {
			var _wt_statistics = jQuery('.wt-statisticcontent h3');
			_wt_statistics.countTo({
				formatter: function (value, options) {
					return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
				}
			});
		});
	} catch (err) {}

	/* OUR PROFESSIONALS FILTERABLE*/
	var $container = jQuery('.wt-teamfilter');
	var $optionSets = jQuery('.option-set');
	var $optionLinks = $optionSets.find('a');
	function doIsotopeFilter() {
		if (jQuery().isotope) {
			var isotopeFilter = '';
			$optionLinks.each(function () {
				var selector = jQuery(this).attr('data-filter');
				var link = window.location.href;
				var firstIndex = link.indexOf('filter=');
				if (firstIndex > 0) {
					var id = link.substring(firstIndex + 7, link.length);
					if ('.' + id == selector) {
						isotopeFilter = '.' + id;
					}
				}
			});
			//$(window).load(function () {
				$container.isotope({
					//itemSelector: '.mb-productitem',
					filter: isotopeFilter
				});
			//});
			$optionLinks.each(function () {
				var $this = jQuery(this);
				var selector = $this.attr('data-filter');
				if (selector == isotopeFilter) {
					if (!$this.hasClass('mb-active')) {
						var $optionSet = $this.parents('.option-set');
						$optionSet.find('.mb-active').removeClass('mb-active');
						$this.addClass('mb-active');
					}
				}
			});
			$optionLinks.on('click', function () {
				var $this = jQuery(this);
				var selector = $this.attr('data-filter');
				$container.isotope({itemSelector: '.mb-project', filter: selector});
				if (!$this.hasClass('mb-active')) {
					var $optionSet = $this.parents('.option-set');
					$optionSet.find('.mb-active').removeClass('mb-active');
					$this.addClass('mb-active');
				}
				return false;
			});
		}
	}
	var isotopeTimer = window.setTimeout(function () {
		window.clearTimeout(isotopeTimer);
		doIsotopeFilter();
	}, 1000);

	/* DIRECTION AWARE HOVER*/
	jQuery(function () {
		jQuery('.wt-teamholder').each(function () {
			 jQuery(this).hoverdir();
		});
	});
	/* Brand Slider */
	var _wt_brandslider = jQuery("#wt-brandslider")
	_wt_brandslider.owlCarousel({
		item: 6,
		loop:false,
		nav:false,
		margin: 0,
		autoplay:false,
		responsiveClass:true,
		responsive:{
			0:{items:1,},
			481:{items:2,},
			768:{items:3,},
			991:{items:4,},
			992:{items:5,}
		}
	});
		$('#accordion').collapse({
	  toggle: false	
	})

	/* Team Slider */
	var _wt_categoriesslider = jQuery("#wt-categoriesslider")
	_wt_categoriesslider.owlCarousel({
		item: 6,
		loop:true,
		nav:false,
		margin: 0,
		autoplay:false,
		center: true,
		responsiveClass:true,
		responsive:{
			0:{items:1,},
			481:{items:2,},
			768:{items:3,},
			1440:{items:4,},
			1760:{items:6,}
		}
	});
	/* THEME VERTICAL SCROLLBAR */
	if(jQuery('.wt-verticalscrollbar').length > 0){
		var _wt_verticalscrollbar = jQuery('.wt-verticalscrollbar');
		_wt_verticalscrollbar.mCustomScrollbar({
			axis:"y",
		});
	}
	if(jQuery('.wt-horizontalthemescrollbar').length > 0){
		var _wt_horizontalthemescrollbar = jQuery('.wt-horizontalthemescrollbar');
		_wt_horizontalthemescrollbar.mCustomScrollbar({
			axis:"x",
			advanced:{autoExpandHorizontalScroll:true},
		});
	}
	/* TIPSO TOOLTIP */
	jQuery('.template-content').tipso({
			speed             : 400,        
			background        : '#fff',
			titleBackground   : '#3498db',
			color             : '#999999',
			titleColor        : '#ffffff',
			width             : 105,
			tooltipHover      : true,
			size :50,
			offsetY : 0,
			position: 'top-right'
		});

		jQuery('.hover-tipso-tooltip').tipso({
	    tooltipHover: true,
	});
	/* CONSULTATION FEE SLIDER */
	function ageRangeslider(){
		jQuery("#wt-productrangeslider").slider({
			range: true,
			min: 0,
			max: 150,
			values: [ 10, 110 ],
			slide: function( event, ui ) {
				jQuery( "#wt-consultationfeeamount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		});
		jQuery( "#wt-consultationfeeamount" ).val( "$" + jQuery("#wt-productrangeslider").slider( "values", 0 ) + " - $" + jQuery("#wt-productrangeslider").slider( "values", 1 ));
	}
	if( jQuery("#wt-productrangeslider").length > 0 ){
		ageRangeslider();
	}
	/* SHORT DESCRIPTION */
	var _readmore = jQuery('.wt-userdetails .wt-description');
	_readmore.readmore({
		speed: 500,
		collapsedHeight: 230,
		moreLink: '<a class="wt-btntext" href="#">Read More</a>',
		lessLink: '<a class="wt-btntext" href="#">Less</a>',
	});
	/*  PROGRESS BAR */
	try {
		$('#wt-ourskill').appear(function () {
			jQuery('.wt-skillholder').each(function () {
				jQuery(this).find('.wt-skillbar').animate({
					width: jQuery(this).attr('data-percent')
				}, 2500);
			});
		});
	} catch (err) {}
	/* PRELOADER*/
	jQuery(window).on('load', function() {
		jQuery(".preloader-outer").delay(200).fadeOut();
		jQuery(".loader").delay(200).fadeOut("slow");
	});
	/*OPEN CLOSE */
	jQuery('.wt-projectdropdown').on('click', function(event){
		event.preventDefault();
		jQuery('.wt-projectdropdown-option').slideToggle();
	});
	/* DROPDOWN RADIO */
	jQuery('input:radio[name="searchtype"]').on('change',
	    function(){
	        var _type = jQuery(this).data('title');
	        jQuery('.selected-search-type').html(_type);
	    }
    );
    /* SIDEBAR DROPDOWN */
	jQuery('.wt-usersidebardown').on('click', function(event){
		event.preventDefault();
		jQuery('.wt-usersidebar').slideToggle();
	});

	/* Lost passowrd Box */
	jQuery('.wt-forgot-password').on('click', function (e) {     
		jQuery('.do-login-form').addClass('wt-hide-form');
		jQuery('.wt-loginheader span').html('Reset Password');
		jQuery('.do-forgot-password-form').removeClass('wt-hide-form');
	});
	jQuery('.wt-show-login').on('click', function (e) {       
		jQuery('.do-login-form').removeClass('wt-hide-form');
		jQuery('.wt-loginheader span').text('Login');
		jQuery('.do-forgot-password-form').addClass('wt-hide-form');
	});
	/* SEARCH CHOSEN */
	var config = {
		'.chosen-select'           : {},
		'.chosen-select-deselect'  : {allow_single_deselect:true},
		'.chosen-select-no-single' : {disable_search_threshold:10},
		'.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
		'.chosen-select-width'     : {width:"95%"}
		}
		for (var selector in config) {
			jQuery(selector).chosen(config[selector]);
	}
	/* CHATBOX TOGGLE  */
	jQuery('#wt-btnclosechat, #wt-getsupport').on('click', function(){
		jQuery('.wt-chatbox').slideToggle();
	});
	/* DASHBOARD MENU */
	if(jQuery('#wt-btnmenutoggle').length > 0){
		jQuery("#wt-btnmenutoggle").on('click', function(event) {
			event.preventDefault();
			jQuery('#wt-wrapper').toggleClass('wt-openmenu');
			jQuery('body').toggleClass('wt-noscroll');
			jQuery('.wt-navdashboard ul.sub-menu').hide();
		});
	}

	/* FIXED SIDEBAR */
	function fixedNav(){			
		$(window).scroll(function () {			
		var $pscroll = $(window).scrollTop();						
			if($pscroll > 76){
			 $('.wt-sidebarwrapper').addClass('wt-fixednav');
			}else{
			 $('.wt-sidebarwrapper').removeClass('wt-fixednav');
			}
		});
	}
	fixedNav();

	/* ADD Class */
	jQuery('.wt-myskills .wt-addinfo').on('click', function() {
		var _this = jQuery(this);
		_this.parents('li').addClass('wt-skillsaddinfo');
	});
	jQuery('.wt-myskills .wt-deleteinfo').on('click', function() {
		var _this = jQuery(this);
		var _val = _this.parents('li').find('.skill-dynamic-field input').val();
		_this.parents('li').find('.skill-dynamic-html .skill-val').html(_val);
		_this.parents('li').removeClass('wt-skillsaddinfo');
	});
	/* Dashboard Slider */
	var _wt_postedsilder = jQuery("#wt-postedsilder")
	_wt_postedsilder.owlCarousel({
		item: 6,
		loop:true,
		nav:true,
		margin: 10,
		autoplay:false,
		responsiveClass:true,
		navClass: ['wt-prev', 'wt-next'],
		navContainerClass: 'wt-slidernav',
		navText: ['<span class="lnr lnr-chevron-left"></span>', '<span class="lnr lnr-chevron-right"></span>'],
		responsive:{
			0:{items:1,},
			720:{items:2,},
		}
	});
	/* TINYMCE WYSIWYG EDITOR */
	if(jQuery('#wt-tinymceeditor').length > 0){
		tinymce.init({
			selector: 'textarea#wt-tinymceeditor',
			height: 300,
			theme: 'modern',
			plugins: [ 'advlist autolink lists link image charmap print preview hr anchor pagebreak'],
			menubar: false,
			statusbar: false,
			toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify',
			image_advtab: true,
		});
	}
	
	jQuery('.wt-savefollow').on('click', function(){
		event.preventDefault();
		$(this).parents('li').remove();
	});
	
	/* ADD AND REMOVE CLASS  */
	if(jQuery('.wt-ad').length > 0){
		var _wt_ad = jQuery('.wt-ad');
		_wt_ad.on('click',function () {
			jQuery(this).parents('.wt-messages-holder').addClass('wt-openmsg');
			jQuery(this).parent().parents('.wt-messages-holder').addClass('wt-openmsg');
		});
		var _wt_back = jQuery('.wt-back');
		_wt_back.on('click',function () {
			jQuery('.wt-back').parents('.wt-messages-holder').removeClass('wt-openmsg');
		});
	}
	
	/* JRATE STARS  */
	jQuery(function () {
		var that = this;
		var toolitup = $("#wt-jrate").jRate({
			rating: 5.0,
			strokeColor: '#dadadacc',
			precision: 1,
			startColor: "#fecb02",
			endColor: "#fecb02",
			backgroundColor: '#ddd',
			minSelected: 1,
			shapeGap: '10px',
			count: 5,
			onChange: function(rating) {
				jQuery('.counter').text(rating + '');
			},
			onSet: function(rating) {
				console.log("OnSet: Rating: "+rating);
			}
		});
	});
	
	jQuery(function () {
		var that = this;
		var toolitup = $("#wt-jrateone").jRate({
			rating: 4.0,
			strokeColor: '#dadadacc',
			precision: 1,
			startColor: "#fecb02",
			endColor: "#fecb02",
			backgroundColor: '#ddd',
			minSelected: 1,
			shapeGap: '10px',
			count: 5,
			onChange: function(rating) {
				jQuery('.counterone').text(rating + '');
			},
			onSet: function(rating) {
				console.log("OnSet: Rating: "+rating);
			}
		});
	});	
	
	jQuery(function () {
		var that = this;
		var toolitup = $("#wt-jratetwo").jRate({
			rating: 3.0,
			strokeColor: '#dadadacc',
			precision: 1,
			startColor: "#fecb02",
			endColor: "#fecb02",
			backgroundColor: '#ddd',
			minSelected: 1,
			shapeGap: '10px',
			count: 5,
			onChange: function(rating) {
				jQuery('.countertwo').text(rating + '');
			},
			onSet: function(rating) {
				console.log("OnSet: Rating: "+rating);
			}
		});
	});	
	
	jQuery(function () {
		var that = this;
		var toolitup = $("#wt-jratethree").jRate({
			rating: 2.0,
			strokeColor: '#dadadacc',
			precision: 1,
			startColor: "#fecb02",
			endColor: "#fecb02",
			backgroundColor: '#ddd',
			minSelected: 1,
			shapeGap: '10px',
			count: 5,
			onChange: function(rating) {
				jQuery('.counterthree').text(rating + '');
			},
			onSet: function(rating) {
				console.log("OnSet: Rating: "+rating);
			}
		});
	});	
	

			// -----------------------------------------------shifting script here------------------------------------------------------
		
			$(document).ready(function(){
				$("#languages").select2({
					  
				});
		
				// Dashboard add user jquery 
		
				$("#categories").on('change', function(){
					var optVal = $("#categories option:selected").val();
					if(optVal == ""){
		
						$("#add_company").hide();
						$("#company_project").hide();
						$("#personal_details").hide();
						$("#next_of_kin").hide();
						$("#home_address").hide();
						$("#document").hide();
						$("#language").hide();
						$("#transportation").hide();
						$("#experience").hide();
						$("#projects").hide();
		
					}
					if(optVal == "Company"){
		
						$("#add_company").show();
						$(".company_tab").addClass("active");
						$(".category_tab").removeClass("active");
						$(".company_tab_active").addClass("show");
						$(".company_tab_active").addClass("active");
						$(".category_tab_active").removeClass("show");
						$(".category_tab_active").removeClass("active");
		
						$("#company_project").hide();
						$("#personal_details").hide();
						$("#next_of_kin").hide();
						$("#home_address").hide();
						$("#document").hide();
						$("#language").hide();
						$("#transportation").hide();
						$("#experience").hide();
						$("#projects").hide();
						$(".outer_btn").hide();
		
					}
		
					if(optVal == "Company Project"){
		
						$("#add_company").hide();
						$("#company_project").show();
						$(".comapny_project_tab").addClass("active");
						$(".category_tab").removeClass("active");
						$(".company_project_active").addClass("show");
						$(".company_project_active").addClass("active");
						$(".category_tab_active").removeClass("show");
						$(".category_tab_active").removeClass("active");
		
						$("#personal_details").hide();
						$("#next_of_kin").hide();
						$("#home_address").hide();
						$("#document").hide();
						$("#language").hide();
						$("#transportation").hide();
						$("#experience").hide();
						$("#projects").hide();
						$(".outer_btn").hide();
		
					}
		
					if(optVal == "Employee"){
		
						$("#add_company").hide();
						$("#company_project").hide();
						$("#personal_details").show();
						$(".personal_tab").addClass("active");
						$(".category_tab").removeClass("active");
						$(".personal_tab_active").addClass("show");
						$(".personal_tab_active").addClass("active");
						$(".category_tab_active").removeClass("show");
						$(".category_tab_active").removeClass("active");
		
						$("#next_of_kin").show();
						$("#home_address").show();
						$("#document").show();
						$("#language").show();
						$("#transportation").show();
						$("#experience").show();
						$("#projects").show();
		
						$("#select_company").hide();
						$("#select_project").hide();
						$("#guard_designation").hide();
						$("#user_designation").hide();
						$("#employee_designation").show();
						$(".outer_btn").show();
						$(".salary_field").hide();
						$(".price_per_hour").hide();
		
					}
		
					if(optVal == "Guard")
					{
						$("#add_company").hide();
						$("#company_project").hide();
						$("#personal_details").show();
						$(".personal_tab").addClass("active");
						$(".category_tab").removeClass("active");
						$(".personal_tab_active").addClass("show");
						$(".personal_tab_active").addClass("active");
						$(".category_tab_active").removeClass("show");
						$(".category_tab_active").removeClass("active");
		
						$("#next_of_kin").show();
						$("#home_address").show();
						$("#document").show();
						$("#language").show();
						$("#transportation").show();
						$("#experience").show();
						$("#projects").show();
		
						$("#select_company").hide();
						$("#select_project").hide();
						$("#guard_designation").show();
						$("#user_designation").hide();
						$("#employee_designation").hide();
						$(".outer_btn").show();
						$(".salary_field").hide();
						$(".price_per_hour").show();
					}
		
					if(optVal == "Company Users"){
						$("#add_company").hide();
						$("#company_project").hide();
						$("#personal_details").show();
						$(".personal_tab").addClass("active");
						$(".category_tab").removeClass("active");
						$(".personal_tab_active").addClass("show");
						$(".personal_tab_active").addClass("active");
						$(".category_tab_active").removeClass("show");
						$(".category_tab_active").removeClass("active");
		
						$("#next_of_kin").show();
						$("#home_address").show();
						$("#document").show();
						$("#language").show();
						$("#transportation").show();
						$("#experience").show();
						$("#projects").show();
						$(".price_per_hour").hide();
						$(".salary_field").hide();
		
						$("#select_company").show();
						$("#select_project").show();
						$("#guard_designation").hide();
						$("#user_designation").show();
						$("#employee_designation").hide();
						$(".outer_btn").show();
					}
					
				});
		
				$("#addCategoryForm").validate({
					rules: {
						category_name: {
							required: true
						},
						file: {
							required: true
						},
						category_description: {
							required: true
						},
						capacity_yds: {
							required: true
						},
						height_yds: {
							required: true
						},
						length_yds: {
							required: true
						},
						width_yds: {
							required: true
						},
						capacity_mtrs: {
							required: true
						},
						height_mtrs: {
							required: true
						},
						length_mtrs: {
							required: true
						},
						width_mtrs: {
							required: true
						}
					},
					messages: {
						category_name: {
							required: "Category name required"
						},
						file: {
							required: "Category image required"
						},
						category_description: {
							required: "Category description required"
						},
						capacity_yds: {
							required: "Capacity YDS required"
						},
						height_yds: {
							required: "Height YDS required"
						},
						length_yds: {
							required: "Length YDS required"
						},
						width_yds: {
							required: "Width YDS required"
						},
						capacity_mtrs: {
							required: "Capacity Meters required"
						},
						height_mtrs: {
							required: "Height Meters required"
						},
						length_mtrs: {
							required: "Length Meters required"
						},
						width_mtrs: {
							required: "Width Meters required"
						}
					}
				});

				$("#editCategoryForm").validate({
					rules: {
						category_name: {
							required: true
						},
						file: {
							required: true
						},
						category_description: {
							required: true
						},
						capacity_yds: {
							required: true
						},
						height_yds: {
							required: true
						},
						length_yds: {
							required: true
						},
						width_yds: {
							required: true
						},
						capacity_mtrs: {
							required: true
						},
						height_mtrs: {
							required: true
						},
						length_mtrs: {
							required: true
						},
						width_mtrs: {
							required: true
						}
					},
					messages: {
						category_name: {
							required: "Category name required"
						},
						file: {
							required: "Category image required"
						},
						category_description: {
							required: "Category description required"
						},
						capacity_yds: {
							required: "Capacity YDS required"
						},
						height_yds: {
							required: "Height YDS required"
						},
						length_yds: {
							required: "Length YDS required"
						},
						width_yds: {
							required: "Width YDS required"
						},
						capacity_mtrs: {
							required: "Capacity Meters required"
						},
						height_mtrs: {
							required: "Height Meters required"
						},
						length_mtrs: {
							required: "Length Meters required"
						},
						width_mtrs: {
							required: "Width Meters required"
						}
					}
				});


				$("#editUserForm").validate({
					rules: {
						owner_name: {
							required: true
						},
						company_name: {
							required: true
						},
						phone_number: {
							required: true
						},
						website_link: {
							required: true
						},
						email: {
							required: true
						},
						company_number: {
							required: true
						},
						city: {
							required: true
						},
						county: {
							required: true
						},
						country: {
							required: true
						},
						post_code: {
							required: true
						},
						address: {
							required: true
						}
					},
					messages: {
						owner_name: {
							required: "The owner name field is required"
						},
						company_name: {
							required: "The company name field is required"
						},
						phone_number: {
							required: "The phone number field is required"
						},
						website_link: {
							required: "The website link field is required"
						},
						email: {
							required: "The email field is required"
						},
						company_number: {
							required: "The company number field is required"
						},
						city: {
							required: "The city field is required"
						},
						county: {
							required: "The county field is required"
						},
						country: {
							required: "The country field is required"
						},
						post_code: {
							required: "The post code field is required"
						},
						address: {
							required: "The address field is required"
						}
					}
				});
		
				$("#addProjectForm").validate({
					rules: {
						select_company: {
							required: true
						},
						add_project: {
							required: true
						},
						price: {
							required: true,
						},
						project_city: {
							required: true
						},
						project_county: {
							required: true
						},
						project_country: {
							required: true
						},
						project_post_code: {
							required: true
						},
						project_address: {
							required: true
						}
					},
					messages: {
						select_company: {
							required: "The company selection field is required"
						},
						add_project: {
							required: "The add project field is required"
						},
						price: {
							required: "The price field is required"
						},
						project_city: {
							required: "The city field is required"
						},
						project_county: {
							required: "The county field is required"
						},
						project_country: {
							required: "The country field is required"
						},
						project_post_code: {
							required: "The post code field is required"
						},
						project_address: {
							required: "The address field is required"
						}
					}
				});

				$("#editProjectForm").validate({
					rules: {
						select_company: {
							required: true
						},
						add_project: {
							required: true
						},
						price: {
							required: true,
						},
						project_city: {
							required: true
						},
						project_county: {
							required: true
						},
						project_country: {
							required: true
						},
						project_post_code: {
							required: true
						},
						project_address: {
							required: true
						}
					},
					messages: {
						select_company: {
							required: "The company selection field is required"
						},
						add_project: {
							required: "The add project field is required"
						},
						price: {
							required: "The price field is required"
						},
						project_city: {
							required: "The city field is required"
						},
						project_county: {
							required: "The county field is required"
						},
						project_country: {
							required: "The country field is required"
						},
						project_post_code: {
							required: "The post code field is required"
						},
						project_address: {
							required: "The address field is required"
						}
					}
				});
				
				$("#guardForm").validate({
					rules: {
						select_guard:{
							required: true
						},
						price_per_hour:{
							required: true
						},
						employ_designation: {
							required: true
						},
						select_gender: {
							required: true
						},
						first_name: {
							required: true,
						},
						last_name: {
							required: true
						},
						email: {
							required: true
						},
						phone_number: {
							required: true
						}
						// guard_password:{
						// 	required: true
						// },
						// guard_confirm_password:{
						// 	required: true
						// }
					},
					messages: {
						select_guard:{
							required: "The guard designation field is required"
						},
						price_per_hour:{
							required: "The price per hour field is required"
						},
						employ_designation: {
							required: "The employee designation field is required"
						},
						select_gender: {
							required: "The gender field is required"
						},
						first_name: {
							required: "The first name field is required"
						},
						last_name: {
							required: "The last name field is required"
						},
						email: {
							required: "The email field is required"
						},
						phone_number: {
							required: "The phone number field is required"
						}
						// guard_password:{
						// 	required: "The password field is required"
						// },
						// guard_confirm_password:{
						// 	required: "The confirm password field is required"
						// }
					}
				});


				$("#employeeForm").validate({
					rules: {
						employ_designation: {
							required: true
						},
						full_name: {
							required: true,
						},
						email: {
							required: true
						},
						phone: {
							required: true
						},
						password:{
							required:true
						}
					},
					messages: {
						employ_designation: {
							required: "The employee designation field is required"
						},
						full_name: {
							required: "The first name field is required"
						},
						email: {
							required: "The email field is required"
						},
						phone: {
							required: "The phone number field is required"
						},
						password:{
							required:"The password field is required"
						}
					}
				});

				$("#editEmployeeForm").validate({
					rules: {
						employ_designation: {
							required: true
						},
						full_name: {
							required: true,
						},
						email: {
							required: true
						},
						phone: {
							required: true
						}
					},
					messages: {
						employ_designation: {
							required: "The employee designation field is required"
						},
						full_name: {
							required: "The first name field is required"
						},
						email: {
							required: "The email field is required"
						},
						phone: {
							required: "The phone number field is required"
						}
					}
				});


				$("#companyUserForm").validate({
					rules: {
						user_company_designation: {
							required: true
						},
						select_project:{
							required: true
						},
						user_company:{
							required: true
						},
						select_gender: {
							required: true
						},
						first_name: {
							required: true
						},
						last_name: {
							required: true
						},
						email: {
							required: true
						},
						company_number: {
							required: true
						}
					},
					messages: {
						user_company_designation: {
							required: "The user designation field is required"
						},
						select_project:{
							required: "The project field is required"
						},
						user_company:{
							required: "The user comapny field is required"
						},
						select_gender: {
							required: "The gender field is required"
						},
						first_name: {
							required: "The first name field is required"
						},
						last_name: {
							required: "The last name field is required"
						},
						email: {
							required: "The email field is required"
						},
						company_number: {
							required: "The phone number field is required"
						}
					}
				});

				$("#registrationForm").validate({
					rules: {
						name: {
							required: true
						},
						email:{
							required: true,
							email: true
						},
						contact_number:{
							required: true
						},
						company_name: {
							required: true
						},
						company_email: {
							required: true,
							email: true
						},
						phone_number: {
							required: true
						},
						company_reg_number: {
							required: true
						},
						company_vat_number: {
							required: true
						},
						waste_carrier_licence:{
							required:true,
							minlength:8
						},
						rent_duration:{
							required: true
						},
						post_code:{
							required: true
						},
						address_line1:{
							required:true
						},
						city:{
							required:true
						},
						county:{
							required:true
						},
						password:{
							required:true,
							minlength:8
						},
						confirm_password:{
							required:true
						},
						agreement:{
							required: true
						}
					},
					message: {
						name: {
							required: "Name is required"
						},
						email:{
							required: "Emai is required"
						},
						contact_number:{
							required: "Contact number is required"
						},
						company_name: {
							required: "Company name  is required"
						},
						company_email: {
							required: "Company email is required"
						},
						phone_number: {
							required: "Phone number  is required"
						},
						company_reg_number: {
							required: "Company reg number is required"
						},
						company_vat_number: {
							required: "Company vat number is required"
						},
						waste_carrier_licence:{
							required: "Carrier licence is required"
						},
						rent_duration:{
							required: "Rent duration is required"
						},
						post_code:{
							required: "Post code is required"
						},
						address_line1:{
							required: "Address line 1 is required"
						},
						city:{
							required: "City is required"
						},
						county:{
							required: "County is required"
						},
						password:{
							required: "Password is required"
						},
						confirm_password:{
							required: "Confirm password is required"
						},
						agreement:{
							required: "Check this agreement box"
						}
					}
				});

				// $("input[name='price']").on('input', function() {
				// 	 $(this).val($(this).val().replace(/[^0-9]/g, ''));
				// });

				$("input[name='phone_number']").on('input', function() {
					$(this).val($(this).val().replace(/[^0-9]/g, ''));
			   });

			   $("input[name='company_number']").on('input', function(){
					$(this).val($(this).val().replace(/[^0-9]/g, ''));
			   });

			   $("input[name='price_per_hour']").on('input', function(){
					$(this).val($(this).val().replace(/[^0-9]/g, ''));
		  		});

				$("input[name='company_number']").on('input', function(){
					$(this).val($(this).val().replace(/[^0-9]/g, ''));
		  		});
			});

			var myInput = document.getElementById("guard_password");
			var letter = document.getElementById("letter");
			var capital = document.getElementById("capital");
			var number = document.getElementById("number");
			var length = document.getElementById("length");

			// When the user clicks on the password field, show the message box
			myInput.onfocus = function() {
				document.getElementById("message").style.display = "block";
			}

			// When the user clicks outside of the password field, hide the message box
			myInput.onblur = function() {
				document.getElementById("message").style.display = "none";
			}

			// When the user starts to type something inside the password field
			myInput.onkeyup = function() {
				// Validate lowercase letters
				var lowerCaseLetters = /[a-z]/g;
				if(myInput.value.match(lowerCaseLetters)) {  
				letter.classList.remove("invalid");
				letter.classList.add("validAttr");
				} else {
				letter.classList.remove("validAttr");
				letter.classList.add("invalid");
				}
				
				// Validate capital letters
				var upperCaseLetters = /[A-Z]/g;
				if(myInput.value.match(upperCaseLetters)) {  
				capital.classList.remove("invalid");
				capital.classList.add("validAttr");
				} else {
				capital.classList.remove("validAttr");
				capital.classList.add("invalid");
				}
			
				// Validate numbers
				var numbers = /[0-9]/g;
				if(myInput.value.match(numbers)) {  
				number.classList.remove("invalid");
				number.classList.add("validAttr");
				} else {
				number.classList.remove("validAttr");
				number.classList.add("invalid");
				}
				
				// Validate length
				if(myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("validAttr");
				} else {
				length.classList.remove("validAttr");
				length.classList.add("invalid");
				}
			}


			// checking password match validation 

			function checkPasswordMatch()
			{
				var password = $('.guard_password').val();
				var confirmPassword = $('.guard_confirm_password').val();
				if(password != confirmPassword)
				{
					$("#checkPasswordMatch").html('Passwords does not match!');
					$("#checkPasswordMatch").css("color","red");
				}else{
					$("#checkPasswordMatch").html('Passwords match.');
					$("#checkPasswordMatch").css("color","green");
				}
			}

			$('.guard_confirm_password').keyup(checkPasswordMatch);

			
			$('#guard_icon, #guard_icon_close').on('click', function(){
				var guardPassword = $("#guard_password").attr('type');
				if(guardPassword === 'password')
				{
					$("#guard_password").attr('type', 'text');
					$("#guard_icon").show().css('display','inline');
					$("#guard_icon_close").hide();	
				}else if(guardPassword === 'text')
				{
					$("#guard_password").attr('type', 'password');
					$("#guard_icon").hide();
					$("#guard_icon_close").show().css('display','inline');
				}
				
			});

			$('#guard_eye, #guard_eye_close').on('click', function(){
				var guardConfirmPassword = $(".guard_confirm_password").attr('type');
				if(guardConfirmPassword === 'password')
				{
					$(".guard_confirm_password").attr('type', 'text');
					$("#guard_eye").show().css('display','inline');
					$("#guard_eye_close").hide();	
				}else if(guardConfirmPassword === 'text')
				{
					$(".guard_confirm_password").attr('type', 'password');
					$("#guard_eye").hide();
					$("#guard_eye_close").show().css('display','inline');
				}
				
			});
			
			// checking password on submition form
			$("#save_guard").on('click', function(){
				var guardPswd = $('#guard_password').val();
				var guardConfirmPswd = $(".guard_confirm_password").val();
				if(guardPswd == "")
				{
					alert("The password field is required");
					return false;
				}
				if(guardConfirmPswd == "")
				{
					alert("The confirm password field is required");
					return false;
				}
				if(guardPswd != guardConfirmPswd)
				{
					alert("Passwords does not match!");
					return false;
				}
			});
		});
	
