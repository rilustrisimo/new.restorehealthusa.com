<?php
include_once('kon/konnektive.php');
$kon = new KON();
$kon->initSession();

$order = $_SESSION['order_details'];
$cbd_ids = array("1","2","3","4","5","8","9","10");

$kon->prepareData($_SESSION);
$kon->confirmOrder();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Restore CBD Gummies</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<link rel="stylesheet" type="text/css" href="css/thankyou.css">

<script>
function getDate(days) {      
	var monthNames = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
	var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");    
	var now = new Date();   
	now.setDate(now.getDate() + days);   
	var nowString =  monthNames[now.getMonth()] + " " +  now.getDate() + ", " + now.getFullYear();   
	document.write(nowString); 
	}
</script>
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
</head>

<body>
    
<div class="header">
    <div class="logo-sec">
        <img src="images/logo.png" alt="" class="logo">
    </div>
</div>

<div class="thnk-top-hdng">
    <div class="container">
        <p class="ty-hdng-txt1"> <span>Thank You For Your Order!</span></p>
        <p class="ty-hdng-txt2">Your Order Will Be Processed &amp; Shipped Shortly!</p>
    </div>
</div> 

<div class="thank-sec">
	<div class="container">
    	<div class="thankBox">
			<div class="ty-coupn-inner">
            	<p class="thnk-top-txt">We'll send you an email as soon as your order is shipped out. If you have any questions, please get in touch with our customer service team. </p>
            	<ul class="ty-cont">
                    <li><img src="images/ty-call-ic2.png"><p><span>Phone</span><br>1-800-617-1619</p></li>
                    <li><img src="images/ty-msg-ic2.png"><p><span>Email</span><br>support@restorehealthusa.com</p></li>
                </ul>
            	<div class="ty-sec-heading"><span>Order Summary</span></div>
            	<div class="summry-container">
        	
                    <div class="thnk-odrnmbr">
                        <p class="thnk-odrtxt1">Order Number: <br class="show-mob"><span><?php echo $_SESSION['orderId']; ?></span></p>
                        <p class="thnk-odrtxt2">Order Date : <br class="show-mob"><span><script type="text/javascript">getDate(0);</script></span></p>
                    </div>
                    
                    <div class="ty-odr-smryBox">
                        <div class="ty-heading-row">
                            <div class="ty-col-1">Product</div>
                            <div class="ty-col-4">Price</div>
                        </div>
                        <?php foreach($order->items as $i): ?>
                        <div class="ty-prod-row">
                            <div class="ty-col-1">
                                <span class="ty-prodbx"><img src="images/<?php echo (in_array($i->productId, $cbd_ids))?'pack-prod1.png':'ty-prod2.png'; ?>"></span>
                                <p class="ty-prd-name"><?php echo $i->name; ?></p>
                            </div>
                            <div class="ty-col-4">$<?php echo $i->price; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="priceFlds">
                        <div class="prc-row"><p>Sub Total:</p> <span>$<?php echo $order->subTotal; ?></span></div>
                        <div class="prc-row"><p>Shipping &amp; Handling:</p> <span>$<?php echo $order->shipTotal; ?></span></div>
                        <div class="prc-row total"><p>Total:</p> <span>$<?php echo $order->totalAmount;?></span></div>
                    </div>
                    
                </div>
                <div class="clearall"></div>
                <div class="thnk-Addressinfo">
                    <div class="ty-lft-Address">
                    <div class="sh-heading">Shipping Info</div>
                    <ul class="user-info">
                        <li><span>First Name:</span> <?php echo $order->shipFirstName; ?> </li>
                        <li><span>Last Name:</span><?php echo $order->shipLastName; ?></li>
                        <li><span>Address:</span> <?php echo $order->shipAddress1; ?></li>
                        <li><span>City:</span> <?php echo $order->shipCity; ?></li>
                        <li><span>State:</span> <?php echo $order->shipState; ?></li>
                        <li><span>Zip Code:</span> <?php echo $order->shipPostalCode; ?></li>
                        <li><span>Phone:</span> <?php echo $order->phoneNumber; ?></li>
                        <li><span>Email:</span> <?php echo $order->emailAddress; ?></li>
                    </ul>
                </div>
                    <div class="ty-rgt-Address">
                        <div class="sh-heading">Billing Info</div>
                        <ul class="user-info">
                            <li><span>First Name:</span> <?php echo $order->firstName; ?> </li>
                            <li><span>Last Name:</span><?php echo $order->lastName; ?></li>
                            <li><span>Address:</span> <?php echo $order->address1; ?></li>
                            <li><span>City:</span> <?php echo $order->city; ?></li>
                            <li><span>State:</span> <?php echo $order->state; ?></li>
                            <li><span>Zip Code:</span> <?php echo $order->postalCode; ?></li>
                            <li><span>Phone:</span> <?php echo $order->phoneNumber; ?></li>
                            <li><span>Email:</span> <?php echo $order->emailAddress; ?></li>
                        </ul>
                    </div>
                </div>
                
                <ul class="custmr-service-list">
                    <li>
                        <img src="images/custmr-srvc-ico1.png">
                        <p>Customer<br>Service</p>
                    </li>
                    <li>
                        <img src="images/custmr-srvc-ico2.png">
                        <p>Free <br>Shipping</p>
                    </li>
                    <li>
                        <img src="images/custmr-srvc-ico3.png">
                        <p>Satisfaction<br>Guranteed</p>
                    </li>
                    <li>
                        <img src="images/custmr-srvc-ico4.png">
                        <p>Hassle-Free<br>Returns</p>
                    </li>
                </ul>
                <div class="clearall"></div>
                <div class="help-Box">
                    <p class="help-txt1"><img src="images/ty-hlp-ic.png"></p>
                    <p class="help-txt2">Questions? We're Here To Help</p>
                    <ul>
                        <li><img src="images/ty-msg-ic.png"><p>Email Us<br>support@restorehealthusa.com</p></li>
                        <li><img src="images/ty-call-ic.png"><p>Call Us<br>1-800-617-1619</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->

<footer>
    <div class="footer-txt">
        <p class="ftr-txt">
            <a href="#" data-fancybox data-src="#terms">Terms and Conditions</a>  |  <a href="#" data-fancybox data-src="#privacy">Privacy Policy</a>  |  <a href="#" data-fancybox data-src="#contact">Contact Us</a></p>
        <p class="ftr-txt ftr-txt2">&copy; <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> Restore CBD Gummies. All Rights Reserved</p>
    </div>
</footer>

<?php include_once('footer-modal.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>
</html>
