<?php
include_once('kon/konnektive.php');
$kon = new KON();
$kon->initSession();
$kon->setClickImport('leadPage');
$kon->setAffiliateSession();

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
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/style.css">
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
    test
<?php if(isset($_SESSION['errors'])): ?>
<div style="background-color: #e41f1e;padding: 7px 0;"><ul><?php foreach($_SESSION['errors'] as $e){ echo '<li style="color: #fff;font-weight: 700;padding: 7px 0;">'.$e.'</li>'; }?></ul></div>
<?php endif; ?>
<div class="top-strip">
    <div class="container">
        <p><span>WARNING:</span> Due to extremely high media demand, there is limited supply of <span>Restore CBD Gummies</span> in stock as of <script type="text/javascript">getDate(0);</script> <span>HURRY!</span></p>
    </div>
</div>
 
<div class="sec1"  id="comn-btn">
    <div class="logo-sec">
        <div class="container">
            <img src="images/logo.png" alt="" class="logo">
            <p class="log-tx">The World’s #1<br> <span>CBD Gummies</span></p>
            
            <div class="disc-appl">
                <p class="disc-tx"><span>Congratulations!</span> Discount Code: Activated</p>
                <p class="disc-cpn">FreeBottle</p>
            </div>
        </div>
    </div>
    
    <div class="clearall"></div>
    <div class="container">
        <div class="s1-lft">
            
            <div class="s1-hdg">
                <p class="s1-hd-tx1"><img src="images/us-flag.png" alt="" class="us-flag"> 100% Legal Across All 50 U.S. States</p>
                <p class="s1-hd-tx2">The Most Powerful & Safe</p>
                <p class="s1-hd-tx3">CBD Gummies</p>
            </div>
            
            <div class="s1-strp">
            	<img src="images/s1-strp-gum.png" alt="" class="s1-strp-gum">
            	<p class="s1-strp-hd">All-Natural Pain Relief & Wellness</p>
                <img src="images/s1-strp-icn.png" alt="" class="s1-strp-icn">
                <p class="s1-strp-tx">"In just a few days, it could dramatically improve pain & discomfort, while offering other health benefits."</p>
                <div class="s1-strp-btm"><p><span>Dr. Arnold Peters</span>  |  Surgeon and Medical advisor</p></div>
            </div>
            
            <ul class="s1-list">
                <li>Improves Pain, Aches & Stiffness</li>
                <li>Supports Joint & Muscle Health</li>
                <li>Relieves Anxiety & Stress</li>
                <li>Enhances Relaxation & Mood Patterns</li>
                <li>Promotes Restful Sleep Cycles</li>
            </ul>
            
            <p class="as-seen"><span>CBD As Seen In</span></p>
            <img src="images/as-seen.png" alt="" class="as-seen-img">
            
            <div class="s1-prd">
            	<img src="images/s1-prd.png" alt="" class="s1-prd-img">
                <img src="images/s1-seal.png" alt="" class="s1-seal">
                <img src="images/s1-gum.png" alt="" class="s1-gum">
            </div>
            
        </div>
        
        <img src="images/s1-model.png" alt="" class="s1-model">
        
        <div class="frm-rgt" id="topForm">
            <img src="images/frm-arw.png"  alt=""  class="s1-animate-arrow"/>
            <div class="frm-tp"><p>Tell Us Where To Send Your</p></div>
            <div class="frm-hd">
                <p>Restore CBD</p>
                <span>Gummies</span>
                <img src="images/s1-frm-gum.png" alt="" class="frm-gum">
            </div>
            
            <form action="kon/process.php" method="post">
                <input type="hidden" name="page" value="index_page">
                <div class="frm-sec">
                    <input type="text" name="firstName" id="" class="inp-fld" placeholder="First Name*" value="<?php echo (isset($_SESSION['firstName']))?$_SESSION['firstName']:''; ?>">
                    <input type="text" name="lastName" id="" class="inp-fld" placeholder="Last Name*" value="<?php echo (isset($_SESSION['lastName']))?$_SESSION['lastName']:''; ?>">
                    <input type="text" name="address1" id="" class="inp-fld" placeholder="Address*" value="<?php echo (isset($_SESSION['address1']))?$_SESSION['address1']:''; ?>">
                    <input type="text" name="city" id="" class="inp-fld" placeholder="City*" value="<?php echo (isset($_SESSION['city']))?$_SESSION['city']:''; ?>">
                    <select name="state" id="" class="inp-fld" value="<?php echo (isset($_SESSION['state']))?$_SESSION['state']:''; ?>">
                                <option value="" onclick="" selected="">Select State</option>
                               <option value="AL" onclick="">Alabama (AL)</option><option value="AK" onclick="">Alaska (AK)</option><option value="AS" onclick="">American Samoa (AS)</option><option value="AZ" onclick="">Arizona (AZ)</option><option value="AR" onclick="">Arkansas (AR)</option><option value="AE-A" onclick="">Armed Forces Africa (AE)</option><option value="AA" onclick="">Armed Forces Americas (AA)</option><option value="AE-C" onclick="">Armed Forces Canada (AE)</option><option value="AE-E" onclick="">Armed Forces Europe (AE)</option><option value="AE-M" onclick="">Armed Forces Middle East (AE)</option><option value="AP" onclick="">Armed Forces Pacific (AP)</option><option value="CA" onclick="">California (CA)</option><option value="CO" onclick="">Colorado (CO)</option><option value="CT" onclick="">Connecticut (CT)</option><option value="DE" onclick="">Delaware (DE)</option><option value="DC" onclick="">District of Columbia (DC)</option><option value="FM" onclick="">Federated States of Micronesia (FM)</option><option value="FL" onclick="">Florida (FL)</option><option value="GA" onclick="">Georgia (GA)</option><option value="GU" onclick="">Guam (GU)</option><option value="HI" onclick="">Hawaii (HI)</option><option value="ID" onclick="">Idaho (ID)</option><option value="IL" onclick="">Illinois (IL)</option><option value="IN" onclick="">Indiana (IN)</option><option value="IA" onclick="">Iowa (IA)</option><option value="KS" onclick="">Kansas (KS)</option><option value="KY" onclick="">Kentucky (KY)</option><option value="LA" onclick="">Louisiana (LA)</option><option value="ME" onclick="">Maine (ME)</option><option value="MD" onclick="">Maryland (MD)</option><option value="MA" onclick="">Massachusetts (MA)</option><option value="MI" onclick="">Michigan (MI)</option><option value="MN" onclick="">Minnesota (MN)</option><option value="MS" onclick="">Mississippi (MS)</option><option value="MO" onclick="">Missouri (MO)</option><option value="MT" onclick="">Montana (MT)</option><option value="NE" onclick="">Nebraska (NE)</option><option value="NV" onclick="">Nevada (NV)</option><option value="NH" onclick="">New Hampshire (NH)</option><option value="NJ" onclick="">New Jersey (NJ)</option><option value="NM" onclick="">New Mexico (NM)</option><option value="NY" onclick="">New York (NY)</option><option value="NC" onclick="">North Carolina (NC)</option><option value="ND" onclick="">North Dakota (ND)</option><option value="MP" onclick="">Northern Mariana Islands (MP)</option><option value="OH" onclick="">Ohio (OH)</option><option value="OK" onclick="">Oklahoma (OK)</option><option value="OR" onclick="">Oregon (OR)</option><option value="PA" onclick="">Pennsylvania (PA)</option><option value="PR" onclick="">Puerto Rico (PR)</option><option value="MH" onclick="">Republic of Marshall Islands (MH)</option><option value="RI" onclick="">Rhode Island (RI)</option><option value="SC" onclick="">South Carolina (SC)</option><option value="SD" onclick="">South Dakota (SD)</option><option value="TN" onclick="">Tennessee (TN)</option><option value="TX" onclick="">Texas (TX)</option><option value="UT" onclick="">Utah (UT)</option><option value="VT" onclick="">Vermont (VT)</option><option value="VI" onclick="">Virgin Islands of the U.S. (VI)</option><option value="VA" onclick="">Virginia (VA)</option><option value="WA" onclick="">Washington (WA)</option><option value="WV" onclick="">West Virginia (WV)</option><option value="WI" onclick="">Wisconsin (WI)</option><option value="WY" onclick="">Wyoming (WY)</option>
                            </select>
                    <input type="text" name="postalCode" id="" class="inp-fld" placeholder="Zip Code*" value="<?php echo (isset($_SESSION['postalCode']))?$_SESSION['postalCode']:''; ?>">
                    <input type="text" name="phoneNumber" id="" class="inp-fld" placeholder="Phone Number*" value="<?php echo (isset($_SESSION['phoneNumber']))?$_SESSION['phoneNumber']:''; ?>">
                    <input type="text" name="emailAddress" id="" class="inp-fld" placeholder="Email Address*" value="<?php echo (isset($_SESSION['emailAddress']))?$_SESSION['emailAddress']:''; ?>">
                    
                    <button class="comn-btn pulse"><p>Claim Free Bottles<br></p> <img src="images/btn-arw.png" alt="" class="btn-arw"></button>
                    <small class="btn-sml-tx">60-Day Money Back Guarantee</small>
                    
                    <img src="images/frm-secur.png" alt="" class="frm-secur-log">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="sec2">
    <div class="container">
    	<div class="comn-hdg">
        	<p>Restore CBD Gummies</p>
            <h3>For Health, Wellness & Relief</h3>
        </div>
        <div class="s2-inr-bx">
        	<img src="images/s2-yum.png" alt="" class="s2-yum">
        	<img src="images/s2-model.png" alt="" class="s2-model">	
            <div class="s2-rgt-bx">
            	<p class="comn-txt s2-tx">CBD has been at the forefront of the alternate medicine revolution, <br>with over 20,000 clinical studies suggesting its ability to heal the body from within. <strong>Restore CBD Gummies</strong> include a unique 750 MG CBD extract which is the key compound that helps regulate mood, pain, cognition & sleep in the brain & body.</p>
                
                <div class="s2-inr-rgt">
                	<p class="s2-inr-tx">In just a few days, <strong>Restore CBD Gummies</strong> can help tune your entire endocannabinoid system (ECS), helping you feel relaxed, improving focus, supporting better sleep & quickly easing joint and muscle concerns!</p>
                    <p class="comn-txt s2-inr-tx2">That's not all - they come in yummilicious flavors & are easy to take on the go!</p>
                    <img src="images/s2-gum.png" alt="" class="s2-gum">
                </div>
            </div>
        </div>
    	<ul class="s2-list">
        	<li>
            	<img src="images/s2-icn1.png" alt="" class="s2-icn">
                <h3>Maximum Strength CBD</h3>
                <p>Includes 25 MG CBD in every <br>gummy and 750mg per bottle, making it more powerful & effective than <br>generic CBD products. </p>
            </li>
            <li>
            	<img src="images/s2-icn2.png" alt="" class="s2-icn">
                <h3>THC Free - No Side Effects</h3>
                <p>Restore CBD Gummies are free from "THC", which means you can enjoy <br>all the therapeutic benefits of CBD without the side effects. </p>
            </li>
            <li>
            	<img src="images/s2-icn3.png" alt="" class="s2-icn">
                <h3>3rd Party Lab Tested</h3>
                <p>Each batch of Restore CBD Gummies <br>is tested at a certified lab & is 100% free from pesticides, heavy metals, solvents, or chemicals. </p>
            </li>
        </ul>
        <div class="clearall"></div>
        <p class="s2-btm-hd">Get Up To 2 FREE Bottles & FREE Shipping!</p>
        <p class="s2-btm-tx">Get Ready To Enjoy Your Daily Dose Of CBD Goodness<br>On-The-Go With Delicious <strong>Restore CBD Gummies</strong>!</p>
        <div class="clearall"></div>
        <img src="images/s2-btm-img.png" alt="" class="s2-btm-img">
        
        <div class="clearall"></div>
        <div class="btn-bx">
            <a href="javascript:bookmarkscroll.scrollTo('topForm')" class="comn-btn s3-btn pulse" id="comn-btn"><p>Claim Free Bottles</p> <img src="images/btn-arw.png" alt="" class="btn-arw"></a>
            <small class="btn-sml-tx">60-Day Money Back Guarantee</small>
        </div>
    </div>
