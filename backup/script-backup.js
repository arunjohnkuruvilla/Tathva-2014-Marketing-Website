var currentTab = null;						//Stores the tab that is visible
var currentDropdown = null;
var whySponsorUsTabVisible = 0;				//Stores the status of whySponsorUsTab 
var aboutUsTabVisible = 0;					//Stores the status of aboutUsTab
var contactUsTabVisible = 0;				//Stores the status of contactUsTab
var galleryDropdownVisible = 0;			//Stores the status of galleryDropdownTab
var sponsorsDropdownVisible = 0;					//Stores the status of sponsorDropdownTab

$(document).ready(function() {
	$('#previous').click(function() {
		if (currentTab) {
        	currentTab.fadeOut(1000);
        	currentDropdown = null;
        	currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        	}
        if (currentDropdown && (sponsorsDropdownVisible == 0)) {
        	currentDropdown.slideToggle(1000);
        	currentDropdown = null;
        	currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        }
		if(sponsorsDropdownVisible == 0) {
			$('#logo').fadeOut(1000);
        	$('#description').fadeOut(1000);
			$('#sponsor-dropdown').delay(1000).slideToggle("slow");
			currentDropdown = $('#sponsor-dropdown');
			currentTab = null;
			sponsorsDropdownVisible = 1;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
		}
		else {
			$('#sponsor-dropdown').delay(1000).slideToggle("slow");
			$('#logo').delay(1000).fadeIn(1000);
			$('#description').delay(1000).fadeIn(1000);
			currentDropdown = null;
			currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
		}
	});
	$('#photo-gallery').click(function() {
		if (currentTab) {
        	currentTab.fadeOut(1000);
        	currentDropdown = null;
        	currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        	}
        if (currentDropdown && (galleryDropdownVisible == 0)) {
        	currentDropdown.slideToggle(1000);
        	currentDropdown = null;
        	currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        }
		if(galleryDropdownVisible == 0) {
			$('#logo').fadeOut(1000);
        	$('#description').fadeOut(1000);
			$('#gallery-dropdown').delay(1000).slideToggle("slow");
			currentDropdown = $('#gallery-dropdown');
			currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 1;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
		}
		else {
			$('#gallery-dropdown').delay(1000).slideToggle("slow");
			$('#logo').delay(1000).fadeIn(1000);
			$('#description').delay(1000).fadeIn(1000);
			currentDropdown = null;
			currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
		}
	});
	/*$('#photo-gallery').click(function() {
		$('#gallery-dropdown').slideToggle("slow");
		currentTab = null;
		sponsorsDropdownVisible = 0;
		galleryDropdownVisible = 0;
	});*/

	//CLOSE BUTTON FOR SPONSOR DROPDOWN
	$('#close-sponsor-dropdown').click(function() {
		$('#sponsor-dropdown').slideToggle("slow");
		$('#logo').fadeIn(1000);
		$('#description').fadeIn(1000);
		currentDropdown = null;
		currentTab = null;
		sponsorsDropdownVisible = 0;
		galleryDropdownVisible = 0;
		aboutUsTabVisible = 0;					
		contactUsTabVisible = 0;
		whySponsorUsTabVisible = 0;
	});

	//CLOSE BUTTON FOR GALLERY DROPDOWN
	$('#close-gallery-dropdown').click(function() {
		$('#gallery-dropdown').slideToggle("slow");
		$('#logo').fadeIn(1000);
		$('#description').fadeIn(1000);
		currentDropdown = null;
		currentTab = null;
		sponsorsDropdownVisible = 0;
		galleryDropdownVisible = 0;
		aboutUsTabVisible = 0;					
		contactUsTabVisible = 0;
		whySponsorUsTabVisible = 0;
	});
	//CLOSE BUTTON FOR EACH TAB
	$('#close-button1').click(function() {
		currentTab.fadeOut(1000);
		$('#logo').fadeIn(1000);
		$('#description').delay(1000).fadeIn(1000);
		currentDropdown = null;
		currentTab = null;
		sponsorsDropdownVisible = 0;
		galleryDropdownVisible = 0;
		aboutUsTabVisible = 0;					
		contactUsTabVisible = 0;
		whySponsorUsTabVisible = 0;
	});

	$('#close-button2').click(function() {
		currentTab.fadeOut(1000);
		$('#logo').fadeIn(1000);
		$('#description').delay(1000).fadeIn(1000);
		currentDropdown = null;
		currentTab = null;
		sponsorsDropdownVisible = 0;
		galleryDropdownVisible = 0;
		aboutUsTabVisible = 0;					
		contactUsTabVisible = 0;
		whySponsorUsTabVisible = 0;
	});

	$('#close-button3').click(function() {
		currentTab.fadeOut(1000);
		$('#logo').fadeIn(1000);
		$('#description').delay(1000).fadeIn(1000);
		currentDropdown = null;
		currentTab = null;
		sponsorsDropdownVisible = 0;
		galleryDropdownVisible = 0;
		aboutUsTabVisible = 0;					
		contactUsTabVisible = 0;
		whySponsorUsTabVisible = 0;
	});

	//FOR TOGGLING WHY SPONSOR US TAB
	$('#whysponsorus').click(function() {
        if (currentTab && (whySponsorUsTabVisible == 0)) {
        	currentTab.fadeOut(1000);
        	currentDropdown = null;
        	currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        	}
        if (currentDropdown) {
        	currentDropdown.slideToggle(1000);
        	currentDropdown = null;
        	currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        }
        if (whySponsorUsTabVisible == 0) {
        	$('#logo').fadeOut(1000);
        	$('#description').fadeOut(1000);
        	$('#whysponsorus-tab').delay(1000).fadeIn(1000);
        	currentTab=$('#whysponsorus-tab');
        	currentDropdown = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 1;

        }
        else {
        	currentTab.fadeOut(1000);
			$('#logo').delay(1000).fadeIn(1000);
			$('#description').delay(1000).fadeIn(1000);
			currentTab = null;
        	currentDropdown = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        }
    });
	//FOR TOGGLING CONTACT US TAB
    $('#contactus').click(function() {
        if (currentTab && (contactUsTabVisible == 0)) {
        	currentTab.fadeOut(1000);
        	currentDropdown = null;
        	currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        	}
        if (currentDropdown) {
        	currentDropdown.slideToggle(1000);
        	currentDropdown = null;
        	currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        }
        if (contactUsTabVisible == 0) {
        	$('#logo').fadeOut(1000);
        	$('#description').fadeOut(1000);
        	$('#contactus-tab').delay(1000).fadeIn(1000);
        	currentTab=$('#contactus-tab');
        	currentDropdown = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 1;
			whySponsorUsTabVisible = 0;

        }
        else {
        	currentTab.fadeOut(1000);
			$('#logo').delay(1000).fadeIn(1000);
			$('#description').delay(1000).fadeIn(1000);
			currentTab = null;
        	currentDropdown = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        }
    });

    $('#aboutus').click(function() {
        if (currentTab && (aboutUsTabVisible == 0)) {
        	currentTab.fadeOut(1000);
        	currentDropdown = null;
        	currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisisble = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        	}
        if (currentDropdown) {
        	currentDropdown.slideToggle(1000);
        	currentDropdown = null;
        	currentTab = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisisble = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        }
        if (aboutUsTabVisible == 0) {
        	$('#logo').fadeOut(1000);
        	$('#description').fadeOut(1000);
        	$('#aboutus-tab').delay(1000).fadeIn(1000);
        	currentTab=$('#aboutus-tab');
        	currentDropdown = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 1;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;

        }
        else {
        	currentTab.fadeOut(1000);
			$('#logo').delay(1000).fadeIn(1000);
			$('#description').delay(1000).fadeIn(1000);
			currentTab = null;
        	currentDropdown = null;
			sponsorsDropdownVisible = 0;
			galleryDropdownVisible = 0;
			aboutUsTabVisible = 0;					
			contactUsTabVisible = 0;
			whySponsorUsTabVisible = 0;
        }
    });

    /*FOR TOGGLING AAVISHKAAR TAB
    $('#aavishkaar').click(function() {
        if (currentTab) {
        		currentTab.fadeOut(1000);
        }
        if (aavishkaarTabVisible == 0) {
        	$('#logo').fadeOut(1000);
        	$('#description').fadeOut(1000);
        	$('#aavishkaar-tab').delay(1000).fadeIn(1000);
        	currentTab=$('#aavishkaar-tab');
        	aavishkaarTabVisible = 1;
        	whySponsorUsTabVisible = 0;
        	wheelsTabVisible = 0;
        }
        else {
        	currentTab.fadeOut(1000);
			$('#logo').delay(1000).fadeIn(1000);
			$('#description').delay(1000).fadeIn(1000);
			aavishkaarTabVisible = 0;
			currentTab = null;
        }
    });

    //FOR TOGGLING WHEELS TAB
    $('#wheels').click(function() {
        if (currentTab) {
        		currentTab.fadeOut(1000);
        	}
        if (wheelsTabVisible == 0) {
        	$('#logo').fadeOut(1000);
        	$('#description').fadeOut(1000);
        	$('#wheels-tab').delay(1500).fadeIn(1000);
        	currentTab=$('#wheels-tab');
        	wheelsTabVisible = 1;
        	aavishkaarTabVisible = 0;
        	whySponsorUsTabVisible = 0;
        }
        else {
        	currentTab.fadeOut(1000);
			$('#logo').delay(1000).fadeIn(1000);
			$('#description').delay(1000).fadeIn(1000);
			wheelsTabVisible = 0;
			currentTab = null;
        }
    });*/
});


