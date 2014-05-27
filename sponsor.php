<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sponsor Flip Wall With jQuery &amp; CSS | Tutorialzine demo</title>

<link rel="stylesheet" type="text/css" href="css/sponsor.css" />
<link rel="stylesheet" type="text/css" href="css/font.css">

<script type="text/javascript" src="js/jquery.min-1.4.2.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.flip.min.js"></script>
<script type="text/javascript" src="js/sponsor.js"></script>

</head>

<body>
<h1>PREVIOUS SPONSORS of <span style="font-family:fontastique;font-size:1.2em">tathva</span></h1>


<div id="main">

	<div class="sponsorListHolder">

		
        <?php
			include './include/sponsor-list.txt';
			// Looping through the array:
			echo '<div class="sponsor" title="Click to flip">
					<div class="sponsorFlipLogo">
						<img src="img/tathva.jpg" style="float:left" height="160px" width="160px">
					</div>
				  </div>';
			foreach($sponsors as $company)
			{
				echo'
				<div class="sponsor" title="Click to flip">
					
					<div class="sponsorFlip">
						<img src="img/sponsors/'.$company[0].'.png" alt="More about '.$company[0].'" />
					</div>

					
					<div class="sponsorData">
						<div class="sponsorURL">
							<a href="http://'.$company[1].'" target="_blank">Go to site</a>
						</div>
					</div>
				</div>
				
				';
			}
		
		?>

        
        
    	<div class="clear"></div>
    </div>

</div>



</body>
</html>