</div>

<div class="sec3">
    <div class="container">
    	<div class="comn-hdg">
        	<p>Benefits Of Restore CBD</p>
            <h3>Health, Wellness & Balance</h3>
        </div>

        <div class="s3-inr">
        	<img src="images/s3-img.png" alt="" class="s3-img">
            <div class="s3-inr-sec fl">
                <div class="s3-bx">
                    <img src="images/s3-icn1.png" alt="" class="s3-icn">
                    <h3>Pain Relief</h3>
                    <p>Targets the root cause of <br>pain, aches and inflammation & helps inhibit pain receptors. </p>
                </div>
                <div class="s3-bx">
                    <img src="images/s3-icn2.png" alt="" class="s3-icn">
                    <h3>Energy Boost</h3>
                    <p>Replenishes energy stores across the body to boost daily productivity.</p>
                </div>
                <div class="s3-bx">
                    <img src="images/s3-icn3.png" alt="" class="s3-icn">
                    <h3>Deep Relaxation</h3>
                    <p>Helps deal with daily stress & anxiety levels without addictive medications.</p>
                </div>
            </div>
            
            <div class="s3-inr-sec fr">
                <div class="s3-bx">
                    <img src="images/s3-icn4.png" alt="" class="s3-icn">
                    <h3>Sleep Cycles</h3>
                    <p>Optimizes circadian rhythms to <br>help you fall asleep, stay asleep<br> & wake up fresh.</p>
                </div>
                <div class="s3-bx">
                    <img src="images/s3-icn5.png" alt="" class="s3-icn">
                    <h3>Brain Power</h3>
                    <p>Boosts cognition to replace <br>brain fog with focus, clarity <br>& memory recall. </p>
                </div>
                <div class="s3-bx">
                    <img src="images/s3-icn6.png" alt="" class="s3-icn">
                    <h3>Weight Loss</h3>
                    <p>Reduces emotional food cravings <br>& boosts mood to support weight <br>loss efforts with a healthy lifestyle. </p>
                </div>
            </div>
        </div>
        
        <div class="clearall"></div>
        <div class="btn-bx">
            <a href="javascript:bookmarkscroll.scrollTo('topForm')" class="comn-btn s3-btn pulse" id="comn-btn"><p>Claim Free Bottles</p> <img src="images/btn-arw.png" alt="" class="btn-arw"></a>
            <small class="btn-sml-tx">60-Day Money Back Guarantee</small>
        </div>
    </div>
