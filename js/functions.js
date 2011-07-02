// JavaScript Document


(function () {
	
	Application = {
		
		Home_navigator: function() {
			// initialize scrollable together with the navigator plugin
			$("#emphasised").scrollable().navigator();	
			$(":range").rangeinput();
			$(":range").rangeinput();
			$(":range").rangeinput();	
		},
		
		List_navigator: function() {
			// initialize scrollable with mousewheel support
			$(".vertical").scrollable({ vertical: true, mousewheel: true });	
		},
		
		Detail_show: function() {
			$(".b a[rel]").overlay({effect: 'apple'});	
			//$("button[rel]").overlay({mask: '#000', effect: 'apple'});	
			//$(":button").click(function() {
			//  alert('Handler for .click() called.');
			//});
		},
		
		
		Detail_show2: function() {
			// if the function argument is given to overlay,
			// it is assumed to be the onBeforeLoad event listener
			//$(":button").click(function() {
				$(".b a[rel]").overlay({
			
					mask: 'darkred',
					effect: 'apple',
			
					onBeforeLoad: function() {
			
						// grab wrapper element inside content
						var wrap = this.getOverlay().find(".contentWrap");
			
						// load the page specified in the trigger
						wrap.load(this.getTrigger().attr("href"));
					}
			
				});
			//});
		},
		
		
		
		
        Gallerify: function() {
				$(".mini_pics").scrollable();

                $(".smalls img").click(function() {
                
                	// see if same thumb is being clicked
                	if ($(this).hasClass("active")) { return; }
                
                	// calclulate large image's URL based on the thumbnail URL (flickr specific)
                	var url = $(this).attr("src").replace("_t", "");
                
                	// get handle to element that wraps the image and make it semi-transparent
                	var wrap = $("#image_wrap").fadeTo("medium", 0.5);
                
                	// the large image from www.flickr.com
                	var img = new Image();
                
                
                	// call this function after it's loaded
                	img.onload = function() {
                
                		// make wrapper fully visible
                		wrap.fadeTo("fast", 1);
                
                		// change the image
                		wrap.find("img").attr("src", url);
                
                	};
                
                	// begin loading the image from www.flickr.com
                	img.src = url;
                
                	// activate item
                	$(".smalls img").removeClass("active");
                	$(this).addClass("active");
                
                // when page loads simulate a "click" on the first image
                }).filter(":first").click();
		},
        
		User_inform: function() {
				/******************************************** User Inform ********************************/
				// select the overlay element - and "make it an overlay"
				function show_flashdata(){ 
					$("#inform").overlay({effect: 'apple'});
				
							
					// We only want these styles applied when javascript is enabled
					$('div#inform').css('display', 'block');
				}
				
				function hide_flashdata(){ 
					
					$('div#inform').css('display', 'none');
				}
		},
		
		Add_move: function() {
				$("#slide").click(function () {
					$("#filter").slideToggle('slow',function(){
						$(this).css("height", "500px");
						});
					});

		},
		
		
		Add_wizzard:function() {
			$(function() {

				// get container for the wizard and initialize its exposing
				var wizard = $("#wizard");
				
				// enable tabs that are contained within the wizard
				$("ul.tabs", wizard).tabs("div.panes > div", function(event, index) {
			
					/* now we are inside the onBeforeClick event */
			
					// ensure that the "terms" checkbox is checked.
					var terms = $("#terms");
					//if (index > 0 && !terms.get(0).checked)  {
//						terms.parent().addClass("error");
//			
//						// when false is returned, the user cannot advance to the next tab
//						return false;
//					}
			
					// everything is ok. remove possible red highlight from the terms
					terms.parent().removeClass("error");
				});
			
				
			
				// get handle to the tabs API
				var api = $("ul.tabs", wizard).data("tabs");
			
				// "next tab" button
				$("a.stepforw", wizard).click(function() {
					api.next();
				});
			
				// "previous tab" button
				$("a.stepback", wizard).click(function() {
					api.prev();
				});
			
			
			
			});

		},
		
		
		Loggin_show: function() {
				// if the function argument is given to overlay,
				// it is assumed to be the onBeforeLoad event listener
				$(".loggin[rel]").overlay({
				
					mask: '#789',
					effect: 'apple',
				
					onBeforeLoad: function() {
				
						// grab wrapper element inside content
						var wrap = this.getOverlay().find(".contentWrap");
				
						// load the page specified in the trigger
						wrap.load(this.getTrigger().attr("href"));
					}	
				});
		}
	};
			
}) ();	



$(document).ready(function() {
	Application.Loggin_show();
	Application.Home_navigator();
	Application.List_navigator();
	Application.Detail_show();
	Application.Gallerify();
	Application.Add_move();
	Application.Add_wizzard();
});







