<?php
include_once('kon/konnektive.php');
$kon = new KON();

if($kon->mobileDetect() == "phone"):
    header("Location: ./m");
    exit();
endif;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Restore CBD Gummies</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

<link rel="stylesheet" type="text/css" href="css/upsell.css">

<script type="text/javascript">
	function getDate(days) {      
	var monthNames = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");    
	var now = new Date();   
	now.setDate(now.getDate() + days);   
	var nowString =  monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear();   
	document.write(nowString); 
	}
</script>

<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
</head>

<body>

<div class="top-sec">
    <div class="container">
        <p>FREE BONUS BOTTLES UNLOCKED - DO NOT CLOSE THIS WINDOW!</p>
    </div>
</div>

<div class="header">
	<div class="container">
    	<img src="images/logo.png" class="logo">
        <img src="images/upsell-stp1.png" class="chk-stp">
        <img src="images/h-secure-up.png" class="h-secure">
    </div>
</div>

<div class="up-top-hdng">
    <div class="container">
        <p class="up-hdng-txt1" style="font-size:30px;"><img src="images/left-arw.png" class="left-arw tadda"> <span>This 6000-Year Old Indian Herb Helps Relieve Stress, Sleep <br>and Mood Concerns In A Delicious Nighttime Gummy </span> <img src="images/rgt-arw.png" class="rgt-arw taddaR"></p>
        <p class="up-hdng-txt2">Add These <u>Breakthrough Ashwagandha Gummies</u> To Your Order To Relax Easier, Sleep <br>Better, and Wake Up Refreshed. Try Now and <span>Get 2 FREE Bottles On Us ! </span></p>
    </div>
</div>

<div class="up-sec1">
	<div class="container">
    	<div class="up-s1-Box">
        	<div class="up-s1-lft">
            	<p class="ups1-txt1"><img src="images/fls-img.png" class="fls-img"> This Offer Will Never Be Available Again!   <img src="images/fls-img.png" class="fls-img"></p>
                <p class="ups1-txt2">Buy 2 + <u>Get 2 Free</u>  <br><span>For Just $34.50 Each</span></p>
                
                
                <ul class="up-s1-list">
                	<li>Helps Relax Mind & Body Quickly</li>
                    <li>Promotes Healthy Sleep Cycles</li> 
                    <li>Restores The Body</li> 
                    <li>Wake Up Refreshed</li>  
                </ul>
                <div class="clearall"></div>
                <div class="save-strip"><img src="images/up-tymtk.png" class="up-tymtk"> <p> Your FREE Bottles Reserved For <img src="images/wtch.png" class="wtch"> <span id="stopwatch">00:00</span> Minutes</p></div>
                <div class="up-prcBox">
                    <div class="prcDv prcDvline">
                        <div class="rtl-prc">
                        	<p class="prc-txt">Retail Price:</p>
                            <div class="float-prc1">$276 <img src="images/up-red-line.png" class="up-redcut"></div>
                        </div>
                    </div>
                    <div class="prcDv">
                        <div class="rtl-prc ofr-prc">
                        	<p class="prc-txt">Offer Price:</p>
                            <div class="float-prc1">$34.50<small>/ea</small></div>
                        </div>
                    </div>
               	</div>
                <p class="up-tot-prc">Total Price: $138</p>
                <div class="clearall"></div>
				<div class="btn-box">
                    <a href="kon/process.php?page=upsell&step=up2" class="packageBtn pulse getEmail">
                        <p>Yes! Add To My Order!</p>
                        <img src="images/btn-arw.png" alt="" class="btn-arw">
                    </a>
            	</div> 
            </div>
            
            <div class="up-s1-rght">
            	<img src="images/up-prod2.png" class="up1-s1-prod">
                <p class="buy-txt">Buy 2<br> <img src="images/up-plus.png"> <br>Get 2 Free</p>
                <img src="images/up-prod2-free.png" class="up1-s1-prod">
            </div>
            
        </div>
        <div class="clearall"></div>
        <a href="downsell-2.php" class="no-thank"><img src="images/no-thnx.png"> No thanks, I don't want to get better results & save money!  </a>
    </div>
</div>


<!--==========footer==========-->

<div class="footer">
	<div class="container">
    	<p class="ftr-txt">   
            <a href="#" data-fancybox data-src="#terms">Terms and Conditions</a>  |  <a href="#" data-fancybox data-src="#privacy">Privacy Policy</a>  |  <a href="#" data-fancybox data-src="#contact">Contact Us</a>
        </p>
        
        <p class="ftr-txt2">&copy; <script>document.write(new Date().getFullYear())</script> Restore CBD Gummies. All Rights Reserved</p>
        
    </div>
</div>


<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
		
	var spd = 100;
	var spdVal = 10;
	var cntDown = 5 * 60 * spdVal;
	setInterval(function () {
		var mn, sc, ms;
		cntDown--;
		if(cntDown < 0) {
			return false;
		}
		mn = Math.floor((cntDown / spdVal) / 60 );
		mn = (mn < 10 ? '0' + mn : mn);
		sc = Math.floor((cntDown / spdVal) % 60);
		sc = (sc < 10 ? '0' + sc : sc);
		ms = Math.floor(cntDown % spdVal);
		ms = (ms < 10 ? '0' + ms : ms);
		var result = mn + ':' + sc;
		document.getElementById('stopwatch').innerHTML = result;
	}, spd);

								
});

</script>


<?php include_once('footer-modal.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>
</html>