</div>

<div class="sec4">
    <div class="container">
    	<div class="s4-lft">
        	<div class="comn-hdg">
                <p>The Science Behind</p>
                <h3>How Restore CBD Works</h3>
        	</div>
            <p class="comn-txt">Research & clinical studies have proven that CBD is capable of making strong connections with the receptors in the human nervous system, specifically the ECS (Endocannabinoid System), thereby having a positive & healthy impact on physical, physiological & neurological processes in the body. </p>
			<p class="comn-txt"><strong>Restore CBD Gummies</strong> delivers a high potency & safe dose of CBD to your body which binds with CB1 & CB2 receptors to balance & optimize the functioning of the ECS. </p>
        </div>
        
        <img src="images/s4-img.png" alt="" class="s4-img">
        
        <div class="s4-btm-bx">  
        	<p class="s4-btm-hd">Clinically Proven Benefits Of CBD Binding to CB1 & CB2</p>      	
            <ul class="s4-btm-lst">
                <li><img src="images/s4-lst-icn1.png" alt="" class="s4-lst-icn"> <p>Activates serotonin to release mood-boosting effect</p></li>
                <li><img src="images/s4-lst-icn2.png" alt="" class="s4-lst-icn"> <p>Supports natural pain-signaling pathways to the brain</p></li>
                <li><img src="images/s4-lst-icn3.png" alt="" class="s4-lst-icn"> <p>Promotes healthy mood, sleep, and stress levels</p></li>
                <li><img src="images/s4-lst-icn4.png" alt="" class="s4-lst-icn"> <p>Optimizes resting blood-pressure levels</p></li>
            </ul>
            
            <div class="clearall"></div>
            <div class="btn-bx">
                <a href="javascript:bookmarkscroll.scrollTo('topForm')" class="comn-btn s3-btn pulse" id="comn-btn"><p>Claim Free Bottles</p> <img src="images/btn-arw.png" alt="" class="btn-arw"></a>
                <small class="btn-sml-tx">60-Day Money Back Guarantee</small>
            </div>
            
            <img src="images/s4-man.png" alt="" class="s4-man">
            
            <div class="s4-btm-rgt">
                <div class="CB-bx">
                    <p class="cb-cnt cb-cnt1">CB1</p>
                    <p class="cb-tx">receptors is primarily found in the nerve cells of the brain and spinal cord.</p>
                </div>
                
                <div class="CB-bx">
                    <p class="cb-cnt cb-cnt2">CB2</p>
                    <p class="cb-tx">receptors are mostly found on white blood cells & in the immune system.</p>
                </div>
            </div>
		</div>
    </div>
