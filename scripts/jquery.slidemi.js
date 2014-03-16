// slidemi 1.3.4
/*Last Update : 30-12-2011
Author : Moorthy
Email : moorthywdr@gmail.com
*/
(function($){
jQuery.fn.slidemi = function(opt){
	
	var settings = {
		panelSelector:".panel", //selector for slides
		direction:"horizontal", //Options "horizontal/vertical"
		autoNavigation : null, //slider navigation ul class
		staticNavigation : ".sample", //slider navigation ul class
		nextSelector : ".next", // next button
		prevSelector : ".prev", // prev button
		hoverStopElemnts : null, //you can give many selectors you want
		duration : 500, // Animation duration in mili-seconds
		easeFunction : "swing",// Ease function
		autoSlide: false, // Active slide show
		slideInterval : 4000,// Slide show interval in mili-seconds
		loadPanel : 1,// which panel to load initially
		relativeNav : true, // whether navigations relative to slider or document
		alternateDelay : 1000,
		alternateIndex : null, // index of elements seperated with comma for alternateDelay EX: [0,2,3]
		embedElement: ".has-embedelement",// for video
		dynamicHeight: false,
		onStart : function(){},
		onComplete : function(){}
	};
	var o = jQuery.extend(settings, opt);
	
	
	return this.each(function(){	
		var $slider = $(this);		
		var $panel = $(o.panelSelector, $slider);
		var totalPanels = $panel.length;
		var panelWidth = $slider.width();
		var panelHeight = $slider.height();	
		var amination = false;
		var slide = o.loadPanel-1;
		var tout;
		var $slideNav;
		var prevSlide = 999;
		var delay = o.slideInterval;
		
		//embedElement
		$panel.each(function(i){ 
			if($(this).is(o.embedElement)){
				$(this).data({"content":$(this).html()});
				$(this).html("Loading...");
			};
		});
		
		// Choose arrow navigation
		if(o.relativeNav){
			var $btnNext = $(o.nextSelector, $slider);
			var $btnPrev = $(o.prevSelector, $slider);
		}else{
			var $btnNext = $(o.nextSelector);
			var $btnPrev = $(o.prevSelector);
		}		
		// hide arrow navigation if only on slide
		if(totalPanels <=1){
			$btnNext.hide();
			$btnPrev.hide();
		}
		//Make all slide visible
		$panel.show();
		
		// Dom generation for slider
	   if(o.direction!="vertical"){
		    $panel.wrapAll('<div class="slideflow" style="position:relative"><div class="slidewrap"></div></div>');
			$slider.find(".slidewrap").width(panelWidth*totalPanels+100).end()
				.find(".slideflow").css({"overflow":"hidden", "width":panelWidth});		   
	   		$panel.width(panelWidth);
	   }else{
		   $panel.wrapAll('<div class="slideflow"><div class="slidewrap"></div></div>');
			$slider.find(".slidewrap").height(panelHeight*totalPanels+100).end()
				.find(".slideflow").css({"overflow":"hidden", "height":panelHeight});		  
		   $panel.height(panelHeight);
	   }
				
		//Moving Element
		var $slideFlow = $slider.find(".slideflow");
		var $slideWrap = $slider.find(".slidewrap");
		
		//Apply float to panels
		$panel.css("float", "left");
		
		// define no animation on hover
		if(o.autoSlide){			
			if(o.hoverStopElemnts!=null){
				var $hstop = $(o.hoverStopElemnts);
			}else{
				$hstop = $slider;
			}
			$hstop.hover(function(){
				clearTimeout(tout);
			},function(){
				resetTimeout();
			});			
		};
		
		//Auto navigation
		if(o.autoNavigation != null){
			autoNavigation();			
		}else if(o.staticNavigation != null){
			if(o.relativeNav){
				$slideNav =$slider.find(o.staticNavigation).find("a");
			}else{
				$slideNav = $("a", o.staticNavigation);
			};
		};
		
		//prev btn
		$btnPrev.click(function(){
			if(amination){
				return false;
			};
			if(slide <=0){
				slide = totalPanels;
			};
			moveSlideTo(--slide);
			return false;
		});
		
		//prev btn
		$btnNext.click(function(){
			if(amination){
				return false;
			};
			// 
			if(slide >=totalPanels-1){
				slide = -1;
			};
			moveSlideTo(++slide);
			return false;
		});
		
		//slide Navigation
		$slideNav.click(function(){
			
			if(amination){
				return false;
			}
			
			var index = $slideNav.index($(this));
			if(index >= totalPanels){
				return false;
			};
			
			//set current slide
			slide = index;
			moveSlideTo(slide);			
			
			return false;
    	 });
		
		//Main function
		function moveSlideTo(slideNumber){
			 if(o.direction!="vertical"){
				var movement = slideNumber*panelWidth*-1;
			 }else{
				var movement = slideNumber*panelHeight*-1;
			 }
			 
						
			//helps to disable events while animating
			amination = true;
			
			clearTimeout(tout);
			
			//set active navigation
			setActive();			
			
			 //Dynamic Height
			 if(o.dynamicHeight){
				 var dHeight = $panel.eq(slideNumber).outerHeight();
				 $slideFlow.animate({"height":dHeight}, 200);
			 }
			
			//move slide and set !animation onComplete
			if(o.direction!="vertical"){
				o.onStart();
				addEmbed(slideNumber);
				$slideWrap.animate({"margin-left":movement}, o.duration, o.easeFunction,function(){
					amination=false;
					resetTimeout();
					o.onComplete();
					
					removeEmbed(prevSlide);
					prevSlide = slideNumber;
				});
			}else{		
				o.onStart();
				addEmbed(slideNumber);		
				$slideWrap.animate({"margin-top":movement}, o.duration, o.easeFunction,function(){
					amination=false;
					resetTimeout();
					o.onComplete();
					
					removeEmbed(prevSlide);
					prevSlide = slideNumber;
				});
			}
		};//moveSlideTo
		
		function autoSlide(){
			if(slide >=totalPanels-1){
				slide = -1;
			};
			moveSlideTo(++slide);
		};//autoSlide
		
		//Handle active class
		function setActive(){
			$slideNav.removeClass("active");
			$slideNav.eq(slide).addClass("active");			
		};//setActive
		
		
		function autoNavigation(){
						
			if(o.relativeNav){
				var $rnav = $(o.autoNavigation, $slider);
			}else{
				var $rnav = $(o.autoNavigation)
			};
			
			// Empty the element and generate nav
			$rnav.empty();
			for(var i=1; i<=totalPanels && totalPanels > 1;i++){
				$rnav.append('<li><a href="#">'+i+'</a></li>');
			};			
			
			$slideNav = $("a", $rnav);
		};//autoNavigation
		
		function resetTimeout(){
			if(o.autoSlide){				
				clearTimeout(tout);				
				if(o.alternateIndex!=null){
					for(var i=0; i<o.alternateIndex.length; i++){						
						if(o.alternateIndex[i]==slide){
							delay = o.alternateDelay;
							break;
						}else{
							delay = o.slideInterval;	
						};//if
					};//for
				};//if		
				tout = setTimeout(autoSlide, delay);
			};//if
		};//resetTimeout
		
		
		function removeEmbed(n){
			var code =$panel.eq(n).data("content");			
			if(code!=null){
				$panel.eq(n).html("Loading...");
			};
		};//removeEmbed
		
		function addEmbed(n){
			var code =$panel.eq(n).data("content");			
			if(code!=null){
				$panel.eq(n).html(code);
			};
		}//addEmbed

		//initiation
		moveSlideTo(slide);
		setActive();
		
    });	
	
};
})(jQuery);