<?php
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parse = parse_url($url);

if(isset($parse['query'])):
    $qstring = (strlen($parse['query']) > 0)?'?'.$parse['query']:'';
else:
    $qstring = '';
endif;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Restorative Health Institute</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/timer.css">
<script type="text/javascript">
	function getDate(days) {  
	var dayNames = new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");    
	var monthNames = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");    
	var now = new Date();   
	now.setDate(now.getDate() + days);   
	var nowString = dayNames[now.getDay()] + ", " + monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear();   
	document.write(nowString); 
		}
</script>

<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    
<style>
    .fancybox__container {
        z-index:999999;
    }
    
    .fancybox__container .modal-content h3 {
        text-align: left;
        font-size: 25px;
        margin: 0 0 25px;
    }
    
    .fancybox__container .modal-content p {
        text-align: justify;
        margin: 0 0 15px;
    }
</style>

</head>

<body>

<div class="header">
   <div class="container">
     <div class="hdr-left">
      	<p class="advertorial">-Advertorial-</p>
      	<img src="images/logo.png" alt="" class="logo">
      </div>
     <img src="images/menu.png" alt="" class="menu">
   </div>
</div>

<div class="middle">
	<div class="container">
    	<div class="left-side">
        	<p class="lft-txt1">Exclusive</p>
            <p class="lft-txt2">Health Update</p>
            <p class="clearall"></p>
            <h1><span>Banned By Big Pharma?</span> European Docs Uncover Secret U.S. Joint Pain Breakthrough</h1>
            
            <p class="lft-txt3">Backed By 100+ Scientific Studies, Top Doctors Are Now Recommending This New Breakthrough To Turn Back The Clock on Joint Pain</p>
            
            <div class="postbox">
                <img src="images/old-man.png" alt="">
                <p class="postbox-p1">Posted By S.L. Jeffries <span>S.L. Jeffries</span></p>
                <p class="postbox-p2">Published On  
                <span><script type="text/javascript">getDate(0);</script></span></p>
             </div>
             <p class="clearall"></p>
             <div class="midimg1bx">
             	<img src="images/lft-img1.jpg" alt="" class="lft-img1">
             </div>
             <p class="bdfont"><b>(CALIFORNIA) - Americans from coast-to-coast are rushing to get this unique CBD pain breakthrough before a potential Big Pharma takeover.</b></p>
             
             <p class="bdfont">Everyone knows the U.S. medical system is broken when it comes to joint pain. </p>
             
             <p class="bdfont">Big Pharma runs the show and rakes in billions every year with ineffective, addictive pills – while honest Americans get shut out of natural, drug-free solutions.</p>
             <p class="clearall"></p>
            
             <p class="bdfont"><b>As a result, a shocking 58.5 million Americans suffer from arthritis every single day. </b><br class=" show-desk">Millions more suffer in silence with undiagnosed pain.  </p>
             <p class="clearall"></p>
            
             <p class="bdfont">Seniors have it the worst. Many struggle with simple tasks like climbing stairs, taking a walk, or even opening a jar of soup. <span class="blue">Thankfully, a new exposé by European doctors could revolutionize life for Americans lucky enough to get this in time.</span></p>
            
             <p class="bdfont">That's because the European Pain Federation just revealed a long lost American joint breakthrough that's so powerful, it <u>could mark the end of Big Pharma pain pills</u>.</p>
             
             <p class="bdfont"><b>In fact, it's been shown to reduce inflammation, stiffness, aching and pain up to 50% day after day - no matter what age you are.</b> Plus, it’s 100% natural, does not require a prescription, and goes down easy in a tasty gummy solution. </p>
             
             <p class="clearall"></p>
             <div class="midimg2bx" id="stip-opn">
             	<img src="images/lft-img3.jpg" alt="" class="lft-img1">
                <div class="midimg2bx-txt1 midimg2bx-txt1-blue">
                	<p class="bdfont"><i><span class="bold">JOINT PAIN MIRACLE:</span> A Rare Plant Extract Discovered by U.S. Scientists is Now Available in <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>">Restore 750mg CBD Gummies,</a> Created to Boost Joint Health and Mobility at Any Age.</i></p>
                </div>
             </div>
             <p class="clearall"></p>
             <p class="comn-hding">Banned By Big Pharma Until Now</p>
              <p class="clearall"></p>
             <p class="bdfont mrg-top">This bombshell discovery is a welcome surprise to the 59 millions Americans suffering with their joint health and other concerns. </p>
             <p class="clearall"></p>
           <p class="bdfont">But a deeper look shows it's been around for quite some time, and likely "hushed up" by the powers-that-be.</p>
             <p class="bdfont">It all started when American scientists in rural Kentucky discovered a powerful “anti-pain” compound, hidden in a common field plant.<b> Further research showed it could revolutionize life for joint pain sufferers nationwide, without expensive pills and operations.</b></p>	
             <p class="bdfont">The findings received widespread acclaim in the <span class=" bold">European Journal of Pain</span>, a highly-respected journal backed by the renowned <i>European Pain Federation</i>. After all, it’s quite possibly the biggest breakthrough in the field of joint pain and inflammation in over 20 years.</p>
             
             <div class="lft-bx1">
             	<img src="images/medicine.png" alt="" class="medicine">
                <div class="lft-bx1-lft">
             	<p class="bdfont mrg-top-none"><span class="red">Sadly, zero American medical journals agreed to publish this remarkable discovery –</span> despite clear proof, and studies conducted in the U.S. by American scientists. Experts believe this is due to the U.S. government's close Big Pharma ties and strict control of medical research that doesn't fit their agenda.</p>
                </div>
             </div>
             
             <p class="clearall"></p>
             <p class="bdfont">Thankfully, as a private institution with no outside funding, we are sharing this discovery far and wide for as long as we can. The bad news is, Pharma execs don't take kindly to their profits being wiped away, and we could be forced to take this page down any day. <span class="blue">So if you want to get this all-natural breakthrough before it's gone, you must act now.</span> </p>
             
             <p class="clearall"></p>
             <p class="comn-hding">Miracle CBD Breakthrough Finally Released to the American Public</p>
             <p class="clearall"></p>
             
             <div class="midimg2bx">
             	<img src="images/lft-img4.jpg" alt="" class="lft-img1">
                <div class="midimg2bx-txt1 midimg2bx-txt1-blue">
                	<p class="bdfont"><i><span class="bold">NATURAL RELIEF IN MINUTES:</span> <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>">Restore CBD Gummies</a> have 750mg hemp/CBD extract in each bottle and more -- backed by strict 3rd party testing to ensure zero heavy metals, zero bacteria and zero THC. So you can get 100% natural relief without the “high” and without risking your health with ordinary, untested CBD products.</i> </p>
                </div>
             </div>
             <p class="clearall"></p>
             <p class="bdfont mrg-top">The best way for lucky readers to get this breakthrough is by ordering now during the limited online release of prescription-free <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>">Restore 750mg CBD Gummies</a>, chock full of the "anti-pain” compound that's taking the U.S. by storm.</p>
           
           <p class="bdfont">Unlike ordinary CBD products, Restore includes a chewable gummy formula with 25mg in every single dose for powerful, fast relief. Plus, it's 3rd party tested CBD from a FDA-inspected Utah facility, so you know you're getting the real thing. It also includes proprietary 'absorption maximizers' by way of natural flavors and compounds. </p>
           
            <p class="bdfont"><b>The premium formula - based on top American research - works by “resetting” dysfunctional pain receptors and flooding them with the powerful “anti-pain” hemp-based compound now available in Restore Gummies.</b> </p>
           <p class="clearall"></p>
           <div class="lft-bx3">
           		<p class="lft-bx3-hding">Over 100 clinical studies suggest this compound <br class="hide-tab">can deliver big improvements in </p>
                <ul class="lft-bx3-list">
                	<li><img src="images/lftbx3-icon1.png" alt="">Joint Pain</li>
                    <li><img src="images/lftbx3-icon2.png" alt="">Inflammation </li>
                    <li><img src="images/lftbx3-icon3.png" alt="">Stiffness</li>
                    <li><img src="images/lftbx3-icon4.png" alt="">Swelling</li>
                    <li><img src="images/lftbx3-icon5.png" alt="">Balance</li>
                    <li><img src="images/lftbx3-icon6.png" alt="">Sleep</li>
                    <li><img src="images/lftbx3-icon7.png" alt="">Stress</li>
                    <li><img src="images/lftbx3-icon8.png" alt="">Energy Levels</li>
                </ul>
           </div>
           
           <p class="clearall"></p>
           
           <p class="bdfont">When taken daily, users can expect a calming sense of relief soon after taking each gummy, 
