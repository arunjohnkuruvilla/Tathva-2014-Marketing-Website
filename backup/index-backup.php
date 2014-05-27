<!DOCTYPE html>
<html> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
    <title>Tathva '14</title> 
    <meta name="description" content=""> 
    <meta name="keywords" content="tathva, tathva14, tathva '14, marketing">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">

    <!--STYLESHEETS--> 
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/circular-buttons.css" />
    <link rel="stylesheet" type="text/css" href="css/font.css">

    <!--BACKGROUND SLIDE-->
    <link rel='stylesheet' id='fluid_dg-css'  href='css/slide.css' type='text/css' media='all' /> 
    
    <!-- GALLERY -->
    <link rel="stylesheet" type="text/css" href="css/swipebox.css" />
    <link rel="stylesheet" type="text/css" href="css/gallery.css" />
    
    <!--FACEBOOK BUTTONS-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <!--SPONSOR LIST FOR PREVIOUS SPONSORS TAB-->
    <?php include'./include/sponsor-list.txt';?>
</head>

<body>

    <!--NAVIGATION BAR-->
    <nav class="navbar-fixed-top" style="">
        <div id="facebook-like"><div class="fb-like" data-href="https://www.facebook.com/tathva" data-width="50" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></div>
    	<div id="tathva13"><a>TATHVA '13</a></div>
        <!--<div id="contact"><a>CONTACT</a></div>-->
        <div id="photo-gallery"><a>GALLERY</a></div>
        <div id="previous"><a>PREVIOUS SPONSORS</a></div>
    </nav>
    <!--NAVIGATION BAR ENDS HERE-->

    <!--CONTACT DROPDOWN
    <div id="contact-dropdown" style="color:white;font-family:Century Gothic;font-size:1.4em">
        <div class="full-width" style="padding-top:0.8em">OUR TEAM</div>
        <div class="full-width" style="padding-top:0.8em">Marketting</div>
        <div class="one-third-width" style="float:right;padding:0.8em 0 0.8em">
            <p>JOHN SMITH</p>
            <p style="font-size:0.8em">9876543210</p>
            <p style="font-size:0.8em">abc@tathva.org</p>
        </div>
        <div class="one-third-width" style="float:right;padding:0.8em 0 0.8em;">
            <p>JOHN SMITH</p>
            <p style="font-size:0.8em">9876543210</p>
            <p style="font-size:0.8em">abc@tathva.org</p>
        </div>
        <div class="one-third-width" style="float:right;padding:0.8em 0 0.8em;">
            <p>JOHN SMITH</p>
            <p style="font-size:0.8em">9876543210</p>
            <p style="font-size:0.8em">abc@tathva.org</p>
        </div>
        <div class="full-width" style="padding-top:1em">Public Relations</div>
        <div class="one-half-width" style="float:right;padding:0.8em 0 0.8em;">
            <p>JOHN SMITH</p>
            <p style="font-size:0.8em">9876543210</p>
            <p style="font-size:0.8em">abc@tathva.org</p>
        </div>
        <div class="one-half-width" style="float:right;padding:0.8em 0 0.8em;">
            <p>JOHN SMITH</p>
            <p style="font-size:0.8em">9876543210</p>
            <p style="font-size:0.8em">abc@tathva.org</p>
        </div>
        <div class="one-quarter-width" style="float:right;padding:0.8em 0 0.8em;">
            <p style="padding-top:0.5em">Workshops</p>
            <p>JOHN SMITH</p>
            <p style="font-size:0.8em">9876543210</p>
            <p style="font-size:0.8em">abc@tathva.org</p>
        </div>
        <div class="one-quarter-width" style="float:right;padding:0.8em 0 0.8em;">
            <p style="padding-top:0.5em">Aavishkaar</p>
            <p>JOHN SMITH</p>
            <p style="font-size:0.8em">9876543210</p>
            <p style="font-size:0.8em">abc@tathva.org</p>
        </div>
        <div class="one-quarter-width" style="float:right;padding:0.8em 0 0.8em;">
            <p style="padding-top:0.5em">Lectures</p>
            <p>JOHN SMITH</p>
            <p style="font-size:0.8em">9876543210</p>
            <p style="font-size:0.8em">abc@tathva.org</p>
        </div>
        <div class="one-quarter-width" style="float:right;padding:0.8em 0 0.8em;">
            <p style="padding-top:0.5em">Overseas Contact</p>
            <p>JOHN SMITH</p>
            <p style="font-size:0.8em">9876543210</p>
            <p style="font-size:0.8em">abc@tathva.org</p>
        </div>
        <div class="full-width" style="padding-top:0.8em 0.8em 0.8em;">for further enquiries contact <b>info@tathva.org</b></div>
    </div>
    <!--CONTACT DROPDOWN ENDS HERE-->

    <!--SPONSOR DROPDOWN-->
    <div id="sponsor-dropdown" style="color:white;font-family:Century Gothic;font-size:1.4em;">
        <div style="width:100%;height:93%;background: rgba(0, 0, 0,0.9);">
            <div class="sponsorListHolder">
                <?php        
                    foreach($sponsor as $company)
                    {
                    echo'
                        <div class="sponsor" title="Click to flip">
                            <div class="sponsorFlip">
                                <img src="img/sponsors/'.$company[0].'.png" width="120px" height="120px" style="left:3.1em">
                            </div>
                            <div class="sponsorData">
                                <div class="sponsorDescription">
                                    '.$company[1].'
                                </div>
                                <div class="sponsorURL">
                                    <a href="'.$company[2].'">'.$company[2].'</a>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                ?>
            </div>
        </div>
        <div id="close-sponsor-dropdown" style="width:100%;height:7%;background: rgba(0, 0, 0,0.9);">
            <img src="img/up-arrow-icon.png" height="35px" width="35px" style="margin:0 auto">
        </div>    
    </div>
    <!--SPONSOR DROPDOWN ENDS HERE-->

    <!--GALLERY DROPDOWN-->
    <div id="gallery-dropdown">
        <div style="width:100%;height:93%; background: rgba(0, 0, 0,0.5);">
            <div style="padding:10px 10px 10px 10px">
                <div id="loading"></div>
                <div id="gallery"></div>
            </div>
        </div>
        <div id="close-gallery-dropdown" style="width:100%;height:7%;">
            <img src="img/up-arrow-icon.png" height="35px" width="35px" style="margin:0 auto">
        </div>
    </div>
    <!--GALLERY DROPDOWN ENDS HERE-->

    <!--CONTENT-->
    <div id="content">

        <!--TATHVA LOGO-->
            <div id="logo">
            <section id="ticker">
                <span data-wow-offset="80" data-wow-duration="2s" style="visibility: visible;-webkit-animation-duration: 2s;font-size:6.5em; -moz-animation-duration: 2s; animation-duration: 2s;font-family:'fontastique' !important;color:#fff;">
                    <img src="img/logo.png">tathva '14
                </span>
                <br>
                <span style="font-size:3em;color:white;">
                    <span class="ticker"></span>
                </span>
            </section>
                <div class="fb-like" data-href="https://www.facebook.com/tathva" data-width="50" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
            </div>
        <!--TATHVA LOGO ENDS HERE-->

        <div style="position:fixed;top:4em;right:2em;z-index:100000;font-size:1.3em;color:red">PLEASE NOTE:This is for illustrative purposes only...the actual images, icons and text will vary</div>

        <!--DESCRIPTION TAB-->
        <div id="description">
            <p style=" color:white; text-align:center;font-size:1.3em; padding:1em 1em 1em;">
                The month of October brings with it the tidings of 
                <b>Tathva, the Techno-Management festival at NIT Calicut</b>. 
                <br>Technology par excellence- the aim of Tathva '14, comes with a whole range of innovative events lined up and promises to be bigger than before. 
            </p>
        </div>
        <!--DESCRIPTION TAB ENDS HERE-->

    </div>
    <!--CONTENT ENDS HERE-->

        

        <!--AAVISHKAAR TAB
        <div id="aavishkaar-tab">
            <div style="position:realtive; height:55%; width:55%; float:left; background:rgba(0,0,0,0.4)" >
                AAVISHKAAR
            </div>
            <div style="position:realtive; height:100%; width:45%; float:right; background-color:yellow" >
                
            </div> 
            <div style="position:realtive; height:45%; width:55%; float:left; background:rgba(0,0,0,0.4)" >
                <center><h1 style="font-family:Century Gothic; color:white; margin-bottom:0px">PREVIOUS SPONSORS</h1></center>
                <div class="sponsorListHolder">
                <?php        
                    foreach($aavishkaarSponsor as $company)
                    {
                    echo'
                        <div class="sponsor" title="Click to flip">
                            <div class="sponsorFlip">
                                <img src="img/sponsors/'.$company[0].'.png" width="120px" height="120px">
                            </div>
                            <div class="sponsorData">
                                <div class="sponsorDescription">
                                    '.$company[1].'
                                </div>
                                <div class="sponsorURL">
                                    <a href="'.$company[2].'">'.$company[2].'</a>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                ?>
                </div>
            </div> 
            <div id="close-button1" style="position:absolute; right:0px; top:0px"><img src="img/close-button.png"></div>       
        </div>
        <!--AAVISHKAAR TAB ENDS HERE-->

        <!--WHEELS TAB
        <div id="wheels-tab">
            <div style="position:realtive; height:55%; width:55%; float:left; background-color:blue" >
                <p style="color:#fff; font-family:Eurostile; font-size:1.6em; text-align: center; padding: 1em">WHEELS</p>
                <p style="color:#fff; font-family:Eurostile; font-size:1.1em; padding: 0 1em 1em">Wheels is an annual auto-tech show, the largest of its kind in India, conducted at National Institute of Technology Calicut as a part of Tathva, its techno-management festival. 
                <br>With tons of exotic and vintage cars, superbikes, off roaders, vehicle component expo and automobile workshops and talks, it pulls a large crowd from all over the country.
                </p>
            </div>
            <div style="position:realtive; height:100%; width:45%; float:right; background-color:yellow">
                
            </div> 
            <div style="position:realtive; height:45%; width:55%; float:left; background-color:green" >
                <center><h1 style="font-family:Century Gothic; color:white; margin-bottom:0px">PREVIOUS SPONSORS</h1></center>
                <div class="sponsorListHolder">
                <?php        
                    foreach($wheelsSponsor as $company)
                    {
                    echo'
                        <div class="sponsor" title="Click to flip">
                            <div class="sponsorFlip">
                                <img src="img/sponsors/'.$company[0].'.png" width="120px" height="120px">

                            </div>
                            <div class="sponsorData">
                                <div class="sponsorDescription">
                                    '.$company[1].'
                                </div>
                                <div class="sponsorURL">
                                    <a href="'.$company[2].'">'.$company[2].'</a>

                                </div>
                            </div>
                        </div>
                        ';
                    }
                ?>
                </div>
            </div> 
            <div id="close-button2" style="position:absolute; right:0px; top:0px"><img src="img/close-button.png"></div>       
        </div>
        <!--WHEELS TAB ENDS HERE-->

        <!--WHYSPONSORUS TAB-->
        <div id="whysponsorus-tab">
            <!--<div style="position:realtive; height:68%; width:40%; float:left; background:rgba(0,0,0,0.4);">
                <div id="logo-area">
                    <nav id="logo-tathva">
                    <ul>
                    <li>
                        <a>
                            <span>
                                <img src="img/tathva.jpg" height="150px" width="150px" class="circular" >
                            </span>
                        </a>
                    </li>
                    </ul>
                    </nav>
                </div>
                <div>
                    <p style="color:white; font-family:Century Gothic; font-size:1.2em; padding: 0em 1em 1em;text-align:center;">Tathva is a three day technical fest held in October every year. <br>It provides an excellent platform for students to showcase their technical and management skills</p>
                </div>
            </div>-->
            <div style="position:realtive; height:50%; width:100%; float:right; background:rgba(0,0,0,0.4);"> 
                <ul style="color:#fff; font-family:Century Gothic; font-size:1.1em; position:relative; padding: 1em 3em 1em; ">
                    Sponsors get the following benefits:
                    <li>Increase in brand visibility</li>
                    <li>Student interaction and product marketing</li>
                    <li>Banners and posters can be put up in the Open Air Theatre and other prominent locations in the campus.</li>
                    <li>Kiosks and stalls can also be allowed in various parts of the campus</li>
                    <li>Be listed on the official event web site and receive a link to your company web site.</li>
                    <li>Receive an enlarged logo on the back of the official event T-shirt</li>
                    <li>Have your enlarged logo appear on all press-printed materials including fliers or brochures and on all web ads.</li>
                </ul>  
            </div> 
            <div style="position:realtive; height:50%; width:100%; float:left; background:rgba(0,0,0,0.4); padding: 0 auto">
                <div id="stat-area">
                    <p style="padding-bottom:0.5em; font-family:Century Gothic; font-size:1.1em; color:#fff">We offer you</p>
                    <nav id="stat">

                    <ul>

                    <li>
                        <a>
                            <span>
                                <img src="img/bullsandbears.png" height="40px" width="40px" style="padding-top:15px;">
                            </span>
                        </a>
                        <div>30,000+ footfall</div>
                    </li>
                    <li>
                        <a>
                            <span>
                                <img src="img/nites.png" height="40px" width="40px" style="padding-top:15px;">
                            </span>
                        </a>
                        <div>21,000+ likes</div>
                    </li>    
                    <li>
                        <a>
                            <span>
                                <img src="img/eyes.png" height="45px" width="90px" style="padding-top:25px">
                            </span>
                        </a>
                        <div>60,000+ eyes</div>
                    </li>
                </ul>
                </nav>
            </div>
            </div> 
            <div id="close-button3" style="position:absolute; right:0px; top:0px"><img src="img/close-button.png" height="30px" width="30px"></div>       
        </div>
        <!--WHYSPONSORUS TAB ENDS HERE-->

        <!--CONTACT US TAB-->
        <div id="contactus-tab">
            <div class="full-width" style="padding-top:0.8em; font-size:1.1em">OUR TEAM</div>
            <div class="full-width" style="padding-top:0.8em; font-size:1.1em">Marketting</div>
            <div class="one-third-width" style="float:right;padding:0.8em 0 0.8em">
                <p>JOHN SMITH</p>
                <p style="font-size:1.1em">9876543210</p>
                <p style="font-size:1.1em">abc@tathva.org</p>
            </div>
            <div class="one-third-width" style="float:right;padding:0.8em 0 0.8em;">
                <p>JOHN SMITH</p>
                <p style="font-size:1.1em">9876543210</p>
                <p style="font-size:1.1em">abc@tathva.org</p>
            </div>
            <div class="one-third-width" style="float:right;padding:0.8em 0 0.8em;">
                <p>JOHN SMITH</p>
                <p style="font-size:1em">9876543210</p>
                <p style="font-size:1em">abc@tathva.org</p>
            </div>
            <div class="full-width" style="float:left;padding-top:0.8em">Public Relations</div>
            <div class="one-half-width" style="float:right;padding:0.8em 0 0.8em;">
                <p>JOHN SMITH</p>
                <p style="font-size:1em">9876543210</p>
                <p style="font-size:1em">abc@tathva.org</p>
            </div>
            <div class="one-half-width" style="float:right;padding:0.8em 0 0.8em;">
                <p>JOHN SMITH</p>
                <p style="font-size:1em">9876543210</p>
                <p style="font-size:1em">abc@tathva.org</p>
            </div>
            <div class="one-quarter-width" style="float:right;padding:0.8em 0 0.8em;">
                <p style="padding-top:0.5em">Workshops</p>
                <p>JOHN SMITH</p>
                <p style="font-size:1em">9876543210</p>
                <p style="font-size:1em">abc@tathva.org</p>
            </div>
            <div class="one-quarter-width" style="float:right;padding:0.8em 0 0.8em;">
                <p style="padding-top:0.5em">Aavishkaar</p>
                <p>JOHN SMITH</p>
                <p style="font-size:1em">9876543210</p>
                <p style="font-size:1em">abc@tathva.org</p>
            </div>
            <div class="one-quarter-width" style="float:right;padding:0.8em 0 0.8em;">
                <p style="padding-top:0.5em">Lectures</p>
                <p>JOHN SMITH</p>
                <p style="font-size:1em">9876543210</p>
                <p style="font-size:1em">abc@tathva.org</p>
            </div>
            <div class="one-quarter-width" style="float:right;padding:0.8em 0 0.8em;">
                <p style="padding-top:0.5em">Overseas Contact</p>
                <p>JOHN SMITH</p>
                <p style="font-size:1em">9876543210</p>
                <p style="font-size:1em">abc@tathva.org</p>
            </div>
            <div class="full-width" style="padding-top:0.8em 0.8em 0.8em;">for further enquiries contact <b>info@tathva.org</b></div>

            <div id="close-button2" style="position:absolute; right:0px; top:0px"><img src="img/close-button.png" height="30px" width="30px"></div>       
        </div>
        <!--CONTACT US ENDS HERE-->

        <!--ABOUT US TAB-->
        <div id="aboutus-tab">
            <div style="position:realtive; height:68%; width:100%; float:left; background:rgba(0,0,0,0.4);">
                <div id="logo-area">
                    <nav id="logo-tathva">
                    <ul>
                    <li>
                        <a>
                            <span>
                                <img src="img/tathva.jpg" height="150px" width="150px" class="circular" >
                            </span>
                        </a>
                    </li>
                    </ul>
                    </nav>
                </div>
                <div>
                    <p style="color:white; font-family:Century Gothic; font-size:1.2em; padding: 0em 1em 1em;text-align:center;">Tathva is a three day technical fest held in October every year. <br>It provides an excellent platform for students to showcase their technical and management skillsGet a piece of the valuable experience of experts in the field of technology at the Lectures. At Workshops, receive hands-on practical knowledge from the visiting dignitaries. A wide range of exciting exhibits from all over the world await your arrival at the Exhibitions. From having fun filled breaks at the Informals stall and cooling off at the Tech Nites to living in the virtual world at The Gaming Arena and getting high with enthusiasm at Wheels - the automobile exhibition, Tathva '14 has a lot to offer. With an expected total turnout of 10000 emerging engineers and managers, this Tathva promises huge exposure to your brand.</p>
                </div>
            </div>
            <div id="close-button1" style="position:absolute; right:0px; top:0px"><img src="img/close-button.png" height="30px" width="30px"></div>       
        </div>
        <!--ABOUT US ENDS HERE-->

        <!--CLUELESS TAB-->
        <!--CLUELESS TAB ENDS HERE-->

        <!--WORKSHOP TAB-->
        <!--WORKSHOP TAB ENDS HERE-->

    <!--BACKGROUND SLIDESHOW-->
	<div class="fluid_container">
        <div class="fluid_dg_wrap fluid_dg_emboss pattern_1 fluid_dg_grey_skin" id="fluid_dg_wrap_4">
        	<div data-src="img/paint_splash_heart-wallpaper-1280x720.jpg"></div>
            <div data-src="img/peace_love_and_happiness-wallpaper-1280x720.jpg"></div>
            <div data-src="img/box_people-wallpaper-1280x720.jpg"></div>
            <div data-src="img/heart_book-wallpaper-1280x720.jpg"></div>
            <div data-src="img/carnations_bouquet_on_a_bench-wallpaper-1280x720.jpg"></div>
            <div data-src="img/silhouette-wallpaper-1280x720.jpg"></div>
            <div data-src="img/image2.jpg"></div>
        </div>
    </div>
    <!--BACKGROUND SLIDESHOW ENDS HERE-->

    <!--BOTTOM ICONS-->
    <div id="icons">
        <div id="social-area">
            <nav id="social">
                <ul>   
                    
                    <li id="whysponsorus">
                        <a href="#" title="HOME">
                            <span >
                                <img src="img/sponsors.png" height="60px" width="60px" style="padding-top:0.5em">
                            </span>
                        </a>
                        <div>WHY SPONSOR US</div>
                    </li>

                    <li id="aboutus">
                        <a href="#" title="HOME">
                            <span >
                                <img src="img/sponsors.png" height="60px" width="60px" style="padding-top:0.5em">
                            </span>
                        </a>
                        <div>ABOUT US</div>
                    </li>

                    <li id="contactus">
                        <a href="#" title="HOME">
                            <span >
                                <img src="img/sponsors.png" height="60px" width="60px" style="padding-top:0.5em">
                            </span>
                        </a>
                        <div>CONTACT US</div>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
    <!--BOTTOM ICONS ENDS HERE-->

    <!--FOOTER-->
    <!--NITC ADDRESS-->
    <div id="footer" style="position:fixed; bottom:1em;left:1em;">
        <div id="nitc">
            <img class="logo" src="img/nitclogo.png"></img>
            <div id="nitc-info" style="font-size:1.2em; color:white">
                NIT Calicut<br/> 
                NIT Campus P. O.<br/> 
                Calicut - 673601<br/>
            <a target="_blank" href="http://www.nitc.ac.in">www.nitc.ac.in</a>  
            </div>
        </div>
    </div>
    <!--COPYRIGHT-->
    <div id="copyright" style="position:fixed; bottom:1em;right:1em; color:white">
        creative<span style="color:red">crew</span>@tathva.org
    </div>
    <!--FOOTER ENDS HERE-->


    <!--SCRIPTS--> 
    <!--SLIDSHOW SCRIPTS-->
    <script type='text/javascript' src='js/jquery-1.7.2.min.js'></script>
    <script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='js/fluid_dg.js'></script> 
    <script>jQuery(document).ready(function(){
		jQuery(function(){			
			jQuery('#fluid_dg_wrap_4').fluid_dg({height: 'auto', loader: 'bar', pagination: false, thumbnails: false, hover: false, opacityOnGrid: false, imagePath: ''});
		}); })
	</script>
    <!--TICKER AND TABS SCRIPTS-->
 	<script type="text/javascript" src="js/scripts.js"></script>
    <!--GALLERY SCRIPTS-->
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/jquery.loadImage.js"></script>
    <script src="js/gallery.js"></script>
       
</body> 
</html>