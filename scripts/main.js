jQuery(function($){	
	
		
	//#project-stack hover
	var $projectStack = $("#project-stack");
	var $projectList = $("#project-stack .image").fadeTo(0, 0.4);
	var $previewImage = $("#preview .image");
	var $previewInfo = $("#preview .info");
	
		
	$("#project-stack >li").hover(function(){
		$(this).find(".image").animate({"top": -33, "opacity":1}, 500, "easeOutBack").end().find(".caption").fadeIn();	
		
	},function(){
		$(this).find(".image").animate({"top": 0, "opacity":0.4}, 500, "easeOutBack").end().find(".caption").fadeOut();	
		
	}).click(function(){
		var $this = $(this);			
		if(!$this.is(".active")){
			$projectStack.find(".active").removeClass("active");
			$this.addClass("active");
			//Preload Image
			$previewImage.html("").addClass("loading");
			$("<img />").attr("src", $this.find("a").attr("href")).load(function(){
				$previewImage.removeClass("loading").append(this);
			});		
			
			$previewInfo.html($this.find(".meta").html());
		}
		return false;
	}).eq(0).click();
	
	//page-align
	$(".set-alignment").click(function(){
		$("body").toggleClass("center-align");
		$(this).toggleClass("center");
	});
	
	
	
	//shutter effect
	var $shutter = $("#shutter");
	var $tl = $("#shutter .tl");
	var $tr = $("#shutter .tr");
	var $bl = $("#shutter .bl");
	var $br= $("#shutter .br");
	var shutterSpeed = 500;
	var defaultHash = "#!/intro"
	var currentHash = "#intro";
	
	//init page
	var locationHash = getHash();
	if(locationHash!="#" && $(locationHash).length>0){
		$(".main-wrapper:visible").hide();
		$(locationHash).show();
		loadPlugins(locationHash);
		currentHash=locationHash;
	}
	//alert(currentHash);
	
	//Binding Event
	//$(".navigation a:not(.external), .logo").click(function(){
		//ShutterRefresh(getHash());
		//return false;
	//});
	
	function ShutterRefresh(hash){
		if(currentHash != hash){
			currentHash = hash;	
			randomPattern();
			$shutter.show();
			$tl.delay(shutterSpeed/5).show(shutterSpeed, "easeInCubic");
			$tr.delay(shutterSpeed/2).show(shutterSpeed, "easeInCubic", 
					function(){$(".main-wrapper:visible").hide();
					$(hash).show();
					/*location.hash = "#!\/"+hash.substr(1);*/
					loadPlugins(hash);
				});
			$bl.delay(shutterSpeed/3).show(shutterSpeed, "easeInCubic");
			$br.show(shutterSpeed, "easeInCubic");			
			$tl.hide(shutterSpeed, "easeInBack");
			$tr.hide(shutterSpeed, "easeInBack", function(){$shutter.hide()});
			$bl.hide(shutterSpeed, "easeInBack");
			$br.hide(shutterSpeed, "easeInBack");
			
		};
				
	};
	
	function randomPattern(){
		var $shutterDiv = $("#shutter div");
		var w = Math.ceil(Math.random()*30)+50;
		var h = Math.ceil(Math.random()*10)+50;
		$shutterDiv.width(w+"%");
		$shutterDiv.height(h+"%");
	};
	//setTimeout(function(){ShutterRefresh("#intro")}, 200);
	
	$(window).bind("hashchange", function(){
		locationHash = getHash();
		if(locationHash!="#" && $(locationHash).length>0){
			ShutterRefresh(locationHash);
		}else{
			this.location.hash = defaultHash;
		}
	});	
	
	function getHash(){
		return "#"+this.location.hash.substr(3);
	}
	
	// End shutter effect

});

var pluginsLoaded = false;
function loadPlugins(hash){	
	if(!pluginsLoaded && hash=="#plugins"){
		//slidemi
		$("#slidemi").slidemi({
			dynamicHeight: true,
			autoNavigation: ".slide-nav",
			easeFunction:"easeInOutCubic"
		});			
		//boxtab
		$("#boxtab").boxTab({
			animType: "fade",
			speed: 500
		});
		pluginsLoaded = true;
	}
}