</div>

<div class="sec5">
    <div class="container">
    	<div class="s5-lft">
        	<img src="images/certi-img.jpg" alt="" class="certi-img">
            <div class="clearall"></div>
            <img src="images/qr-code.jpg" alt="" class="qr-code">
            <p class="qr-tx"><span>Scan & View COA</span>Get lab results of your <strong>Restore CBD Gummies</strong>.</p>
            <div class="s5-prd">
            	<img src="images/s5-prd-img.png" alt="" class="s5-prd-img">
                <img src="images/s1-gum.png" alt="" class="s5-gum">
            </div>
        </div>
        
        <div class="s5-rgt">
        	<div class="comn-hdg">
                <p>Honest, Safe & Transparent</p>
                <h3>Why Choose Restore CBD</h3>
        	</div>
            <p class="comn-txt">Each batch of <strong>Restore CBD Gummies</strong> is 3rd party lab tested for purity, potency & safety. You can scan the QR code to access the lab results of your bottle with just a click. </p>
            <ul class="s5-lst">
            	<li>
                	<p><img src="images/s5-lst-icn1.png" alt="" class="s5-lst-icn"> CBD Concentration Testing</p>
                    <span class="pas-tx"><img src="images/pass-tk.png" alt=""> Passed</span>
                </li>
                <li>
                	<p><img src="images/s5-lst-icn2.png" alt="" class="s5-lst-icn"> 0% THC Content Testing</p>
                    <span class="pas-tx"><img src="images/pass-tk.png" alt=""> Passed</span>
                </li>
                <li>
                	<p><img src="images/s5-lst-icn3.png" alt="" class="s5-lst-icn"> No Heavy Metal Testing</p>
                    <span class="pas-tx"><img src="images/pass-tk.png" alt=""> Passed</span>
                </li>
                <li>
                	<p><img src="images/s5-lst-icn4.png" alt="" class="s5-lst-icn"> No Residual Solvents Testing</p>
                    <span class="pas-tx"><img src="images/pass-tk.png" alt=""> Passed</span>
                </li>
                <li>
                	<p><img src="images/s5-lst-icn5.png" alt="" class="s5-lst-icn"> No Mycotoxins & Microbial Testing</p>
                    <span class="pas-tx"><img src="images/pass-tk.png" alt=""> Passed</span>
                </li>
            </ul>
            
            <div class="btn-bx">
                <a href="javascript:bookmarkscroll.scrollTo('topForm')" class="comn-btn s3-btn pulse" id="comn-btn"><p>Claim Free Bottles</p> <img src="images/btn-arw.png" alt="" class="btn-arw"></a>
                <small class="btn-sml-tx">60-Day Money Back Guarantee</small>
        	</div>
        </div>
    </div>