and powerful long-term relief as the anti-pain compound builds up over time.  </p>
           
           <p class="bdfont">What’s more, Restore Gummies taste delicious and appeal to anyone’s taste buds. You can forget about the tired, old chore of swallowing multiple pills, and opt for this tasty, fun snack instead.</p>
           
           
           <p class=" clearall"></p>
           <div class="lft-bx4">
           		<img src="images/commma.png" alt="" class="commma">
           		<img src="images/doc1.png" alt="" class="doc1">
                <div class="lft-bx4-rgt">
                	<p class="lft-bx4-rgt-txt1">Most supplements can’t deliver a fraction of these results. In just a few days, it could dramatically improve pain and discomfort – and it’s so easy for patients to take as a chewable gummy product.</p>
                    <p class="lft-bx4-rgt-txt2"><span>Dr. Arnold Peters</span>Surgeon and Medical advisor to the Restorative Health Institute</p>
                </div>
           </div>
           <p class="clearall"></p>
          
           <p class="clearall"></p>
             <p class="comn-hding">How <span>Restore CBD</span> Promotes Joint Health Fast</p>
             <p class="clearall"></p>
              <div class="midimg2bx">
             	<img src="images/lft-img5.jpg" alt="" class="lft-img1">
                <div class="midimg2bx-txt1 midimg2bx-txt1-blue">
                	<p class="bdfont mrg-top-none"><span class="bold">STUNNING SCIENTIFIC RESULTS:</span><i> A research trial by American scientists at the historic University of Kentucky for 4 consecutive days shows that direct application of the key compound in Restore CBD Gummies may help reduce swelling and pain by 50% every single day in participants with arthritis.</i></p>
                </div>
             </div>
             <p class="clearall"></p>
             <p class="bdfont mrg-top"><a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>">Restore 750mg CBD</a> is the breakthrough new joint health gummy you take once per day.</p> 
             <p class="bdfont">Since hitting the US market, demand has soared and it’s no surprise why.<span class="bold2"> Study participants taking the active ingredient in Restore CBD Gummies enjoyed a massive 50% reduction in pain every day they used it. </span></p>
             <p class="bdfont">Best of all, it tastes great, doesn’t require a prescription or doctor's visit, and has no known side-effects. Plus, it’s tested to have 0% of the psychoactive THC compound, so you get all the benefits without a “high”.</p>
             <p class="bdfont">The active ingredient in <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>">Restore CBD Gummies</a> is a specific cannabinoid (CBD for short) that “binds” with TRPM-8 pain receptors when delivered topically in research by American scientists.</p>
             <p class="clearall"></p>
             
             <div class="lft-bx6">
             	<p class="lft-bx6-hding">3 Simple Steps. Unbeatable Results.</p>
                <div class="lft-bx6-left">
                	<ul class="lft-bx6-list">
                    	<li>
                        	<img src="images/lft-bx6-icon1.png" alt="">
                            <p class="lft-bx6-list-p1">STEP: 1 </p>
                            <p class="lft-bx6-list-p2">Tasty “absorption maximizers” make it easy to take Restore CBD Gummies daily and digest easily</p>
                        </li>
                        <li>
                        	<img src="images/lft-bx6-icon2.png" alt="">
                            <p class="lft-bx6-list-p1">STEP: 2 </p>
                            <p class="lft-bx6-list-p2">The body’s Endocannabinoid receptors take over and spread the compound to not one, but all points of pain, stress or inflammation</p>
                        </li>
                        <li>
                        	<img src="images/lft-bx6-icon3.png" alt="">
                            <p class="lft-bx6-list-p1">STEP: 3 </p>
                            <p class="lft-bx6-list-p2">The system-wide flood of CBD creates calm initial relief, while supporting pain receptors and nerve signals for long-term relief</p>
                        </li>
                    </ul>
                </div>
             </div>
             <p class="clearall"></p>
             <p class="bdfont mrg-top"><b>Experts say this interactive process with <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>">Restore CBD</a> compounds, the Endocannabinoid system, and TRPM pain receptors works so well that it effectively blocks excessive pain signals from reaching the brain – so you can finally feel comfort and relief again.</b></p>
             <p class="bdfont">That’s why the release of <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>">Restore 750mg CBD Gummies</a> to the American market has sparked such incredible demand with people of all ages – especially seniors who have often spent decades trying to solve their pain. </p>
             <p class="bdfont">It’s also why experts are worried Big Pharma will swoop in at any moment and force the company to shut down. It threatens their profits too much. </p>
             <p class="bdfont">For pennies on the dollar compared to traditional solutions, Americans can reduce pain and discomfort, reduce stress and anxiety, and finally avoid losing the mobility and freedom they’ve enjoyed for so long. </p>
             <p class="clearall"></p>
             <p class="comn-hding">What Happy CBD Users Are Saying</p>
              <p class="clearall"></p>
              <div class="testbx">
                 <div class="toprvbx">
                       <img src="images/t-img1.jpg" class="rvnmbx">
                        <p class="rvbx-txt1">The Gummies provide additional relief.</p>
                        <p class="clearall"></p>
                        <img src="images/stars.png" alt="" class="rvbx-star">
                        <p class="bdfont">“Excellent quality packaging and excellent quality hemp Gummies. I have severe neck, shoulder, upper and lower back, and knee pain issues. Although I must take prescribed pain medication, <b>the Gummies provide additional relief.”</b></p>
                        <p class="rvbx-txt3 bdfont"><b>- Edgar F.  <span>|</span></b> Verified Buyer</p>
                    </div>
                    
                 <div class="toprvbx">
                       <img src="images/t-img2.jpg" class="rvnmbx">
                        <p class="rvbx-txt1">If you plan on using CBD Gummies, this is a great product.</p>
                        <p class="clearall"></p>
                        <img src="images/stars.png" alt="" class="rvbx-star">
                        <p class="bdfont">“I used this for lower back pain. I have had two back surgeries and have tried other products, and this one works. If you plan on using CBD Gummies, this is 
a great product. ”</p>
                        <p class="rvbx-txt3 bdfont"><b>- Cheryl K. <span>|</span></b> Verified Buyer</p>
                    </div>
                    
                 <div class="toprvbx">
                       <img src="images/t-img3.jpg" class="rvnmbx">
                        <p class="rvbx-txt1">I was able to sleep through the night for the first time in months.</p>
                        <p class="clearall"></p>
                        <img src="images/stars.png" alt="" class="rvbx-star">
                        <p class="bdfont">“I’ve been suffering from shoulder pain for a couple of months and thought I’d give this a try. I was amazed. Within a few minutes, my pain was almost gone. I was able to sleep through the night for the first time in months.”</p>
                        <p class="rvbx-txt3 bdfont"><b>- Rachel G.  <span>|</span></b> Verified Buyer</p>
                    </div>      
              </div>  
              
              <p class="clearall"></p>
              <p class="bdfont mrg-top2">However, the team behind Restore CBD Gummies doesn’t expect you to just take their word for this. Instead, they want you to see and feel the results for yourself. <b>This is why they’re offering an unbeatable ‘double your money back’ guarantee if <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>">Restore CBD Gummies</a> doesn’t quickly and powerfully improve your joint health.</b></p> 
              
              <p class="clearall"></p>
              <div class="lft-bx4 lft-bx4-bradBoeks">
           		<img src="images/commma.png" alt="" class="commma">
                
           		<div class="bradBoeks"><img src="images/bradBoeks.jpg" alt="" class="doc2"></div>
                <div class="lft-bx4-rgt lft-bx4-rgt2">
                	<p class="lft-bx4-rgt-txt1">We’re 100% confident that our users will be amazed 
