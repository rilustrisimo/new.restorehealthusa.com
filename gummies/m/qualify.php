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
        <div class="bread-step">Select Package</div>
        <div class="bread-step">Checkout</div>
    </div>
        
    <div class="inner-pad">
        <p class="frm-hdg">Qualify For Free Bonus Bottles </p>
       
        <form action="kon/process.php" method="post" id="lpFrm">
            <input type="hidden" name="page" value="qualify_page">
            <div class="frm-fields">
                <div class="frmFlds">
                    <label>First Name:</label>
                    <input type="text" name="firstName" placeholder="First Name*" value="<?php echo (isset($_SESSION['firstName']))?$_SESSION['firstName']:''; ?>">
                </div>
                <div class="frmFlds">
                    <label>Last Name:</label>
                    <input type="text" name="lastName" placeholder="Last Name*" value="<?php echo (isset($_SESSION['lastName']))?$_SESSION['lastName']:''; ?>">
                </div>
                <div class="frmFlds">
                    <label>Phone Number:</label>
                    <input type="text" name="phoneNumber" placeholder="Phone Number" value="<?php echo (isset($_SESSION['phoneNumber']))?$_SESSION['phoneNumber']:''; ?>">
                </div>
                <div class="frmFlds">
                    <label>Email:</label>
                    <input type="text" name="emailAddress" placeholder="Email*" value="<?php echo (isset($_SESSION['emailAddress']))?$_SESSION['emailAddress']:''; ?>">
                </div>
            </div>
            <div class="inr-btn-bx">
                <button class="inr-btn pulse">Check If You Qualify <img src="images/btn-arw.png" alt="" class="btn-arw"></button>
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