</div>

<div class="sec6">
    <div class="container">
        <div class="comn-hdg">
            <p>Restore CBD vs Generic CBD</p>
            <h3>Make The Smart Choice</h3>
        </div>

        
        <div class="comp-chart">
            <div class="col col1">
                <ul class="comp-list">
                    <li><img src="images/comp-icn.png" alt="" class="comp-icn"> <p>All Natural & Safe</p></li>
                    <li><img src="images/comp-icn.png" alt="" class="comp-icn"> <p>Helps With Aches & Pains</p></li>
                    <li><img src="images/comp-icn.png" alt="" class="comp-icn"> <p>Promotes Better Sleep & Mood</p></li>
                    <li><img src="images/comp-icn.png" alt="" class="comp-icn"> <p>Helps Improve Addictive Behaviors</p></li>
                    <li><img src="images/comp-icn.png" alt="" class="comp-icn"> <p>Available Prescription-Free</p></li>
                    <li><img src="images/comp-icn.png" alt="" class="comp-icn"> <p>Zero THC Guarantee</p></li>
                    <li><img src="images/comp-icn.png" alt="" class="comp-icn"> <p>100% Legal Across U.S.A.</p></li>
                    <li><img src="images/comp-icn.png" alt="" class="comp-icn"> <p>Smarter Prices</p></li>
                </ul>
            </div>
            
            <div class="col col2">
                <div class="comp-prd-bg"><img src="images/comp-prd1.png" alt="" class="comp-prd comp-prd1"></div>
                <p class="s6-cmp-prd-tx">Restore CBD</p>
                <ul class="comp-list">
                    <li><img src="images/comp-tick.png" alt=""></li>
                    <li><img src="images/comp-tick.png" alt=""></li>
                    <li><img src="images/comp-tick.png" alt=""></li>
                    <li><img src="images/comp-tick.png" alt=""></li>
                    <li><img src="images/comp-tick.png" alt=""></li>
                    <li><img src="images/comp-tick.png" alt=""></li>
                    <li><img src="images/comp-tick.png" alt=""></li>
                    <li class="prc-tx">$69.99</li>
                </ul>
            </div>
            
            <div class="col col3">
                <div class="comp-prd-bg"><img src="images/comp-prd2.png" alt="" class="comp-prd comp-prd2"></div>
                <p class="s6-cmp-prd-tx">Generic CBD</p>
                <ul class="comp-list">
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li><img src="images/comp-tick.png" alt=""></li>
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li class="prc-tx">$89.10</li>
                </ul>
            </div>
            
            <div class="col col4">
                <div class="comp-prd-bg"><img src="images/comp-prd3.png" alt="" class="comp-prd comp-prd2"></div>
                <p class="s6-cmp-prd-tx">Prescription Meds</p>
                <ul class="comp-list">
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li><img src="images/comp-cross.png" alt=""></li>
                    <li class="prc-tx">$120.34</li>
                </ul>
            </div>
        </div>
        
        <div class="btn-bx">
            <a href="javascript:bookmarkscroll.scrollTo('topForm')" class="comn-btn s3-btn pulse" id="comn-btn"><p>Claim Free Bottles</p> <img src="images/btn-arw.png" alt="" class="btn-arw"></a>
            <small class="btn-sml-tx">60-Day Money Back Guarantee</small>
        </div>
        
        <div class="mny-bck-sec">
        	<img src="images/mny-bck-seal.png" alt="" class="mny-bck-seal">
        	<p class="mny-bck-hd">You Have Nothing To Lose With<br>Our 60 Day Money Back Guarantee</p>
            <p class="mny-bck-tx">Your purchase of <strong>Restore CBD Gummies</strong> is backed by an iron-clad 100% Money Back Guarantee. In the unlikely case that you are not happy with the results, you can email / call us  within 60 days and we will give you a full refund with no questions asked. </p>
        </div>
    </div>