/*****************************************************************************
	TICKER - ADD YOUR TEXT HERE
******************************************************************************/

(function(a){a.fn.airport=function(g,n){var b=a.extend({transition_speed:1000,loop:true,fill_space:false,colors:null},n),m=a(this),j=["a","b","c","d","e","f","g"," ","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","-","1","2","3","4","5","6","7","8","9","0"],h,c,d=0,i=g.length,f=g.length;function e(p,o){return p+new Array(o-p.length+1).join(" ")}m.empty();while(i--){if(g[i].length>d){d=g[i].length}}while(f--){g[f]=e(g[f],d)}h=d;while(h--){var k=document.createElement("span");k.className="c"+h;m.prepend(k)}if(b.colors){c=b.colors.replace(/\s+/g,"").split(",")}function l(x,w,v,u){var q=m.find(".c"+x),r=g[v]?g[v].substring(u,u+1):null,p,s,o=g[v]?a.trim(g[v]).length:null,t=g[v-1]?a.trim(g[v-1]).length:a.trim(g[0]).length;if(v>=g.length){if(!b.loop){clearTimeout(p);return}p=setTimeout(function(){l(0,0,0,0)},10)}else{if(u>=d){p=setTimeout(function(){if(b.colors){s=c[~~(Math.random()*c.length)];m.css("color",s.substring(0,1)==="#"?s:"#"+s)}l(0,0,v+1,0)},b.transition_speed)}else{q.html((j[w]===" ")?"&nbsp;":j[w]);p=setTimeout(function(){if(w>j.length){l(x+1,0,v,u+1)}else{if(j[w]!==r.toLowerCase()){l(x,w+1,v,u)}else{q.html((r===" "&&b.fill_space)?"&nbsp;":r);if(o<t){if(x>o){for(x;x<t;x++){m.find(".c"+x).html("")}u=d}}l(x+1,0,v,u+1)}}},10)}}}l(0,0,0,0)}})(jQuery);

/*TICKER add your text here*/

$(".ticker").airport([ "revolutionize","innovate","ideate", ]);






