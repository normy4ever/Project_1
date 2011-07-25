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
		},
		
	
		
        Gallerify: function() {
				$(".mini_pics").scrollable();

                $(".smalls img").click(function() {
                
                	// see if same thumb is being clicked
                	if ($(this).hasClass("active")) { return; }
                
                	// calclulate large image's URL based on the thumbnail URL (flickr specific)
                	var url = $(this).attr("src").replace("thumbs/", "");
                
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
		
		Thinking: function() {			
			$('$up_it:submit').click(function() {
			  $("#thinking").show();
			  return true;
			});
		},
		
		Add_wizzard:function() {
			$(function() {

				// get container for the wizard and initialize its exposing
				var wizard = $("#wizard");
				$('.form_error').hide();  
				// enable tabs that are contained within the wizard
				$("ul.tabs", wizard).tabs("div.panes > div", function(event, index) {
			
					/* now we are inside the onBeforeClick event */
			
					// ensure that the "terms" checkbox is checked.
					//var terms = $("#terms");
					if(index > 0 && !Application.Check_form())
					{
						return false;	
					}
//						terms.parent().addClass("error");
//			
//						// when false is returned, the user cannot advance to the next tab
//						return false;
//					}
			
					// everything is ok. remove possible red highlight from the terms
					//terms.parent().removeClass("error");
				});
			
				
			
				// get handle to the tabs API
				var api = $("ul.tabs", wizard).data("tabs");
			
				// "next tab" button
				$("a.stepforw", wizard).click(function() {
					if(Application.Check_form())
					{
					api.next();
					}
				});
			
				// "previous tab" button
				$("a.stepback", wizard).click(function() {
					api.prev();
				});
			
			
			
			});

		},
        
        Jump: function() {
			var wizard = $("#wizard");
            
			var api = $("ul.tabs", wizard).data("tabs");
            
				api.click(3);
		},
		
		Disable_form_submit: function() {
			
			 $('*').keypress(function(e)
                {
                    // if the key pressed is the enter key
                    if (e.keyCode == 13)
                    {
                        alert("Da click pe pasul urmator");
                        return false;
                    }
                });
			
		},
		
		Check_form: function() { 
			 			 			  	
				  var name = $("input#cazare_name").val();  
				  var res = '';
					if (name == "") {  
				  $("#name_error").show();  
				  $("input#name").focus();  
				  return false;  
				}  
									
					$.ajax({
					  url: "http://localhost/cazarecarei/index.php/add/validate_cname/"+name,
					  async: false,
					  dataType: "text",
					  success: function(data){
						//alert(data);
						res=data;
					  }
					});
				
				//alert (res);
				if(res=='User exists!'){
				  $("#name_error").html('Aceasta nume exista deja!');  
				  $("#name_error").show();  
				  $("input#name").focus();  
				  return false;  
				} 						
					var room = $("input#cazare_camere").val();  
					if (room == "") {  
				  $("#room_error").show();  
				  $("input#room").focus();  
				  return false;  
				}  
				return true;
			}, 
			
			
		Check_login: function() { 
			 			 			  	
				  var name = $("input#user_name").val();  
				  var res = '';
					/*if (name == "") {  
				  $("#name_error").show();  
				  $("input#name").focus();  
				  return false;  
				}  */
									
					$.ajax({
					  url: "http://localhost/cazarecarei/index.php/home/validate_user/"+name,
					  async: false,
					  dataType: "text",
					  success: function(data){
						//alert(data);
						res=data;
					  }
					});
				
				//alert (res);
				if(res=='No such account!'){
				  $("#login_err").html('Aceasta addressa nu este inregistrata!');  
				  $("#login_err").show();  
				  $("input#user_name").focus();  
				  return false;  
				} 						
					
			},	
		
		Change_menu: function() { 
			 			 			  	
				$("#despre_b").click(function () {
					$("#menu_change").html('#include file="../application/views/despre.php"')
				});						
					
			},
		
		Loggin_show: function() {
			
				/*$("#close_login").click(function(){
					
					var e = jQuery.Event("keydown");
					e.which = 27; // # Some key code value
					$("#login_window").trigger('keypress(e)');

				});*/
				
			
				var triggers = $(".modalInput").overlay({

				// some mask tweaks suitable for modal dialogs
				mask: {
					color: '#334455',
					loadSpeed: 200,
					opacity: 0.5
				},
			
				closeOnClick: true
			});
			
			$("#login_window form").submit(function(e) {
				
				if(Application.Check_login())
					{
						// close the overlay
						triggers.eq(1).overlay().close();
					
						// get user input
						var input = $("input", this).val();
					
						// do something with the answer
						triggers.eq(1).html(input);
					}
				// do not submit the form
				//return e.preventDefault();
			});
			
			$("#login_window form").validator();
			
			/*$("a").click(function(f) {
				if($.session("userdata")=="logged_in")
				{}
			}*/
			
			/*slide down*/
			
			$("#click_inreg").click(function () {
					$("div").slideDown("slow",function(){
						$("#login_window").css("height", "550px");
					});
				});
		
		}
	}
}) ();	



$(document).ready(function(){
	Application.Loggin_show();
	Application.Home_navigator();
	Application.List_navigator();
	Application.Detail_show();
	Application.Gallerify();
	Application.Add_move();
	Application.Add_wizzard();
    Application.Thinking();
	Application.Disable_form_submit();
	//Application.Change_menu();
});







