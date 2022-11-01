<?php
include_once('kon/konnektive.php');
$kon = new KON();
$kon->initSession();

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
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="css/checkout.css">

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
<?php if(isset($_SESSION['errors'])): ?>
<div style="background-color: #e41f1e;padding: 7px 0;"><ul><?php foreach($_SESSION['errors'] as $e){ echo '<li style="color: #fff;font-weight: 700;padding: 7px 0;">'.$e.'</li>'; }?></ul></div>
<?php endif; ?>
<div class="top-strip">
    <div class="container">
        <p><span>WARNING:</span> Due to extremely high media demand, there is limited supply of <span>Restore CBD Gummies</span> in stock as of <script type="text/javascript">getDate(0);</script> <span>HURRY!</span></p>
    </div>
</div>
<div class="header">
	<div class="container">
    	<div class="logoBox">
            <img src="images/logo.png" class="logo">
            <p class="log-tx">The World’s #1<br> <span>CBD Gummies</span></p>
        </div>
        <img src="images/chk-stp1.png" class="chk-stp">
        <img src="images/h-secure.png" class="h-secure">
    </div>
</div>

<div class="chk-section1">
	<div class="container">
    	<div class="chk-sec-inrBx">        	
            <div class="chk-left">
            	<div class="timer-strip"><img src="images/clock-ico.png" class="clock-ico">Limited Time Discount Reserved For 
                <span id="stopwatch">05:00</span> <img src="images/timer-arw.png" class="timer-arw tadda"></div>
                                
                <div class="packBoxOuter active pkg1" id="packageOne">
                    <div class="pcakHeader">
                        <div class="packCheck"><img src="images/tik-blk.svg"></div>
                        <p class="packTitle">Buy 3 Bottles <span>+ Get 2 Free</span></p>
                        <div class="off-rgt">
                        	Sell Out Risk: <span>HIGH</span>
                            <div class="percent_box">
                                <span style="width:14%" class="to-fade"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="packagecontent">
                        <div class="p-box">
                            <img src="images/pack-prod5.png" class="pack-prod">
                            <div class="pluse-icon">+</div>
                            <div class="chk-ofr-seal">Save<br><span class="saveOpt5"></span></div>
                        </div>
                        <div class="packRgt">
                            <div class="prc-bx">
                                <p class="list-prc">Regular Price : <span class="strikeout regularprice5"></span></p>
                                <p class="reglr-prc eachprice5"></p>
                                <p class="perbtl">per bottle</p>
                                <div class="pack-btn">Selected</div>
                                <p class="free-ship-text"><img src="images/ship-ico.png"><strong>Free Shipping</strong></p>
                                <p class="totalPrc">Total: <span class="totalprice5"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="packBoxOuter pkg2" id="packageTwo">
                    <div class="pcakHeader">
                        <div class="packCheck"></div>
                        <p class="packTitle">Buy 2 Bottles <span>+ Get 1 Free</span></p>
                        <div class="off-rgt">
                        	Sell Out Risk: <span>HIGH</span>
                            <div class="percent_box">
                                <span style="width:14%" class="to-fade"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="packagecontent">
                        <div class="p-box">
                            <img src="images/pack-prod3.png" class="pack-prod">
                            <div class="pluse-icon">+</div>
                            <div class="chk-ofr-seal">Save<br><span class="saveOpt3"></span></div>
                        </div>
                        <div class="packRgt">
                            <div class="prc-bx">
                                <p class="list-prc">Regular Price : <span class="strikeout regularprice3"></span></p>
                                <p class="reglr-prc eachprice3"></p>
                                <p class="perbtl">per bottle</p>
                                <div class="pack-btn">Select</div>
                                <p class="free-ship-text"><img src="images/ship-ico.png"><strong>Free Shipping</strong></p>
                                <p class="totalPrc">Total: <span class="totalprice3"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="packBoxOuter package3 pkg3" id="packageThree">
                    <div class="pcakHeader">
                        <div class="packCheck"></div>
                        <p class="packTitle">Buy 1 Bottles</p>
                        <div class="off-rgt">
                        	Sell Out Risk: <span>LOW</span>
                            <div class="percent_box" style="border:1px solid #FFA500;">
                                <span style="width:14%; background:#FFA500;"></span>
                                <span style="width:14%; background:#FFA500;"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="packagecontent">
                        <div class="p-box">
                            <img src="images/pack-prod1.png" class="pack-prod pack-prod1">
                            <div class="chk-ofr-seal">Save<br><span class="saveOpt1"></span></div>
                        </div>
                        <div class="packRgt">
                            <div class="prc-bx">
                                <p class="list-prc">Regular Price : <span class="strikeout regularprice1"></span></p>
                                <p class="reglr-prc eachprice1"></p>
                                <p class="perbtl">per bottle</p>
                                <div class="pack-btn">Select</div>
                                <p class="free-ship-text"><img src="images/ship-ico.png"><strong>Free Shipping</strong></p>
                                <p class="totalPrc">Total: <span class="totalprice1"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="clearall"></div>
                <img src="images/frm-btm-seal.jpg" class="frm-btm-seal">
            </div>
            
            <div class="chk-rght" id="topfrm">
            	<p class="frm-top-text"><span>Congratulations!</span><br>Your Discount Code Activated!</p>
                <div class="clearall"></div>
                <p class="code-text">FreeBottle</p>
                
            	<div class="formBox" id="topForm">
                	
                    <img src="images/frm-arw.png" alt="" class="frmarw brn-arr-wo">
					<div class="frm-tp">Restore CBD Gummies</div>
                    <div class="frmHdng">
                        <p>Payment Information</p>
                        <span>Final Step!</span>
                        <img src="images/s1-frm-gum.png" alt="" class="frm-gum">
                    </div>
                    <div class="limit-offer"><img src="images/frm-watch.png">Limited Time Offer <span id="stopwatch1"></span></div>
                    
                    <form action="kon/process.php" method="post" id="payment-form" class="noexirpop">
                        <input type="hidden" name="page" value="checkout_page">
                        <!-- product -->
                        <input type="hidden" name="product1_qty" value="5">
                        <input type="hidden" name="product1_id" value="3">
                        <input type="hidden" name="product1_shipPrice" value="0">

                        <!-- product end -->
                        <input type="hidden" name="country" value="US">
                        <input type="hidden" name="ipAddress" id="ipAddress" value="<?php echo $kon->getRealIP(); ?>">
                        <input type="hidden" name="expirationDate" id="expirationDate" value="">
                        <input type="hidden" name="creditCardType" id="creditCardType" value="">
                        <input type="hidden" name="paySource" id="paySource" value="CREDITCARD">
                        <input type="hidden" name="couponCode" value="LESS10">
                        <input type="hidden" name="sessionId" value="<?php echo (is_null($_SESSION['sessionId']))?'':$_SESSION['sessionId']; ?>">
                        
                        <!-- affiliate records -->
                        
                        <input type="hidden" name="affId" id="affId" value="<?php echo (isset($_SESSION["affId"]) && ($_SESSION['scrub'] == false))?$_SESSION["affId"]:''; ?>">
                        <input type="hidden" name="sourceValue1" id="sourceValue1" value="<?php echo (isset($_SESSION["c1"]) && ($_SESSION['scrub'] == false))?$_SESSION["c1"]:''; ?>">
                        <input type="hidden" name="sourceValue2" id="sourceValue2" value="<?php echo (isset($_SESSION["c2"]) && ($_SESSION['scrub'] == false))?$_SESSION["c2"]:''; ?>">
                        <input type="hidden" name="sourceValue3" id="sourceValue3" value="<?php echo (isset($_SESSION["c3"]) && ($_SESSION['scrub'] == false))?$_SESSION["c3"]:''; ?>">
                        <input type="hidden" name="sourceValue4" id="sourceValue4" value="<?php echo (isset($_SESSION["c4"]) && ($_SESSION['scrub'] == false))?$_SESSION["c4"]:''; ?>">

                        <div class="frm-mdl">
                        	
                            <label class="fieldToggle">
                                <input type="checkbox" name="billShipSame" id="togData" checked value="1">
                                <span class="togship"></span>
                                Billing address same as shipping
                            </label>
                            
                            <div class="shipaddress" style="float:left; width:100%; display:none;">
                                <div class="frmElemts">
                                    <input type="text" name="shipFirstName" placeholder="First Name*">
                                </div>
                                <div class="frmElemts">
                                    <input type="text" name="shipLastName" placeholder="Last Name*">
                                </div> 
                                <div class="frmElemts">
                                    <input type="text" name="shipAddress1" placeholder="Address*">
                                </div>
                                <div class="frmElemts">
                                    <input type="text" name="shipCity" placeholder="City*">
                                </div>          
                                <div class="frmElemts">
                                    <select name="shipState">
                                        <option value="" onclick="" selected="">Select State</option>
                                        <option value="" onclick="">Alabama</option>
                                        <option value="AK" onclick="">Alaska (AK)</option>
                                        <option value="AS" onclick="">American Samoa (AS)</option>
                                        <option value="AZ" onclick="">Arizona (AZ)</option>
                                        <option value="AR" onclick="">Arkansas (AR)</option>
                                        <option value="AE-A" onclick="">Armed Forces Africa (AE)</option>
                                        <option value="AA" onclick="">Armed Forces Americas (AA)</option>
                                        <option value="AE-C" onclick="">Armed Forces Canada (AE)</option>
                                        <option value="AE-E" onclick="">Armed Forces Europe (AE)</option>
                                        <option value="AE-M" onclick="">Armed Forces Middle East (AE)</option>
                                        <option value="AP" onclick="">Armed Forces Pacific (AP)</option>
                                        <option value="CA" onclick="">California (CA)</option>
                                        <option value="CO" onclick="">Colorado (CO)</option>
                                        <option value="CT" onclick="">Connecticut (CT)</option>
                                        <option value="DE" onclick="">Delaware (DE)</option>
                                        <option value="DC" onclick="">District of Columbia (DC)</option>
                                        <option value="FM" onclick="">Federated States of Micronesia (FM)</option>
                                        <option value="FL" onclick="">Florida (FL)</option>
                                        <option value="GA" onclick="">Georgia (GA)</option>
                                        <option value="GU" onclick="">Guam (GU)</option>
                                        <option value="HI" onclick="">Hawaii (HI)</option>
                                        <option value="ID" onclick="">Idaho (ID)</option>
                                        <option value="IL" onclick="">Illinois (IL)</option>
                                        <option value="IN" onclick="">Indiana (IN)</option>
                                        <option value="IA" onclick="">Iowa (IA)</option>
                                        <option value="KS" onclick="">Kansas (KS)</option>
                                        <option value="KY" onclick="">Kentucky (KY)</option>
                                        <option value="LA" onclick="">Louisiana (LA)</option>
                                        <option value="ME" onclick="">Maine (ME)</option>
                                        <option value="MD" onclick="">Maryland (MD)</option>
                                        <option value="MA" onclick="">Massachusetts (MA)</option>
                                        <option value="MI" onclick="">Michigan (MI)</option>
                                        <option value="MN" onclick="">Minnesota (MN)</option>
                                        <option value="MS" onclick="">Mississippi (MS)</option>
                                        <option value="MO" onclick="">Missouri (MO)</option>
                                        <option value="MT" onclick="">Montana (MT)</option>
                                        <option value="NE" onclick="">Nebraska (NE)</option>
                                        <option value="NV" onclick="">Nevada (NV)</option>
                                        <option value="NH" onclick="">New Hampshire (NH)</option>
                                        <option value="NJ" onclick="">New Jersey (NJ)</option>
                                        <option value="NM" onclick="">New Mexico (NM)</option>
                                        <option value="NY" onclick="">New York (NY)</option>
                                        <option value="NC" onclick="">North Carolina (NC)</option>
                                        <option value="ND" onclick="">North Dakota (ND)</option>
                                        <option value="MP" onclick="">Northern Mariana Islands (MP)</option>
                                        <option value="OH" onclick="">Ohio (OH)</option>
                                        <option value="OK" onclick="">Oklahoma (OK)</option>
                                        <option value="OR" onclick="">Oregon (OR)</option>
                                        <option value="PA" onclick="">Pennsylvania (PA)</option>
                                        <option value="PR" onclick="">Puerto Rico (PR)</option>
                                        <option value="MH" onclick="">Republic of Marshall Islands (MH)</option>
                                        <option value="RI" onclick="">Rhode Island (RI)</option>
                                        <option value="SC" onclick="">South Carolina (SC)</option>
                                        <option value="SD" onclick="">South Dakota (SD)</option>
                                        <option value="TN" onclick="">Tennessee (TN)</option>
                                        <option value="TX" onclick="">Texas (TX)</option>
                                        <option value="UT" onclick="">Utah (UT)</option>
                                        <option value="VT" onclick="">Vermont (VT)</option>
                                        <option value="VI" onclick="">Virgin Islands of the U.S. (VI)</option>
                                        <option value="VA" onclick="">Virginia (VA)</option>
                                        <option value="WA" onclick="">Washington (WA)</option>
                                        <option value="WV" onclick="">West Virginia (WV)</option>
                                        <option value="WI" onclick="">Wisconsin (WI)</option>
                                        <option value="WY" onclick="">Wyoming (WY)</option>							
                                    </select>
                                </div>
                                
                                <div class="frmElemts">
                                    <input type="tel" name="shipPostalCode" placeholder="Zip Code*">
                                </div> 
                            </div>
                            
                            <p class="accept-card-txt"><img src="images/accept-card.png" class="accept-card"></p>
                            
                            <div class="frmElemts">
                            	<label>Card Number</label>
                                <input type="tel" id="billing_fname" name="cardNumber" value="" placeholder="Credit Card #" maxlength="16">
                            </div>
                            <div class="frmElemts hlf fl">
                                <label>Expiry Date</label>
                                <select class="field-all" name="cardMonth">
                                    <option value="">Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div class="frmElemts hlf fr">
                                <label>&nbsp;</label>
                                <select class="field-all" name="cardYear">
                                    <option value="">Year</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>
                            </div>
                            <div class="frmElemts hlf" style="margin-top:8px;">
                            	<label>Security Code</label>
                                <input type="tel" id="billing_fname" name="cardSecurityCode" value="" placeholder="CVV Code" maxlength="3">
                            </div>
                            
                            <a href="javascript:void(0);" onclick="openNewWindow('cvv.php','modal');" class="what-is">What is this?</a>
                            <!--
                            <label class="autoShipToggle">
                                <input type="checkbox" name="autoShipOpt" class="autoShipOpt" id="autoShipOpt">
                                <span class="togship"></span>
                               	15% Off with Smart-Ship!
                                
                                <div class="tool-tips">
                                	<img src="images/info-icn.png" alt="" class="info-icn">
                                    <span class="tooltiptext">With the Smart-Ship auto refill plan, you'll get a fresh new supply of Restore CBD every 1/3/5 months with 15% off + free shipping always! Cancel anytime with an email or phone call to our friendly support team.</span>
                                </div>
                                
                            </label>
                            -->
                            <button type="submit" class="submit pulse cpSubmit">Rush My Order<img src="images/btn-arw.png" alt="" class="btn-arw"></button>
                            <img src="images/frm-secur.png" alt="" class="frm-secur-log">
                        </div> 
                    </form>
                </div>
                
                <div class="guaranteeBox">
                	<img src="images/chkmbg.png" class="chkmbg">
                    <h1>60 Day Money Back Guarantee</h1>
                    <p>Your purchase of Restore CBD Gummies is backed by an iron-clad 100% Money Back Guarantee. In the unlikely case that you are not happy with the results, you can email / call us  within 60 days and we will give you a full refund with no questions asked. </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
    	<img src="images/logo.png" alt="" class="ftr-log">
        <p class="ftr-tx"><a href="#">Terms &amp; Conditions</a>  |  <a href="#">Privacy Policy</a>  |  <a href="#">Contact Us</a></p>
        <p class="ftr-tx">&copy; <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> Restore CBD Gummies. All Rights Reserved</p>
    </div>