by this new formula. So to make this an easy choice for anyone and to ensure complete satisfaction to our amazon customers, we’re offering a never-before-seen ‘double your money’ no-risk guarantee, and two free bottles for new customers</p>
                    <p class="lft-bx4-rgt-txt2"><span>Brad Boekes</span>Restore Health CEO</p>
                </div>
           </div>
           
           <p class="clearall"></p>
           <p class="comn-hding">How To Get 2 Free Bottles of <span>Restore CBD</span></p>
           <p class="clearall"></p>
           <p class="bdfont mrg-top">To celebrate the official nationwide release of Restore 750mg CBD Gummies, the company is offering up to <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>">2 FREE bonus bottles with a qualifying order.</a><b> This special giveaway is available for the next 48-hours only.</b></p>
           <img src="images/free-prd.png" alt="" class="free-prd">
           <p class="bdfont mrg-top2">A secure website has been set up for readers to place orders. This gives everyone an equal chance to try <b>Restore 750mg CBD Gummies. </b><a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>">Claim up to TWO FREE Bottles + FREE shipping</a></p>
           <p class="bdfont">If you are not convinced that this is the most important product in your daily health regimen - a product that helps you or a loved one how to get back your mobility again - return it at once and the company will promptly issue a complete refund, no questions asked.</p>
           <p class="clearall"></p>
           <div class="lft-bx7">
           		<div class="lft-bx7-top">
                	<p class="lft-bx7-top-p1"><img src="images/warng.png" alt=""> WARNING <img src="images/warng.png" alt=""></p>
                    <p class="lft-bx7-top-p2">Due to <span>Restore CBD Gummies</span> recent media exposure and growing popularity, this offer will likely sell out today. Those who miss out on the 48-hour deadline may lose out on this free bonus bottle offer.</p>
                </div>
                
                <div class="lft-bx7-mid">
                	<div class="lft-bx7-left hide-mob">
                		<img src="images/bottle.png" alt="" class="lft-bx7-left-prd">
                        <img src="images/menyback.png" class="menyback">
                    </div>
                    
                	<div class="lft-bx7-rgt">
                    	<img src="images/rgt-logo.png" alt="" class="logo2">
                        <p class="lft-bx7-rgt-p1">Free Discount Code Applied</p>
                        <p class="clearall"></p>
                        <div class="lft-bx7-left forMob">
                            <img src="images/bottle.png" alt="" class="lft-bx7-left-prd">
                            <img src="images/menyback.png" class="menyback">
                   		</div>
                        <p class="lft-bx7-rgt-p2">FREEBOTTLE</p>
                        <p class="clearall"></p>
                        <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>" class="brn1">Get Your Restore CBD Now <img src="images/btn-arw.png"></a>
                        <p class="clearall"></p>
                        <p class="lft-bx7-rgt-p3"><script type="text/javascript">getDate(0);</script></p>
                        <p class="lft-bx7-rgt-p4">Current Stock <img src="images/red-line.png" alt=""> <span>LOW</span>, Sell-Out <span>Risk HIGH</span></p>
                    </div>
                </div>
           </div>
           
           
        </div>
        
        <div class="right">
        	<div class="right-mid">
            	<p class="comn-hding2">Special Offer</p>
                <div class="offer-bx">
                	<img src="images/rgt-logo.png" alt="" class="rgt-logo">
                    <p class="offer-bx-p1">For a limited time, Get 2 FREE Bottles + FREE shipping!</p>
                    <p class="clearall"></p>
                    <div class="offer-bx-mid">
                    	<img src="images/rgt-prd.png" alt="" class="rgt-prd">
                        <div class="timer-box"><span>HURRY!</span> Limited Time Offer 
                            <div id="Timer2"></div>
                        </div>
                        <p class="clearall"></p>
                        <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>" class="brn2">Get Your Restore CBD Now</a>
                        <p class="clearall"></p>
                        <p class="brn2-txt">This Offer Is Not Available In Stores</p>
                    </div>
                </div>
                
                <p class="comn-hding2 mrg-top">CBD Reviews</p>
                <div class="rgt-testbx">
                    <div class="toprvbx2">
                        <p class="rvbx-txt1">The Gummies provide additional relief.</p>
                        <p class="clearall"></p>
                        <img src="images/stars.png" alt="" class="rvbx-star">
                        <p class="bdfont">“Excellent quality packaging and excellent quality hemp Gummies. I have severe neck, shoulder, upper and lower back, and knee pain issues. Although I must take prescribed pain medication, <b>the Gummies provide additional relief.”</b></p>
                        <p class="rvbx-txt3 bdfont"><b>- Edgar F.  <span>|</span></b> Verified Buyer</p>
                    </div>
                    
                    <div class="toprvbx2">
                        <p class="rvbx-txt1">If you plan on using CBD Gummies, this is a great product.</p>
                        <p class="clearall"></p>
                        <img src="images/stars.png" alt="" class="rvbx-star">
                        <p class="bdfont">“I used this for lower back pain. I have had two back surgeries and have tried other products, and this one works. If you plan on using CBD Gummies, this is 
    a great product. ”</p>
                        <p class="rvbx-txt3 bdfont"><b>- David V. <span>|</span></b> Verified Buyer</p>
                    </div>
                    
                    <div class="toprvbx2">
                        <p class="rvbx-txt1">I was able to sleep through the night for the first time in months.</p>
                        <p class="clearall"></p>
                        <img src="images/stars.png" alt="" class="rvbx-star">
                        <p class="bdfont">“I’ve been suffering from shoulder pain for a couple of months and thought I’d give this a try. I was amazed. Within a few minutes, my pain was almost gone. I was able to sleep through the night for the first time in months.”</p>
                        <p class="rvbx-txt3 bdfont"><b>- Rachel G.  <span>|</span></b> Verified Buyer</p>
                    </div>
                    
                    <div class="toprvbx2">
                        <p class="rvbx-txt1">I can feel it begin to work in about 20 minutes.</p>
                        <p class="clearall"></p>
                        <img src="images/stars.png" alt="" class="rvbx-star">
                        <p class="bdfont">“I can feel it begin to work in about 20 minutes. I have been able to skip an evening pain med or two on occasion because of using this. Well worth the money. By the way, my chronic pain issues have been with me for over ten years, and I have tried an awful lot of things. ”</p>
                        <p class="rvbx-txt3 bdfont"><b>- Ron Gardner   <span>|</span></b> Verified Buyer</p>
                    </div>
                    
                    <div class="toprvbx2">
                        <p class="rvbx-txt1">I am an avid cyclist and trail runner.</p>
                        <p class="clearall"></p>
                        <img src="images/stars.png" alt="" class="rvbx-star">
                        <p class="bdfont">"I am an avid cyclist and trail runner. I had an injury to my knee at the end of this past summer - MRI showed I have very little cartilage left in my left knee. I was in constant pain, and when I walked felt like my knee was going to hyper-extend and lock in place. After just a few days of using the gummies regularly 3X per day, I am back on my bike, running a little and walking my dogs every day with little to no pain. Thank you!"</p>
                        <p class="rvbx-txt3 bdfont"><b>- Shirley Wood  <span>|</span></b> Verified Buyer</p>
                    </div>
                </div>
                <p class="clearall"></p>
                <p class="comn-hding2 mrg-top">Special Offer</p>
                <p class="clearall"></p>
                
            </div>
            
           <div class="right-mid">
                <div id="sticky">
                    <div class="offer-bx">
                        <img src="images/rgt-logo.png" alt="" class="rgt-logo">
                        <p class="offer-bx-p1">For a limited time, Get 2 FREE Bottles + FREE shipping!</p>
                        <p class="clearall"></p>
                        <div class="offer-bx-mid">
                            <img src="images/rgt-prd.png" alt="" class="rgt-prd">
                            <div class="timer-box"><span>HURRY!</span> Limited Time Offer 
                                <div id="Timer3"></div>
                            </div>
                            <p class="clearall"></p>
                            <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>" class="brn2">Get Your Restore CBD Now</a>
                            <p class="clearall"></p>
                            <p class="brn2-txt">This Offer Is Not Available In Stores</p>
                        </div>
                    </div>
                </div>  
            </div> 
        </div>
        
        <div class="left-side">
             <p class="lft-txt3">To your health,</p>
             <p class="clearall"></p>
             <img src="images/signa.png" alt="" class="signa">
             <p class="lft-txt4">Restorative Health Institute</p>
             <p class="clearall"></p>
             <p class="bdfont lft-txt6"><span class="bold2">P.S.</span> This natural pain relief extract was considered “illegal” for decades. In cahoots with greedy Big Pharma companies, our government ensured you couldn’t get access to it without suffering heavy penalties. They’ve been trying to hide its natural, safe, and effective support for joint and muscle problems from the public, to protect their profits. This could be your one and only chance to try it yourself before Big Pharma tries to get it banned again. <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>">Try Restore CBD Gummies Risk-Free…</a></p>
           
             <p class="clearall"></p>
             <p class="lft-txt5">References:</p>
             <p class="lft-txt7"><span>1.</span> <a target="_blank" href="https://www.cdc.gov/chronicdisease/resources/publications/factsheets/arthritis.htm">https://www.cdc.gov/chronicdisease/resources/publications/factsheets/arthritis.htm</a></p>
             <p class="lft-txt7"><span>2.</span> <a target="_blank" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4851925/">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4851925/</a></p>
             <p class="lft-txt7"><span>3.</span> <a target="_blank" href="https://medsafe.govt.nz/profs/PUArticles/Dec2012PainRelief.htm">https://medsafe.govt.nz/profs/PUArticles/Dec2012PainRelief.htm</a></p>
             <p class="lft-txt7"><span>4.</span> <a target="_blank" href="https://www.medicalnewstoday.com/articles/hemp-gummies-vs-cbd-gummies-what-to-know #health-benefits-and-risks">https://www.medicalnewstoday.com/articles/hemp-gummies-vs-cbd-gummies-what-to-know #health-benefits-and-risks</a></p>
             <p class="lft-txt7"><span>5.</span> <a target="_blank" href="https://www.medicalnewstoday.com/articles/319475#benefits">https://www.medicalnewstoday.com/articles/319475#benefits</a></p>
             
             <p class="bdfont mrg-top"><b>THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR <br class="show-desk">CONSUMER PROTECTION UPDATE.</b></p>
             <p class="lft-txt6 mrg-top">Representations regarding the efficacy and safety of Restore 750mg CBD Gummies have not been evaluated by the Food and Drug Administration. The FDA only evaluates foods and drugs, not supplements like these products. These products are not intended to diagnose, prevent, treat, or cure any disease. This product is not for use by or sale to persons under the age of 18. This product should be used only as directed on the label. It should not be used if you are pregnant or nursing. Consult with a physician before use if you have a serious medical condition or use prescription medications. A Doctor's advice should be sought before using this and any supplemental dietary product. Dr. Arnold Peters is a pen name for a practicing doctor that is a 3rd party consultant for the team behind the Restore 750mg CBD Gummies. All trademarks and copyrights are property of their respective owners and are not affiliated with nor do they endorse this product. These statements have not been evaluated by the FDA. Individual results will vary. For the purposes of privacy names and images shown are representations of CBD users, and not necessarily users of Restore 750mg CBD Gummies. By using this site, you agree to follow the Privacy Policy and all Terms & Conditions printed on this site. Void Where Prohibited by Law.</p>
             
             <p class="lft-txt6">Click <a href="https://restorehealth-us.com/assets/25-mg-CBD-Gummies-COA-Lot-HG220701-25-7-22-2022-.pdf" target="_blank">here</a> for the Certificate of Analysis from official 3rd party testing and analysis of the formula behind Restore 750mg CBD Gummies.</p>
           
           </div>
        
    </div>