</div>

<div class="sec7">
    <div class="container">
        
        <div class="comn-hdg">
            <p>Hear From Customers Who Are</p>
            <h3>Enjoying Pain Relief, Sleep & Energy</h3>
        </div>

        
        <div class="tsti-sec">
        	<div class="tsti-bx">
            	<div class="tsti-tp">
                	<div class="tsti-fc-img">
                		<img src="images/tsti-fc1.jpg" alt="" class="tsti-fc">
                    </div>
                    <div class="tsti-tp-cont">
                        <img src="images/tsti-star.png" alt="" class="tsti-star">
                        <p class="tsti-hd">The Gummies provide additional relief.</p>
                    </div>
                </div>
                <div class="tsti-btm">
                	<p class="tsti-tx">"Excellent quality packaging and excellent quality hemp Gummies. I have severe neck, shoulder, upper and lower back, and knee pain issues. Although I must take prescribed pain medication, the Gummies provide additional relief!"</p>
                    <p class="tsti-nm">Edgar F.</p>
                    <p class="tsti-veri-tx">Verified Customer</p>
                </div>
            </div>
            
            <div class="tsti-bx">
            	<div class="tsti-tp">
                	<div class="tsti-fc-img">
                		<img src="images/tsti-fc2.jpg" alt="" class="tsti-fc">
                    </div>
                    <div class="tsti-tp-cont">
                        <img src="images/tsti-star.png" alt="" class="tsti-star">
                        <p class="tsti-hd">If you plan on using CBD Gummies, this is a great product. </p>
                    </div>
                </div>
                <div class="tsti-btm">
                	<p class="tsti-tx">“I used this for lower back pain. I have had two back surgeries and have tried other products, and this one works. If you plan on using CBD Gummies, this is a great product."</p>
                    <p class="tsti-nm">David V. </p>
                    <p class="tsti-veri-tx">Verified Customer</p>
                </div>
            </div>
            
            <div class="tsti-bx">
            	<div class="tsti-tp">
                	<div class="tsti-fc-img">
                		<img src="images/tsti-fc3.jpg" alt="" class="tsti-fc">
                    </div>
                    <div class="tsti-tp-cont">
                        <img src="images/tsti-star.png" alt="" class="tsti-star">
                        <p class="tsti-hd">I was able to sleep through the night for the first time in months.</p>
                    </div>
                </div>
                <div class="tsti-btm">
                	<p class="tsti-tx">“I’ve been suffering from shoulder pain for a couple of months and thought I’d give this a try. I was amazed. Within a few minutes, my pain was almost gone. I was able to sleep through the night for the first time in months.”</p>
                    <p class="tsti-nm">Rachel G.</p>
                    <p class="tsti-veri-tx">Verified Customer</p>
                </div>
            </div>
        </div>
        
        <div class="btn-bx">
            <a href="javascript:bookmarkscroll.scrollTo('topForm')" class="comn-btn s3-btn pulse" id="comn-btn"><p>Claim Free Bottles</p> <img src="images/btn-arw.png" alt="" class="btn-arw"></a>
            <small class="btn-sml-tx">60-Day Money Back Guarantee</small>
        </div>
    </div>