</div>

<div class="exit-pop" style="display:none;">
	<div class="pop-close">X</div>
	<div class="exit-box">
    	<a href="checkout-20-off.php"><img src="images/popup2.jpg" class="popImg"></a>
    </div>
</div>


<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/bookmarkscroll.js"></script>
<script type="text/javascript">

var internalLink = false;

var regularPrice5 = 349.95;
var totalPrice5 = 178.83;

var regularPrice3 = 209.97;
var totalPrice3 = 134.92;

var regularPrice1 = 69.99;
var totalPrice1 = 62.99;

function CalcPrice(){
	$('.regularprice5').html('$'+regularPrice5);
	$('.regularprice3').html('$'+regularPrice3);
	$('.regularprice1').html('$'+regularPrice1);
	
	$('.totalprice5').html('$'+ totalPrice5 );
	$('.eachprice5').html('$'+(totalPrice5/5).toFixed(2));
	$('.saveOpt5').html('$'+(regularPrice5 - totalPrice5).toFixed(0));
	
	$('.totalprice3').html('$'+ totalPrice3 );
	$('.eachprice3').html('$'+(totalPrice3/3).toFixed(2));
	$('.saveOpt3').html('$'+(regularPrice3 - totalPrice3).toFixed(0));
	
	$('.totalprice1, .eachprice1').html('$'+totalPrice1);
	$('.saveOpt1').html('$'+(regularPrice1 - totalPrice1).toFixed(0));
}

