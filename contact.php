<?php
		
		session_name("fancyform");
		session_start();
		
		
		$_SESSION['n1'] = rand(1,20);
		$_SESSION['n2'] = rand(1,20);
		$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];
		
		
		$str='';
		if($_SESSION['errStr'])
		{
			$str='<div class="error">'.$_SESSION['errStr'].'</div>';
			unset($_SESSION['errStr']);
		}
		
		$success='';
		if($_SESSION['sent'])
		{
			$success='<h1>Thank you!</h1><br /><p>We will get back to you shortly!</p>';
			
			$css='<style type="text/css">#ContactMe{display:none;}</style>';
			
			unset($_SESSION['sent']);
		}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Val Hotel | Contact us</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="styles/style.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.2.min.js"></script>
<?php include('contact-config.inc'); ?>
<script type="text/javascript">

/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/

function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 2000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 4000 );
});

</script>

<style type="text/css">

/*** set the width and height to match your images **/

#slideshow {
    position:relative;
    height:339px;
	width:775px;
	float: left;
}


#slideshow IMG {
    position:absolute;
    z-index:8;
    opacity:0.0;
	float: left;
}

#slideshow IMG.active {
    z-index:10;
    opacity:1.0;
}

#slideshow IMG.last-active {
    z-index:9;
}

</style>
</head>
<body>
<div id="page">
	<div id="nav">
		<ul>
			<li class="home"><a href="index.htm"></a></li>
			<li class="hotel"><a href="accomodation.htm" alt="The Hotel"></a></li>
			<li class="about"><a href="history.htm" alt="About Val"></a></li>
			<li class="weddings"><a href="weddings.htm" alt="Weddings"></a></li>
			<li class="events"><a href="events.htm" alt="Events"></a></li>
			<li class="contact">
			<a href="contact.php" alt="Contact us" class="selected"></a></li>
		</ul>
	</div>
	<div id="slideshow"><img src="images/contact-1.jpg" alt="Slideshow Image 1" class="active" />
    <img src="images/contact-2.jpg" alt="Slideshow Image 2" />
    <img src="images/contact-3.jpg" alt="Slideshow Image 3" />
    <img src="images/contact-4.jpg" alt="Slideshow Image 4" />
    <img src="images/contact-5.jpg" alt="Slideshow Image 5" />
    <img src="images/contact-6.jpg" alt="Slideshow Image 6" />
    
    
    </div>
	<div id="content">
		<h1>Contact Us</h1>
		<p>Andr&eacute; and Rita Britz<br />
Cell: 082 550 5540<br />
Email: <a href="mailto:info@valhotel.co.za">info@valhotel.co.za</a></p>
		<p>Download a <a href="images/val-map.pdf">Map</a><br />
		<br />

<div id="contact-area">
<?php
	include("contactform.php");

?>
</div>
			
			<br /><br />

<iframe width="755" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.za/maps?q=val+hotel&amp;hl=en&amp;cd=1&amp;ei=90aOTMGLEYz8OfOOjbAL&amp;ie=UTF8&amp;view=map&amp;cid=15064855532450483677&amp;ved=0CB4QpQY&amp;hq=val+hotel&amp;hnear=&amp;ll=-26.797106,28.935242&amp;spn=0.551614,0.95993&amp;z=10&amp;iwloc=A&amp;output=embed"></iframe>
<br />
	    </p>
<h2>Directions</h2>
		<strong>From Johannesburg: </strong>Take the N3 towards Heidelberg. On the other side of Heidelberg, turn Left on the R23, in the Balfour, Standerton direction. Go past Balfour and past Greylingstad. After Greylingstad, turn LEFT on the R547, marked "KINROSS". Continue 8km's, go across the railway bridge, and turn Right into the Village of VAL.<br /><br />
          <strong>From Pretoria: </strong>Go on the R50 towards Bapsfontein, continue along the R50 to Delmas and Leandra. After Leandra, look out for the R547 marked "BALFOUR" and turn right. Continue 28km's. Just before the grain silo's and railway bridge, turn LEFT into the village of VAL.<br /><br />
          <strong>From Durban: </strong>Travel to Standerton. Take the R23 towards Heidelberg. Continue 40km's and turn right on the R547 on the road marked "KINROSS". Drive for 8 km's, go across the railway bridge, and turn RIGHT into the village of VAL. 

      <h2>GPD Co-ordinates:</h2>
      <p>
            S26 degrees, 47 min, 48.5 sec<br />
            E28 degrees, 56 min, 08 sec
     
	  </p>
      
      <h3>Important Information</h3>
	  <p class="small">
&bull;	Local community Emergency Services: 082 457 1705, 082 783 4591<br />
&bull;	Val Police Station: 0177023005, 0177023017<br />
&bull;	Ambulance: 10177<br />
&bull;	Police: 10111<br />
&bull;	In case of difficulties with an emergency call: 1022<br />
&bull;	Fire: 082 924 2826, or 083 630 8090<br />
&bull;	Mar-Peh Clinic, Standerton: (30mins drive) 11 Princess Street, Standerton<br />
&bull;	Doctor: 0177122007<br />
&bull;	Andre: 082 461 3119<br />
&bull;	Rita: 082 550 5540<br />
&bull;	Gideon: 073 164 5271<br />
&bull;	July: 071 645 8440<br />
&bull;	We have a basic first aid kit on the premises.
</p>
	</div>
	<div id="footer">
		<p>Andr&eacute; &amp; Rita Britz<br />Cell: 082 550 5540<br />
		Email: <a href="mailto:info@valhotel.co.za">info@valhotel.co.za</a></p>
		<p class="links"><img src="images/footer-img.jpg" /><ul>
			<li class="facebook"><a href="http://www.facebook.com/#!/pages/Val-Hotel/104430946272563?ref=search" target="_blank" alt="Visit our Facebook Page"></a></li>
			<li class="omdraai"><a href="http://www.ommidraai.co.za/" target="_blank" alt="Omdraai"></a></li>
		</ul></p>
		<p class="nicework">made by <a href="http://www.nicework.co.za" target="_blank">nicework</a></p>
	</div>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18515699-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>