</div>  

<div class="sec8">
    <div class="container">
    	<div class="s8-lft">
        	<img src="images/logo.png" alt="" class="logo">
            <p class="log-tx">The World’s #1<br> <span>CBD Gummies</span></p>
            <div class="clearall"></div>
            
            <div class="s8-hdg">
                <p class="s8-hd-tx1"><img src="images/us-flag.png" alt="" class="us-flag"> 100% Legal Across All 50 U.S. States </p>
                <p class="s8-hd-tx2">The Most Powerful & Safe</p>
                <p class="s8-hd-tx3">CBD Gummies</p>
            </div>
            
            <div class="s8-strp">
            	<img src="images/s1-strp-gum.png" alt="" class="s8-strp-gum">
            	<p class="s8-strp-hd">All-Natural Pain Relief & Wellness</p>
                <img src="images/s1-strp-icn.png" alt="" class="s8-strp-icn">
                <p class="s8-strp-tx">"In just a few days, it could dramatically improve pain & discomfort, while offering other health benefits."</p>
                <div class="s8-strp-btm"><p><span>Dr. Arnold Peters</span>  |  Surgeon and Medical advisor</p></div>
            </div>
            
            <ul class="s8-list">
                <li>Improves Pain, Aches & Stiffness</li>
                <li>Supports Joint & Muscle Health</li>
                <li>Relieves Anxiety & Stress</li>
                <li>Enhances Relaxation & Mood Patterns</li>
                <li>Promotes Restful Sleep Cycles</li>
            </ul>
            
            <div class="s8-prd">
            	<img src="images/s1-prd.png" alt="" class="s8-prd-img">
                <img src="images/s1-seal.png" alt="" class="s8-seal">
                <img src="images/s1-gum.png" alt="" class="s8-gum">
            </div>
            
        </div>
        
        <img src="images/s8-model.png" alt="" class="s8-model">
        
        <div class="s8-btm-bx">
        	<div class="btn-bx">
                <a href="javascript:bookmarkscroll.scrollTo('topForm')" class="comn-btn s3-btn pulse" id="comn-btn"><p>Claim Free Bottles</p> <img src="images/btn-arw.png" alt="" class="btn-arw"></a>
                <small class="btn-sml-tx">60-Day Money Back Guarantee</small>
        	</div>
            
        	<div class="disc-appl">
                <p class="disc-tx"><span>Congratulations!</span><br> Discount Code: Activated</p>
                <p class="disc-cpn">FreeBottle</p>
            </div>
        </div>
        
        <img src="images/s8-arw.png" alt="" class="s8arrow">
    </div>