$(document).ready(function(){
	
	CalcPrice();
	
	$('.autoShipToggle').click(function(){
		if($('.autoShipOpt').prop("checked") == true){
			
			
			$('.totalprice5').html('$'+((totalPrice5 - (totalPrice5*15)/100)).toFixed(2));
			$('.eachprice5').html('$'+((totalPrice5 - (totalPrice5*15)/100)/5).toFixed(2));
			$('.saveOpt5').html('$'+(regularPrice5 - (totalPrice5 - (totalPrice5*15)/100)).toFixed(0));
			
			
			$('.totalprice3').html('$'+((totalPrice3 - (totalPrice3*15)/100)).toFixed(2));
			$('.eachprice3').html('$'+((totalPrice3 - (totalPrice3*15)/100)/3).toFixed(2));
			$('.saveOpt3').html('$'+(regularPrice3 - (totalPrice3 - (totalPrice3*15)/100)).toFixed(0));
			
			
			$('.totalprice1, .eachprice1').html('$'+((totalPrice1 - (totalPrice1*15)/100)).toFixed(2));
			$('.saveOpt1').html('$'+ (regularPrice1 - (totalPrice1 - (totalPrice1*15)/100)).toFixed());
		}else{
			CalcPrice();
		}

        checkProduct();
	});
	
	$('.packBoxOuter').click(function(e) {
		$('.packBoxOuter').removeClass('active'); 
		$('.packBoxOuter .packCheck').html('');
		$('.packBoxOuter .pack-btn').html('Select');
		$(this).addClass('active');
		$(this).find('.packCheck').html('<img src="images/tik-blk.svg">');
		$(this).find('.pack-btn').html('Selected');
		bookmarkscroll.scrollTo('topForm');

        checkProduct();
	});
	
	
    $('#togData').prop("checked", true);

    setInterval(() => {
        togDataChecker();
    }, 500);
	
	$('.fieldToggle').click(function(){
		togDataChecker();
	});

    function togDataChecker() {
        if($('#togData').prop("checked") == false){
		   $('.shipaddress').slideDown();
           $('#togData').val('0');
		}
		else if($('#togData').prop("checked") == true){
		   $('.shipaddress').slideUp();
           $('#togData').val('1');
		}
    }
	
	//EXIT POPUP JS
	$('a').click(function(){
		window.internalLink = true;
	});


	$('.noexirpop').submit(function(){
		 window.internalLink = true;
	});

	$('.noexirpop').click(function(){
		window.internalLink = true;
	});

var exitMessage = "****************************************************************************************\n\WAIT! WAIT! WAIT! WAIT! WAIT! WAIT! WAIT! WAIT! WAIT!  \n\nFor a Limited Time - Check Out our SPECIAL OFFER!! \n\nGet an Extra 10% Off\n\nClick *Cancel* or *Stay* below to activate offer.\n\n****************************************************************************************";
if(exitMessage){
	function pageUnload() {
		if (!window.internalLink) {
			window.internalLink = true;
			$(".exit-pop").css('display','block');
			return exitMessage;
		}
	}
	window.onbeforeunload = pageUnload;

    setTimeout(() => {
        $(document).on("mouseout", evt => {
            if(evt.toElement === null && evt.relatedTarget === null) {
                $(evt.currentTarget).off("mouseout");
                // An intent to exit has happened

                pageUnload();
            }
        });
    }, 5000);
}
	
	
	$('.pop-close').click(function(e) {
       $('.exit-pop').hide(); 
    });
	
	

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
		document.getElementById('stopwatch1').innerHTML = result;
	}, spd);
		
});