</div>

<footer>
	<div class="btmfix" style="float:left; width:100%; display:none;">
    	<div class="btm-strip" id="ctabtn-mob" style="position:fixed;">
        <div class="container">
             <div class="stp-bx">
                <p class="btm-stp-txt">Exclusive Offer For Our Readers<span>To get your 2 free bottles now</span></p>
                <img src="images/combo-btl.png" alt="" class="combo-btl">
                <p class="clearall forMob"></p>
                <a href="https://new.restorehealthusa.com/gummies<?php echo $qstring; ?>" class="brn3">Check Availability</a>
            </div>
        </div>
    </div>
    </div>
    <div class="clearall"></div>
    
    <div class="container">
    	
    	<p class="ftrtxt ftrtxt2"><a href="#" data-fancybox data-src="#terms">Terms & Conditions</a> <span>|</span> <a href="#" data-fancybox data-src="#privacy">Privacy Policy</a>   <span>|</span>  <a href="#" data-fancybox data-src="#contact">Contact Us</a></p>
        <p class="ftrtxt">© Copyright <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> Restore Health USA.<br class=" forMob"> All Rights Reserved.</p>
    </div>
	
</footer>

<div class="modal fade" id="terms" role="dialog" style="display:none;">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h3>Terms and Conditions</h3>
                <p>Use of Website</p>
                <p>Restore Health USA (the “Company”) offers you use of this Website and the information, including but not
                    limited to the use of any text, photographs, audio, video, and any other materials (hereafter
                    individually and collectively "information"), and the products distributed in conjunction with this
                    Website (the “Website”), on your acceptance of these Terms of Use, our Privacy Policy, and other
                    notices and agreements posted on this Website. Your use of this Website indicates your
                    acknowledgment and agreement to these Terms of Use, Privacy Policy and other notices and agreements
                    posted on this Website. If you do not agree to be bound by and comply with all of the foregoing, you
                    may not access or use our website. We suggest you print a copy of each of these documents for your
                    records.</p>
                <p>The Company shall have the right, at its sole discretion, to modify, add or remove any terms or
                    conditions of these Terms of Use without notice or liability to you. Any changes to these Terms of
                    Use shall be effective immediately following the posting of such changes on this Website. You agree
                    to review these Terms of Use from time to time and agree that any subsequent use by you of this
                    website following changes to these Terms of Use shall constitute your acceptance of all such
                    changes.</p>
                <p>The Company authorizes you to view and access a single copy of the content available on or from
                    restorehealthusa.com (individually and collectively referred to the "Website") solely for your use.</p>
                <p>To use the services of this Website you must be 14 years of age or older, provided that if you are
                    under 18 years of age your parents or guardians have reviewed the Website’s Terms of Use and Privacy
                    Policy and you are using the Website with parental or guardian consent.</p>
                <p>YOUR USE OF THIS SITE IS AT YOUR SOLE RISK. THE SITE IS PROVIDED ON AN "AS IS" AND "AS AVAILABLE"
                    BASIS. THE COMPANY RESERVES THE RIGHT TO RESTRICT OR TERMINATE YOUR ACCESS TO THE SITE OR ANY
                    FEATURE OR PART THEREOF AT ANY TIME WITHOUT NOTICE.</p>
                <p>Standard Billing Terms:</p>
                <p>All Restore CBD products are billed as one-time orders, unless you choose our Subscribe & Save option at checkout, which gives an additional 15% off the prices below.</p>
                <p>You can purchase 1 full-sized Restore CBD jar for a total of $69.99</p>
                <p>You can purchase 3 full-sized Restore CBD jars for a total of $149.70 ($49.99 per bottle)</p>
                <p>You can purchase 5 full-sized Restore CBD jars for a total of $189.70 ($37.99 per bottle)</p>
                <p>With the 1 jar and 3 jar options only, you have the option to switch to a recurring subscription, which will reduce today's price by 15% and enter you in an auto-shipment program starting 30 days (for 1 jar orders) or 90 days (3 jar orders) from now. </p>
                <p>If you choose this program, you will be billed the discounted price today and then every 30/90 days thereafter until you cancel. This is 100% optional, and to purchase this upgrade, you agree to read the terms and click a checkbox for consent, before completing your order.</p>
                <p>With the 5 Jar option, there is no opportunity to enroll into a subscription.</p>
                    
                <p>Standard Shipping Policy:</p>
                
                <p>All Restore CBD orders are processed within 48 hours of the order, and then shipping via USPS or UPS Mail Innovations.</p>
                
                <p>Orders are sent from our U.S. facility, and will arrive within 7 business days after shipment.</p>
                
                <p>Standard 60-Day Refund Policy:</p>
                <p>While our customers have seen spectacular results - if for any reason you try our product/s and are
                    not satisfied, you are fully guaranteed by our 60-day return period</p>
                <p>Just follow our simple process here to get started: </p>
                <p>1. Contact our friendly customer concierge team at 1-800-617-1619 or send an email to
                    support@restorehealthusa.com</p>
                <p>2. Please tell our concierge agent whether you’d like a Return and she will provide
                    you with an RMA No. (Return Merchandise Authorization) and our Return Address.</p>
                <p>3. Please include both the unused and empty containers in the return package. Write the RMA No. on the outside of the shipping package, and send the product/s back to the Return Address
                    provided (within 60 days from your date of purchase). Refunds are proportional to the amount of
                    product returned, so if 3 bottles out of a 6 bottle order are returned, customer will receive a 50%
                    refund less s+h).</p>
                <p>Send the package via your preferred shipping courier (USPS is cost-effective and fast). Return
                    shipping costs are the responsibility of the customer. You may opt to provide us the
                    tracking/confirmation number for easy monitoring and a faster return credit. Please allow 5-10
                    business days for your return to be processed and reflected on your bank/credit account
                    Important: Used or empty bottles are only eligible for returns if sufficient time has passed to
                    consume the product as directed. For example, we will not accept 3 empty bottles (3-month supply) or
                    5 empty bottles (5-month supply) after only one or two months. We offer a fair return policy to you
                    and in return, we ask that you be fair with us as well.</p>
                <p>IMPORTANT NOTES/REMINDERS:</p>
                <p> Guarantee Period: In order for us to issue your full refund (less S&H), the product/s must arrive
                    our facilities within 60 days of the original purchase date. (Ex. If your original purchase date is
                    July 16, 2020 you should have returned products on or before September 16, 2020)</p>
                <p>Refund Amount: Refunds are proportional to the amount of product returned. For example, if only 2
                    jar out of a 6 jar order are returned, customer will receive a 33% refund less S+H</p>
                <p>For Return Postage: customers are responsible for postage costs, except for company shipment
                    errors</p>
                <p>RMA: You must have an RMA number on your package before returning a product to us. Contact
                    our concierge team by phone or email to receive this number.</p>
                <p>Refused/Undeliverable: All packages returned to us as “refused” or “undeliverable” shall be refunded
                    in full less original S+H fees and less any fees levied upon us by postal providers during return
                    shipping.</p>
                <p>Any product returns that do not comply with our stated return policies are subject to loss of refund,
                    or a partial refund.</p>
                <p>Your Conduct</p>
                <p>This Website may be used only for lawful purposes of obtaining information about, and purchasing, the
                    Company’s products. The Company specifically prohibits any use of the Website, and all users agree
                    not to use the Website, for any purposes other than designated by the Company, including but not
                    limited to:</p>
                <p>Expected Results Disclosure</p>
                <p>Individual results will vary. This is true of our product, as well as any other product on the
                    market. Proper results will come alongside a healthy diet & increased exercise. </p>
                <p>Model Disclosure</p>
                <p>Models are shown for illustrative purposes. Some images and testimonials are paid models, and some
                    are related to the company employees or officers. All models and testimonial providers have used our
                    products but may not be long-term customers. Models may be remunerated, given product, or may be
                    fictionalized based on real persons. Their use does not imply a personal endorsement for any product
                    by them or anyone of their likeness. </p>
                <p>Advertising Disclosure</p>
                <p>This product (and all other products by Restore CBD) are advertised online and offline in various
                    media outlets. You may see our ads on Facebook, Google, Bing, Yahoo, Taboola, Content.ad and various
                    other online advertising providers. Web viewers may be tracked and served ads on numerous occasions
                    via retargeting pixels. Offline advertising will be done through newspaper, print, and other outlets
                    to customers or through rented mailing lists </p>
                <p>Research Disclosure</p>
                <p>Any studies cited as clinical proof pertain only to individual ingredients in the formula, and not to
                    the product as a whole. No clinical studies have been performed on any Restore CBD products. Any and
                    all health claims refer to use of the supplement with a healthy diet and increase exercise. </p>
                <p>Devices, Security, etc</p>
                <p>Using any device, software or routine to interfere or attempt to interfere with the proper working of
                    this website or any activity being conducted on this site.</p>
                <p>Taking any action that imposes an unreasonable or disproportionately large load on this website's
                    infrastructure.</p>
                <p>If you have a password allowing access to a non-public area of this Website, disclosing to or sharing
                    your password with any third parties, or using your password for any unauthorized purpose.</p>
                <p>Using or attempting to use any engine, software, tool, agent or other device or mechanism (including
                    without limitation browsers, spiders, robots, avatars or intelligent agents) to navigate or search
                    this website other than the commonly recognized search engine and search agents, and other than
                    generally available third party web browsers (e.g., Firefox, Safari, or Internet Explorer).</p>
                <p>Attempting to decipher, decompile, disassemble or reverse engineer any of the software comprising or
                    in any way making up a part of this website.</p>
                <p>Aggregating, copying or duplicating in any manner any of the website content or information available
                    from this Website.</p>
                <p>Framing of or linking to any of the website content or information available from this Website.</p>
                <p>Participating in a denial-of-service attack against this site or against any other web site or
                    computer environment by using this site.</p>
                <p>Collecting or attempting to collect any information of others, including passwords and account or
                    other information, or providing to or transmitting through this site any material that is unlawful
                    or violates the rights of others.</p>
                <p>Engaging in any screen scraping or data acquisition and consolidation.</p>
                <p>Copying or adapting the HTML, asp.net, vd.net, XML, java script or any other dynamic code that the
                    Company creates to generate any Website Content or the pages making up this website.</p>
                <p>Making any unauthorized commercial use of this website.</p>
                <p>Site Security Rules</p>
                <p>Users are prohibited from violating or attempting to violate the security of this Website, including,
                    without limitation, (a) accessing data not intended for such user or logging into a server or
                    account which the user is not authorized to access, (b) attempting to probe, scan or test the
                    vulnerability of a system or network or to breach security or authentication measures without proper
                    authorization, (c) attempting to interfere with service to any user, host or network, including,
                    without limitation, via means of submitting a virus to this website, overloading, "flooding",
                    "spamming", "mailbombing" or "crashing", or (d) forging any TCP/IP packet header or any part of the
                    header information in any e-mail or newsgroup posting. Violations of network security may result in
                    civil or criminal liability. The Company will investigate occurrences that may involve such
                    violations and may involve, and cooperate with, law enforcement authorities in prosecuting users who
                    are involved in such violations.</p>
                <p>User Information</p>
                <p>When you register for the Website, you will be asked to provide the Company with certain information
                    including, without limitation, a valid email address (your "Information"). In addition to the terms
                    that may be set forth in any privacy policy on this Website, you understand and agree that the
                    Company may disclose to third parties, on an anonymous basis, certain aggregate information
                    contained in your registration application. The Company will not disclose to any third party your
                    name, address, e-mail address or telephone number without your prior consent, except to the extent
                    necessary or appropriate to comply with applicable laws or in legal proceedings where such
                    information is relevant. The Company reserves the right to offer third party services and products
                    to you based on the preferences that you identify in your registration and at any time thereafter;
                    such offers may be made by the Company or by third parties. Please see the Company's Privacy
                    Statement for further details regarding your Information.</p>
                <p>By submitting content or information, including but not limited to your personal information to any
                    public or non-public area of this Website, you acknowledge that any such content or information is
                    not confidential and that such content or information is accurate and true. You grant the Company
                    the royalty-free, perpetual, irrevocable, sublicenseable (through multiple tiers), non-exclusive
                    right (including any moral rights) and license, without restrictions of any kind, without any
                    payment or other consideration of any kind, and without permission or notification to you or any
                    third party, to use, reproduce, modify, adapt, publish, translate, create derivative works from,
                    distribute, communicate to the public, perform and display the content and information (in whole or
                    in part) worldwide and/or to incorporate it in other works in any form, media, or technology now
                    known or later developed, for the full term of any rights that may exist in such content. You also
                    permit any visitor to the website to access, display, view, store and reproduce such content.</p>
                <p>Use of Website Content</p>
                <p>The Website content may contain inaccuracies or typographical errors. This Website may contain
                    certain historical information. Historical information necessarily is not current and is provided
                    for your reference only. The Company is not responsible if information that made available on this
                    site is not accurate, reliable, complete, timely, or current. Any reliance upon the information on
                    this Website will be at your own risk.</p>
                <p>The Company reserves the right to modify the contents of the Website at any time, but we have no
                    obligation to update any information on this Website. You agree that it is your responsibility to
                    monitor changes to the Website.</p>
                <p>Visitors are given the opportunity to comment and upload information to this Website. The Company is
                    only a conduit for those postings. The Company has no obligation or responsibility to screen or
                    verify the information posted by others, it cannot and does not represent or warrant the veracity,
                    qualifications, skills, credentials, and experience of the information posted by others, nor does it
                    have the obligation or responsibility to screen or monitor communications between users of this
                    Website. The Company makes no endorsement of any person or any information posted to this
                    Website.</p>
                <p>he Company is under no legal obligation to, and generally does not, control or monitor the
                    information provided by others that is made available through the Website, nor can it authenticate,
                    guarantee the appropriateness, accuracy, reliability or endorse such information, and it has no
                    liability or responsibility for such information. You acknowledge that any reliance on the
                    information obtained through this Website will be at your own risk.</p>
                <p>Because user authentication on the Internet is difficult, the Company cannot and does not confirm
                    that each user is who they claim to be. It does not and cannot control the behavior of participants
                    on this website. In addition, there are risks, including but not limited to the risk of physical
                    harm, in dealing with strangers, underage persons, or people acting under false pretenses. You
                    assume all risks associated with dealing with other users with whom you come in contact through this
                    Website, and Company has no responsibility or liability for any transactions, online or offline,
                    between you and any third party.</p>
                <p>If You are a California resident in the United States, you waive California Civil Code d1542, which
                    says: "A general release does not extend to claims which the creditor does not know or suspect to
                    exist in his favor at the time of executing the release, which if known by him must have materially
                    affected his settlement with the debtor."</p>
                <p>You hereby release and agree to hold harmless the Company, its directors, officers, employees,
                    agents, successors, advisors, consultants, and assigns from any and all causes of action and claims
                    of any nature resulting from the acts of Counselor accessed through the website.</p>
                <p>Links</p>
                <p>This Website may contain links to other sites and banner ads that take a visitor to another Website.
                    Please be aware that the Company is not responsible for the content or terms of use of such other
                    sites. Users are encouraged to be aware of the specific content on the other websites when they
                    leave this site and to read the applicable terms of use and other website requirements. Also note
                    that some links may point to affiliate content, in which Company is paid a commission when someone
                    clicks the link and purchased a product. Affiliate products are only recommended after a review
                    process.</p>
                <p>Customer Comments</p>
                <p>We appreciate hearing from our customers and welcome your comments regarding our services and the
                    website. Please be advised, however, that our policy does not permit us to accept or consider
                    creative ideas, suggestions, inventions or materials other than those that we have specifically
                    requested. While we do value your feedback on our services, please be specific in your comments
                    regarding our services and do not submit creative ideas, inventions, suggestions, or materials. If,
                    despite our request, you send us creative suggestions, ideas, drawings, concepts, inventions, or
                    other information (collectively the "Submission"), the Submission shall be the property of Company.
                    None of the Submissions shall be subject to any obligation of confidence on our part and we shall
                    not be liable for any use or disclosure of any Submission. Company shall own exclusively all now
                    known or later discovered rights to the Submission and shall be entitled to unrestricted use of the
                    Submission for any purpose whatsoever, commercial or otherwise, without compensation to You or any
                    other person who submitted the Submission.</p>
                <p>Registration and Password</p>
                <p>You are responsible for maintaining the confidentiality of your membership information and password.
                    You shall be responsible for all uses of your registration, whether or not authorized by you. You
                    agree to immediately notify the Company of any unauthorized use of your registration or password.
                    Your membership may not be transferred or assigned.</p>
                <p>Identification of Agent to Receive Notification and Elements of Notification of Claimed Copyright
                    Infringement</p>
                <p>If you believe that your copyrighted work has been uploaded to this Website and is accessible on this
                    Website in a way that constitutes copyright infringement, please notify us by emailing
                    support@restorehealthusa.com and providing our designated copyright agent with the following
                    information:</p>
                <p>The physical or electronic signature of either the copyright owner or of a person authorized to act
                    on the owner's behalf;</p>
                <p>A description of the copyrighted work you claim has been infringed, and a description of the activity
                    that you claim to be infringing;</p>
                <p>Identification of the URL or other specific location on this website where the material or activity
                    you claim to be infringing is located or is occurring; you must include enough information to allow
                    us to locate the material or the activity;</p>
                <p>Your name, address, telephone number and, if you have one, your e-mail address;</p>
                <p>A statement by you that you have a good faith belief that use on the website of the copyrighted work
                    in the manner You are complaining of is not authorized by the copyright owner, any agent of the
                    copyright owner, or the law; and</p>
                <p>A statement by you, made under penalty of perjury, that the information you have provided in your
                    notice is accurate and that you are either the copyright owner or are authorized to act on behalf of
                    the copyright owner.</p>
                <p>We have designated our copyright agent (see below) to receive notices of claims of copyright
                    infringement on our website. You can contact us as follows:</p>
                <p>Copyright Agent:<br>
                    support@restorehealthusa.com</p>
                <p>DISCLAIMERS WITH REGARD TO THE PURCHASE AND USE OF THE PRODUCTS</p>
                <p>To purchase products on this Website you must be 18 years of age or older.</p>
                <p>The information available on this Website is for informational purposes only. The Company offers no
                    express or implied guarantees or warranties regarding the use, health benefits, effectiveness, or
                    whether or not any specific result will be obtained from the use of the products purchased on this
                    Website. You are solely responsible for all actions taken with regard to the use of this Website and
                    the products obtained from this Website.</p>
                <p>The information contained on this Website and the products sold might not be suitable for your own
                    personal circumstances, and you are solely responsible for deciding whether any of our products are
                    suitable for your purposes. Those who purchase products on this Website use the products at their
                    own risk, and the Website assumes no responsibility or liability whatsoever for any actions taken by
                    purchasers of products on this Website.</p>
                <p>Nothing contained on this Website is intended to diagnose, prevent, mitigate, treat, or cure any
                    disease or physical conditions, prescribe or perform medical treatment, or interfere or substitute
                    with the treatment of medical or other professionals. The law applicable to dietary supplements, the
                    Dietary Supplement Health and Education Act of 1994, commonly referred to as DSHEA, does not permit
                    us to do so and it is not our intention to do so.</p>
                <p> The information provided on the Website, and the products sold on this Website, are provided and
                    sold with the understanding that this Website does not have the intention of giving medical or any
                    other type of professional advice, nor is the information contained on this Website or the products
                    sold meant to be a replacement for medical or other professional advice and treatment. You are
                    advised to consult with a doctor or other professional with regard to any physical ailment or
                    disability or for the treatment of any physical ailment or disability.</p>
                <p>By acceptance of any product purchased on this Website, purchaser agrees that neither this Website
                    nor the Company, their agents, employees, representatives, or assignees shall have any liability to
                    purchaser or any other third person whatsoever, for any claim, loss, damage or expense arising from
                    use of the products.</p>
                <p>Product images are for illustrative purposes only and the actual product may differ from the image.
                    This Website attempts to be as accurate as possible when describing the condition of the products
                    offered for sale.</p>
                <p>No statements made by the Company have been evaluated by the Food and Drug Administration. No product
                    sold on the Website is intended to diagnose, treat, cure or prevent any disease.</p>
                <p>ADDITIONAL DISCLAIMERS</p>
                <p>COMPANY DOES NOT WARRANT THAT THIS WEBSITE WILL OPERATE ERROR-FREE OR THAT THIS WEBSITE AND ITS
                    SERVER ARE FREE OF COMPUTER VIRUSES OR OTHER HARMFUL MECHANISMS. IF YOUR USE OF THIS WEBSITE RESULTS
                    IN THE NEED FOR SERVICING OR REPLACING EQUIPMENT OR DATA, COMPANY IS NOT RESPONSIBLE FOR THOSE
                    COSTS. THE WEBSITE IS PROVIDED ON AN "AS IS" BASIS WITHOUT ANY WARRANTIES OF ANY KIND. COMPANY, TO
                    THE FULLEST EXTENT PERMITTED BY LAW, DISCLAIMS ALL WARRANTIES, WHETHER EXPRESS OR IMPLIED, INCLUDING
                    THE WARRANTY OF MERCHANTABILITY, FITNESS FOR PARTICULAR PURPOSE AND NON-INFRINGEMENT. THE COMPANY
                    MAKES NO WARRANTIES ABOUT THE ACCURACY, RELIABILITY, COMPLETENESS, OR TIMELINESS OF THE WEBSITE
                    CONTENT, SERVICES, SOFTWARE, TEXT, GRAPHICS, AND LINKS.</p>
                <p>THE TRANSMISSION OF DATA OR INFORMATION (INCLUDING COMMUNICATIONS BY E-MAIL) OVER THE INTERNET OR
                    OTHER PUBLICLY ACCESSIBLE NETWORKS IS NOT SECURE, AND IS SUBJECT TO POSSIBLE LOSS, INTERCEPTION OR
                    ALTERATION WHILE IN TRANSIT. ACCORDINGLY, WE DO NOT ASSUME ANY LIABILITY FOR ANY DAMAGE YOU MAY
                    EXPERIENCE OR COSTS YOU MAY INCUR AS A RESULT OF ANY TRANSMISSIONS OVER THE INTERNET OR OTHER
                    PUBLICLY ACCESSIBLE NETWORKS, SUCH AS TRANSMISSIONS INVOLVING THE EXCHANGE OF E-MAIL WITH US
                    (INCLUDING THOSE WHICH MAY CONTAIN YOUR PERSONAL INFORMATION). WHILE WE SHALL TAKE COMMERCIALLY
                    REASONABLE EFFORTS TO SAFEGUARD THE PRIVACY OF THE INFORMATION YOU PROVIDE US AND TREAT SUCH
                    INFORMATION IN ACCORDANCE WITH OUR PRIVACY POLICY, IN NO EVENT WILL THE INFORMATION YOU PROVIDE TO
                    US BE DEEMED TO BE CONFIDENTIAL, CREATE ANY FIDUCIARY OBLIGATIONS TO YOU ON OUR PART, OR RESULT IN
                    ANY LIABILITY TO YOU ON OUR PART IN THE EVENT THAT SUCH INFORMATION IS INADVERTENTLY RELEASED BY US
                    OR ACCESSED BY THIRD PARTIES WITHOUT OUR CONSENT.</p>
                <p>TO THE FULLEST EXTENT PERMISSIBLE UNDER APPLICABLE LAW, YOU UNDERSTAND AND AGREE THAT NEITHER COMPANY
                    NOR ANY OF ITS OFFICERS, DIRECTORS, AGENTS, REPRESENTATIVES, EMPLOYEES, OR DISTRIBUTORS SHALL BE
                    LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, PUNITIVE, EXEMPLARY OR ANY
                    OTHER DAMAGES RELATING TO OR RESULTING FROM YOUR USE OR INABILITY TO USE THIS SITE, YOUR PURCHASE OF
                    PRODUCTS ON THIS WEBSITE, OR FROM ANY ACTIONS THE COMPANY TAKES OR FAILS TO TAKE. THESE INCLUDE
                    DAMAGES FOR ERRORS, OMISSIONS, INTERRUPTIONS, DEFECTS, DELAYS, COMPUTER VIRUSES, YOUR LOSS OF
                    PROFITS, LOSS OF GOOD WILL, LOSS OF DATA, UNAUTHORIZED ACCESS TO AND ALTERATION OR DELETION OF YOUR
                    TRANSMISSIONS AND DATA, AND OTHER TANGIBLE AND INTANGIBLE LOSSES.</p>
                <p>THIS LIMITATION APPLIES REGARDLESS OF WHETHER THE DAMAGES ARE CLAIMED UNDER THE TERMS OF A CONTRACT,
                    AS THE RESULT OF NEGLIGENCE OR OTHERWISE, AND EVEN IF WE OR OUR REPRESENTATIVES HAVE BEEN NEGLIGENT
                    OR HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>
                <p>IN ANY EVENT, COMPANY'S MAXIMUM LIABILITY ARISING OUT OF OR IN CONNECTION WITH THIS WEBSITE OR YOUR
                    USE OF THE WEBSITE, REGARDLESS OF THE CAUSE OF ACTION, WHETHER IN CONTRACT, TORT, BREACH OF WARRANTY
                    OR OTHERWISE, WILL NOT EXCEED THE COST OF THE PRODUCTS PURCHASED ON THIS WEBSITE.</p>
                <p>YOUR LIABILITY</p>
                <p>IF YOU CAUSE A TECHNICAL DISRUPTION OF THE SITE OR THE SYSTEMS TRANSMITTING THE SITE TO YOU OR OTHERS
                    YOU AGREE TO BE RESPONSIBLE FOR ANY AND ALL LIABILITIES, COSTS AND EXPENSES (INCLUDING ATTORNEY'S
                    FEES) ARISING FROM THAT DISRUPTION.</p>
                <p>INDEMNITY</p>
                <p>YOU AGREE TO DEFEND, INDEMNIFY, AND HOLD HARMLESS COMPANY, ITS SUBSIDIARIES, AFFILIATES, OFFICERS,
                    DIRECTORS, EMPLOYEES, AGENTS, AND PARTNERS, HARMLESS FROM AND AGAINST ANY LOSS, LIABILITY, CLAIM,
                    ACTION, OR DEMAND, INCLUDING WITHOUT LIMITATION REASONABLE LEGAL AND ACCOUNTING FEES, ALLEGING OR
                    RESULTING FROM (I) YOUR USE OF THE COMPANY’S WEBSITE; (II) ANY MATERIAL YOU PROVIDE TO THE COMPANY’S
                    WEBSITE, (III) ANY WEBSITE CONTENT THAT YOU USE OR (III) YOUR BREACH OF THE TERMS OF THESE TERMS AND
                    CONDITIONS, PRIVACY STATEMENT, REPRESENTATIONS AND WARRANTIES. COMPANY SHALL PROVIDE NOTICE TO YOU
                    PROMPTLY OF ANY SUCH CLAIM, SUIT, OR PROCEEDING AND SHALL ASSIST YOU, AT YOUR EXPENSE, IN DEFENDING
                    ANY SUCH CLAIM, SUIT OR PROCEEDING. WE RESERVE THE RIGHT TO ASSUME THE EXCLUSIVE DEFENSE AND CONTROL
                    OF ANY MATTER SUBJECT TO INDEMNIFICATION BY YOU, WHICH SHALL NOT EXCUSE YOUR INDEMNITY
                    OBLIGATIONS.</p>
                <p>Breach of Agreement</p>
                <p>Company reserves the right, at its sole discretion, to pursue all of its legal remedies, including
                    but not limited to immediate termination without notice of your registration with, or ability to
                    access, this Website and/or any other service provided to you by the Company, upon any breach by you
                    of these Terms of Use or Privacy Statement, or if the Company is unable to verify or authenticate
                    any information you submit to the Website.</p>
                <p>Class Action Waiver and Other Restrictions</p>
                <p>Arbitration shall proceed solely on an individual basis without the right for any Claims to be
                    arbitrated on a class action basis or on bases involving claims brought in a purported
                    representative capacity on behalf of others. The arbitrator's authority to resolve and make written
                    awards is limited to Claims between you and us alone. Claims may not be joined or consolidated
                    unless agreed to in writing by all parties. No arbitration award or decision will have any
                    preclusive effect as to issues or claims in any dispute with anyone who is not a named party to the
                    arbitration. Notwithstanding any other provision in these Terms and Conditions, and without waiving
                    either party's right of appeal, if any portion of this “Class Action Waiver and Other Restrictions”
                    provision is deemed invalid or unenforceable, then the entire Arbitration Provision (other than this
                    sentence) shall not apply.</p>
                <p>Additional Terms and Conditions</p>
                <p>Company makes no claims that the website content may be lawfully viewed or accessed outside of the
                    United States. Access to the website content may not be legal by certain persons or in certain
                    countries. If you access the website from outside of the United States, you do so at your own risk
                    and are responsible for compliance with the laws of your jurisdiction. You agree to comply with all
                    local rules including, without limitation, rules with regard to the Internet, data, e-mail, privacy,
                    copyright, and trademark infringement.</p>
                <p>These Terms of Use, the website’s Privacy Statements, and other relevant documents constitute the
                    entire agreement between you and Company with respect to the use of website.</p>
                <p>No changes to these Terms of Use shall be made except by a revised posting on this page. Use shall be
                    governed by and construed in accordance with the laws of the State of Arizona applicable therein,
                    without regard to conflict of laws. You irrevocably consent to the exclusive jurisdiction of the
                    courts located in State of Arizona in connection with any action arising out of or related to these
                    Terms of Use or their subject matter. You waive any objection based on lack of personal
                    jurisdiction, place of residence, improper venue or forum non-convenience in any such action.</p>
                <p> If any provision of these Terms of Use is held invalid or unenforceable in any respect by any court
                    having competent jurisdiction, such provision shall be enforced to the maximum extent permitted by
                    law, and the remaining provisions of these Terms of Use shall continue in full force and effect. No
                    waiver of any provision of these Terms of Use shall be deemed a further or continuing waiver of such
                    provision or any other provision of these Terms of Use.</p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="privacy" role="dialog" style="display:none;">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h3>Privacy Policy</h3>
                <p>This is the Privacy Policy for Restore CBD and this Website (individually and collectively the
                    “Company”). When you use this Website, you agree to the Privacy Policy that follows. If you do not
                    agree with this Privacy Policy you should immediately stop using this Website.</p>
                <p>Information The Company Collects</p>
                <p>The Company is committed to protecting the privacy of visitors. Accordingly, the Company does not
                    collect personally-identifying information from users unless they provide it to us voluntarily and
                    knowingly. The Company does not share any information with anyone outside our company. The Company
                    only collects personal details to give customers access to the services of this Website, for email
                    communication with an option to opt-out, and for billing purposes.</p>
                <p>When you visit the Website, your browser automatically sends us an IP (Internet Protocol) address and
                    certain other information (including the type of browser you use). The Company may use this IP
                    address and other information to give you access to the Website and otherwise administer the
                    Website. In certain parts of the Website, the Company may ask you to provide your name or other
                    information so that the Company can provide you with information you request, consider your
                    application for registering with us, or take other action indicated in the part of the Website where
                    the information is requested. You are under no obligation to provide us with this information, but
                    without it, the Company may not be able to take the action requested. The Website also includes
                    features that allow communication by electronic mail or otherwise.</p>
                <p>If you choose to use these features, you will be required to provide us your e-mail address and other
                    personally-identifying information (such as your name or street address) the Company may deem
                    necessary in order to communicate with you electronically or otherwise.</p>
                <p>When you provide any personally identifying information to us, you acknowledge that you are knowingly
                    and voluntarily providing us the information. The Company will not use such information for
                    marketing purposes, but the Company may respond to the electronic mail messages you send us, take
                    other action indicated in the part of the Website where the information is requested, and use such
                    information for any other business purpose, including sending you subsequent communications
                    concerning this Website, or our company’s products and services.</p>
                <p>You also should be aware that the Company collects certain usage information about the Website, such
                    as the number and frequency of visitors to certain parts of the Website. This data is used only in
                    the aggregate and does not include any personally identifying information. The Company also uses
                    information in a number of anonymous or aggregated forms that do not identify individuals for the
                    general management, marketing and improvement of our business.</p>
                <p>The information collected is never revealed, sold, or made public for any reason. Personally
                    identifiable information provided by subscribers (name, email or home address, etc.) is never
                    disclosed to any individual or business unless you have authorized us to do so or unless the Company
                    is required by law or the Company has a good faith basis for believing that you are in violation of
                    this Privacy Policy, our Terms and Conditions, or applicable laws.</p>
                <p>How the Company uses information</p>
                <p>The Company uses personally identifiable information to undertake such activities as:</p>
                <p>Communicate with you according to the preferences you have told us, including marketing/advertising
                    unless customers opts-out.
                    Monitor and improve our business and use of the Website.
                    Endeavor to prevent and address any possible fraud or misuse of our services.
                    Insure compliance with any relevant legislation.
                    Cookies and Web Beacons</p>
                <p>Like many companies, the Company uses "cookie" and/or “web beacon” technologies on the Website.
                    Cookies may tell us whether you have visited the Website before or are a new visitor. Web Beacons
                    are tags that can monitor the behavior of a user visiting the Website or sending an e-mail.</p>
                <p>Each time a subscriber logs into the Website, the Company stores a temporary 'cookie' in the browser
                    files of that subscriber's computer. This cookie is used during your online session to allow you
                    free access to the Website, and to store basket contents, without repeatedly requiring you to
                    re-enter your user name and password. When you log off or leave the Website, the cookies file is
                    automatically removed.</p>
                <p>The cookies the Company uses do not collect any personally identifying information about you or
                    provide us with any way to contact you, and the cookies do not extract any information from your
                    computer. You may be able to configure your browser to accept or reject all or some cookies, or
                    notify you when a cookie is set. Each browser is different; so check the "Help" menu of your browser
                    to learn how to change your cookie preferences. However, you must enable cookies from the Website in
                    order to use most functions on the Website.</p>
                <p>Information recorded through web beacons is used to report anonymous individual and/or aggregate
                    information about our users. Aggregate information may include demographic and usage information. No
                    personally identifiable information about you is shared with partners or third parties from this
                    research. You may choose to opt-out of our using this information.
                    Advertising Policy</p>
                <p>This product (and all other products by Restore CBD) are advertised online and offline in various
                    media outlets. You may see our ads on Facebook, Google, Bing, Yahoo, Taboola, Content.ad and various
                    other online advertising providers. Web viewers may be tracked via cookies, and served ads on
                    numerous occasions via retargeting pixels. You may stop temporarily stop historical tracking/cookies
                    by clearing your browser cache. Offline advertising will be done through newspapers, magazines, mail
                    and all other forms to customers. By ordering on our website or by phone upon seeing an offline
                    advertisement, you agree to offline (via mail or phone) marketing communications. </p>
                <p>Security</p>
                <p>The Company uses a variety of security measures including encryption and authentication to protect
                    the loss, misuse and alteration of your personal information under our control. Registered accounts
                    are secured by your created passwords and the Company takes precautions to insure that member
                    account information is kept private. The Company uses reasonable measures to protect member
                    information that is stored within our database, and the Company restricts access to member
                    information to those employees who need access to perform their job functions, such as our customer
                    service personnel and technical staff.</p>
                <p>Please note that the Company cannot guarantee the security of member account information, no system
                    is 100% secure, especially any which includes transmission of data over the Internet, and
                    unauthorized entry or use, hardware or software failure, and other factors may compromise the
                    security of member information at any time.</p>
                <p>The Company instructs our employees with access to your information that it is to be used only in
                    adherence with the principles set forth in this Privacy Policy and the applicable laws. Employees
                    who misuse customer information are subject to disciplinary action.</p>
                <p>Choice/Opt-In</p>
                <p>The Website gives users the opportunity to opt-in to receive communications from us. The Company will
                    never reveal, sell, or make available your email address to anyone for any purpose. The Website also
                    gives users options for removing their information from our database in order to stop receiving our
                    communications. You may continue to receive such communications until our system completes the
                    processing of your request.</p>
                <p>If at any time you wish to unsubscribe from our mailings, please email us at:
                    support@restorehealthusa.com</p>
                <p>Links</p>
                <p>The Website may contain links to other websites and banner ads that take a visitor to another
                    Website. In no case is subscriber information or 'cookies' information provided to the third party
                    Websites. However, please be aware that the Company is not responsible for the content or privacy
                    practices of such other websites. The Company encourages our users to be aware when they leave this
                    Website and to read the privacy statements of any other website that collects personally
                    identifiable information. On the Internet, many websites do attempt to capture visitor
                    information.</p>
                <p>Changes to Privacy Policy</p>
                <p>The Company reserves the right, at our complete discretion, to change this Privacy Policy at any time
                    by posting revised terms on the Website. It is your responsibility to check periodically for any
                    changes the Company may make to this Privacy Policy. Your continued use of this Website following
                    the posting of changes to these terms or other policies indicates your acceptance of the
                    changes.</p>
                <p>How to Contact Us</p>
                <p>If you have any questions about this Privacy Policy, Please contact us by emailing us at:
                    support@restorehealthusa.com or calling 1-800-617-1619.</p>
                <p>Miscellaneous</p>
                <p>This Privacy Policy as stated herein constitutes the entire agreement between us with respect to
                    Company’s Privacy Policy.</p>
                <p>This Privacy Policy shall be governed by and construed in accordance with the laws of the State of
                    Arizona applicable therein, without regard to conflict of laws. You irrevocably consent to the
                    exclusive jurisdiction of the courts located in the State of Arizona in connection with any action
                    arising out of or related to these terms of use or their subject matter. You waive any objection
                    based on lack of personal jurisdiction, place of residence, improper venue or forum non-convenience
                    in any such action.</p>
                <p>If any court having competent jurisdiction holds any provision of this Privacy Policy invalid or
                    unenforceable in any respect, such provision shall be enforced to the maximum extent permitted by
                    law, and the remaining provisions of this Privacy Statement shall continue in full force and effect.
                    No waiver of any provision of this Privacy Policy shall be deemed a further or continuing waiver of
                    such provision or any other provision of this Privacy Policy.</p>
                <p>We use the information we collect from you while you are using the Site in a variety of
                    ways, including using the information to customize features; advertising that appear on
                    the Site; and, making other offers available to you via email, direct mail or
                    otherwise. We
                    also may provide your information to third parties, such as service providers, contractors
                    and third
                    -
                    party publishers and advertisers for a variety of purposes. Unless you inform us
                    in accordance with the process described below, we reserve t
                    he right to use, and to disclose
                    to third parties, all of the information collected from and about you while you are using
                    the Site in any way and for any purpose, such as to enable us or a third party to provide
                    you with information about products and ser
                    vices. If you do not wish your information to
                    be used for these purposes, you must send a letter to the Online Privacy Coordinator whose
                    address is listed at the end of this Privacy Policy requesting to be taken off any lists of
                    information that
                    may be use
                    d for these purposes or that may be given or sold to third
                    -
                    parties.</p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="contact" role="dialog" style="display:none;">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <h3>Contact</h3>
                <p><strong class="greytext">Learn more about Restore CBD and order with a live rep.</strong></p>
                <p><strong class="greytext">Our team is here for you!</strong></p>
                <p>Ready to order? Have some questions? Or need help with an existing order?
                <p>Just shoot us an email at support@restorehealthusa.com or you can call us during U.S. EST business hours at 1-800-617-1619</p>
                <p>We will reply within 24-48 hours.</p>
        
              
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script> 
<script type="text/javascript" src="js/bookmarkscroll.js"></script>
<script type="text/javascript" src="js/jquery.timer.js"></script>
<script type="text/javascript" src="js/jquery.sticky.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function () {
	var timer = new PsgTimer({
		selector: '#Timer2',
		currentDateTime: Date.UTC(2018, 0, 26, 12, 0, 0),
		endDateTime: Date.UTC(2018, 0, 26, 12, 10, 0),
		multilpeBlocks: true,
		animation: 'fade',
		labels: {
			days: 'Days',
			hours: 'Hours',
			minutes: 'Minutes',
			seconds: 'Seconds'
		},
		callbacks: {
			onInit: function () {
				console.log('Hello world!');
			}
		}
	});
	var timer = new PsgTimer({
		selector: '#Timer3',
		currentDateTime: Date.UTC(2018, 0, 26, 12, 0, 0),
		endDateTime: Date.UTC(2018, 0, 26, 12, 10, 0),
		multilpeBlocks: true,
		animation: 'fade',
		labels: {
			days: 'Days',
			hours: 'Hours',
			minutes: 'Minutes',
			seconds: 'Seconds'
		},
		callbacks: {
			onInit: function () {
				console.log('Hello world!');
			}
		}
	});
	

