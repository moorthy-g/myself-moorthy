// boxTab 1.0
/*Last Update : 22-12-2011
Author : Moorthy
Email : moorthyrweb@gmail.com
*/

//boxTab Plugin
(function($){
	
	$.fn.boxTab = function(opt){
		
		var defaults = {
			tabs : ".tabs a",
			tabElement : ".panel",
			prev: ".previous",
			next: ".next",
			currentClass : "active",
			animType: "none", //none or slide or fade
			speed: 1000,
			mouseEvent: "click", // click or mouseover
			initTab : 0 //0 based index
		};
		
		var o = $.extend(defaults, opt);
				
		return this.each(function(){
			var $tab = $(o.tabs, this);
			var $element = $(o.tabElement, this);
			var $prev = $(o.prev, $tab);
			var $next = $(o.next, $tab);
			var total = $element.length;
			var current = 0;
			
			
			//init
			tabChange(o.initTab);
			
			//Prev, Next buttons
			$prev.click(function(){
				current--;
				current = current<0?total-1:current;
				tabChange(current);
				return false;
			});
			$next.click(function(){
				current++;
				current = current>=total?0:current;
				tabChange(current);
				return false;
			});
			
			//binding event
			$tab.bind(o.mouseEvent, function(){
				var $this = $(this);
				if(!$this.is("."+o.currentClass)){
					var idx = current = $tab.index($this);
					tabChange(idx);
				}
				return false;
			})
			
			function tabChange(n){			
				if(o.animType == "slide"){
					$element.filter(":visible").slideUp(o.speed*2);
					$element.eq(n).slideDown(o.speed);
				}else if(o.animType == "fade"){
					$element.filter(":visible").hide();
					$element.eq(n).fadeIn(o.speed);
				}else{
					$element.filter(":visible").hide();	
					$element.eq(n).show();			
				};
				
				//tab
				$tab.filter("."+o.currentClass).removeClass(o.currentClass);
				$tab.eq(n).addClass(o.currentClass);
			};//End tabChange	
	  });// End each
	};//End
	
})(jQuery);