//MODAL POPUP JS
$(document).on('click', '#app_common_modal_close', function() {
	$('#app_common_modal').remove();
});	
function openNewWindow(page_url, type, window_name, width, height, top, left, features) {
    if (!type) {
        type = 'popup';
    }
    if (!width) {
        width = 480;
    }
    if (!height) {
        height = 480;
    }
    if (!top) {
        top = 50;
    }
    if (!left) {
        left = 50;
    }
    if (!features) {
        features = 'resizable,scrollbars';
    }

    if (type == 'popup') {
        var settings = 'height=' + height + ',';
        settings += 'width=' + width + ',';
        settings += 'top=' + top + ',';
        settings += 'left=' + left + ',';
        settings += features;

        win = window.open(page_url, window_name, settings);
        win.window.focus();
    } else if (type == 'modal') {
        var html = '';
        html += '<div id="app_common_modal">';
        html += '<div class="app_modal_body"><a href="javascript:void(0);" id="app_common_modal_close">X</a><iframe src="' + page_url + '" frameborder="0"></iframe></div>';
        html += '</div>';

        if (!$('#app_common_modal').length) {

            $('body').append(html);
        }
        $('#app_common_modal').fadeIn();
    }

}

function checkProduct() {
    var act = $('.packBoxOuter.active');

    if(act.hasClass('pkg1')){
        if($('.autoShipOpt').prop("checked") == true){
            $('input[name="product1_id"]').val('10');
        }else{
            $('input[name="product1_id"]').val('3');
        }
        $('input[name="product1_qty"]').val('5');
    }

    if(act.hasClass('pkg2')){
        if($('.autoShipOpt').prop("checked") == true){
            $('input[name="product1_id"]').val('9');
        }else{
            $('input[name="product1_id"]').val('2');
        }
        $('input[name="product1_qty"]').val('3');
    }

    if(act.hasClass('pkg3')){
        if($('.autoShipOpt').prop("checked") == true){
            $('input[name="product1_id"]').val('8');
        }else{
            $('input[name="product1_id"]').val('1');
        }
        $('input[name="product1_qty"]').val('1');
    }    
}

function isScrolledIntoView(elem) {
	var docViewTop = $(window).scrollTop();
	var docViewBottom = docViewTop + $(window).height();
	
	var elemTop = $(elem).offset().top;
	var elemBottom = elemTop + $(elem).height();
	
	return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
		
$(window).scroll(function(){

	if (isScrolledIntoView('.frmarw') === true) {
	   $('.frmarw').addClass('brn-arr-wo');
	}else{
		 $('.frmarw').removeClass('brn-arr-wo');
	}
		
});


</script>

<?php include_once('footer-modal.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>
</html>