$(document).scroll(function() {
	
	var $elem = $('footer');
		var $window = $(window);
	
		var docViewTop = $window.scrollTop();
		var docViewBottom = docViewTop + $window.height();
	
		var elemTop = $elem.offset().top;
		var elemBottom = elemTop + $elem.height();
	
		if (elemTop >= (docViewBottom + 20) || (elemTop + $('.btm-strip').height()) >= (docViewBottom + 134) ) {
			$('.btm-strip').css('position', 'fixed');
			$('.btm-strip').css({'display' : 'block'});
		} else {
			$('.btm-strip').css({'position' : 'relative'});
			$('.btm-strip').css({'display' : 'block'});
			
		}
	
		var winscroll = $(window).scrollTop()
		var scrlCp = $('#stip-opn').offset().top - 0;
		
		if (winscroll < scrlCp ){
			$('.btmfix').fadeOut();
		}else{
			$('.btmfix').fadeIn();
		
		}
});	

function stickycall(){
    var wh = $(window).innerWidth();
        if (wh > 767){
            $("#sticky").sticky({ topSpacing: 10, bottomSpacing:306 });
        }else{
            $("#sticky").unstick();
        }
    }
    
    $(document).ready(function(e) {
        stickycall();
    });
	$(window).resize(function(e) {
       stickycall();
});


})	


</script>

</body>
</html>