</div>

<div class="footer">
    <div class="container">
    	<img src="images/logo.png" alt="" class="ftr-log">
        <p class="ftr-tx"><a href="#" data-fancybox data-src="#terms">Terms and Conditions</a>  |  <a href="#" data-fancybox data-src="#privacy">Privacy Policy</a>  |  <a href="#" data-fancybox data-src="#contact">Contact Us</a></p>
        <p class="ftr-tx">&copy; <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> Restore CBD Gummies. All Rights Reserved</p>
        <p class="ftr-tx ftr-tx2">*The statements made on our websites have not been evaluated by the FDA (U.S. Food & Drug Administration). Our products are not intended to diagnose, cure or prevent any disease. The information provided by this website or this company is not a substitute for a face-to-face consultation with your physician, and should not be construed as individual medical advice. The testimonials on this website are individual cases and do not guarantee that you will get the same results. Due to the nature of this product and to protect the privacy of the individuals, actual names and photographs of the individuals depicted in the testimonials have been changed. Individuals are remunerated.</p>
    </div>
</div>

<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/bookmarkscroll.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('select[name="state"] option').removeAttr('selected');
    $('select[name="state"] option[value="'+ $('select[name="state"]').attr('value') +'"]').attr('selected','');
});

function isScrolledIntoView(elem) {
	var docViewTop = $(window).scrollTop();
	var docViewBottom = docViewTop + $(window).height();
	
	var elemTop = $(elem).offset().top;
	var elemBottom = elemTop + $(elem).height();
	
	return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}	

$(window).scroll(function(){
	if (isScrolledIntoView('.s1-animate-arrow') === true) {
	   $('.s1-animate-arrow').addClass('sec1-arr-wo');
	}
	
	if (isScrolledIntoView('.s8arrow') === true) {
	   $('.s8arrow').addClass('sec8-arr-wo');
	}
});
</script>
<?php include_once('footer-modal.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>
</html>
