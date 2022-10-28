<?php
include_once('kon/konnektive.php');
$kon = new KON();
$kon->initSession();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Restore CBD Gummies</title>
<meta name="viewport" content="width=640, user-scalable=0">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="css/inner.css">
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
</head>

<body>
<?php if(isset($_SESSION['errors'])): ?>
<div style="background-color: #e41f1e;padding: 7px 0;"><ul><?php foreach($_SESSION['errors'] as $e){ echo '<li style="color: #fff;font-weight: 700;padding: 7px 0;">'.$e.'</li>'; }?></ul></div>
<?php endif; ?>
<div class="container">

    <div class="logo-sec">
        <div class="logoBox">
            <img src="images/inr-logo.png" class="logo">
            <p>The World’s #1 <span>CBD Gummies</span></p>
        </div>
    </div>

    <div class="breadcrumb">
        <div class="bread-step active">Qualify Now</div>
        <div class="bread-step active">Select Package</div>
        <div class="bread-step">Checkout</div>
    </div>

    <div class="inner-pad">
        <p class="frm-hdg2"><span>Congratulations!</span> You Qualify For 
        <br>Up To 2 Free Bonus Bottles</p>
        
        <p class="frm-hdg">Enter Shipping Information</p>
       
        <form action="kon/process.php" method="post" id="payment-form">
            <input type="hidden" name="page" value="shipping_page">
            <div class="frm-fields">
                
                <div class="frmFlds">
                    <label>Address:</label>
                    <input type="text" name="address1" placeholder="Your Address" value="<?php echo (isset($_SESSION['address1']))?$_SESSION['address1']:''; ?>">
                </div>
                <div class="frmFlds">
                    <label>City:</label>
                    <input type="text" name="city" placeholder="City" value="<?php echo (isset($_SESSION['city']))?$_SESSION['city']:''; ?>">
                </div>
                <div class="frmFlds">
                            <label>Country:</label>
                            <select name="country">
                                <option value="US" onClick="" selected>United States</option>
                            </select>
                         </div>
                
                <div class="frmFlds">
                    <label>State:</label>
                    <select style="margin-right:0;" name="state" value="<?php echo (isset($_SESSION['state']))?$_SESSION['state']:''; ?>">
                        <option value="" onclick="" selected="">Select State</option>
                        <option value="AL" onclick="">Alabama (AL)</option>
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
                
                <div class="frmFlds">
                    <label>Zip Code:</label>
                    <input type="tel" name="postalCode" placeholder="Zip Code" value="<?php echo (isset($_SESSION['postalCode']))?$_SESSION['postalCode']:''; ?>">
                </div>
            </div>
            <div class="inr-btn-bx">
                <button class="inr-btn pulse">Proceed To Checkout <img src="images/btn-arw.png" alt="" class="btn-arw"></button>
            </div>
        </form>  
    </div>  

    <footer>
        <div class="legal">
            <img src="images/logo.png" class="ftr-logo">
            <p class="ftr-txt1">
                <a href="#" data-fancybox data-src="#terms">Terms and Conditions</a>  |  <a href="#" data-fancybox data-src="#privacy">Privacy Policy</a>  |  <a href="#" data-fancybox data-src="#contact">Contact Us</a>
            </p>
            <p class="ftr-txt1">&copy; <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> Restore CBD Gummies. All Rights Reserved</p>
        </div>
    </footer>
</div>

<?php include_once('footer-modal.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>
</html>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('select[name="state"] option').removeAttr('selected');
    $('select[name="state"] option[value="'+ $('select[name="state"]').attr('value') +'"]').attr('selected','');
});
</script>