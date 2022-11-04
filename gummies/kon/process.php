<?php
include_once('konnektive.php');
$kon = new KON();

$kon->initSession();
$kon->setSessionFields($_POST);
$config = $kon->config;

$kon->affiliateScrubSession($config['scrub']);

if($kon->validateFields($_POST['page'], $_POST)):
    header("location: " . $_SERVER['HTTP_REFERER']);
else:
    $pagetype = (isset($_GET['page']))?$_GET['page']:$config[$_POST['page']]['type'];

    if($pagetype == "checkout"):
        $_SESSION['couponCode'] = "SGTEST99";// for testing and remove when done
        $kon->prepareData($_SESSION);
        $result = json_decode($kon->importOrder());

        $_SESSION['orderId'] = $result->message->orderId;
        
        if($result->result == "SUCCESS"):
            $_SESSION['order_details'] = $result->message;
        endif;

        if($result->result == "SUCCESS"):
            header("location: ../" . $config[$_POST['page']]['redirect']);
        else:
            $kon->setErrors($result->message);
            header("location: " . $_SERVER['HTTP_REFERER']);
        endif;
    elseif($pagetype == "index"):
        $kon->prepareData($_SESSION);
        $result = json_decode($kon->importLead());
        header("location: ../" . $config[$_POST['page']]['redirect']);
    elseif($pagetype == "upsell"):
        $step = $_GET['step'];
        $prod_id = $config['upsell_page'][$step]['product_id'];
        $prod_qty = $config['upsell_page'][$step]['product_qty'];
        $up_redirect = $config['upsell_page'][$step]['redirect'];

        $_SESSION['productId'] = $prod_id;
        $_SESSION['productQty'] = $prod_qty;

        unset($_SESSION['product1_id']);
        unset($_SESSION['product1_qty']);
        unset($_SESSION['product1_shipPrice']);

        $kon->prepareData($_SESSION);
        $result = json_decode($kon->importUpsale());

        if($result->result == "SUCCESS"):
            $_SESSION['order_details'] = $result->message;
        endif;
        
        header("location: ../" . $up_redirect);
    else:
        header("location: ../" . $config[$_POST['page']]['redirect']);
    endif;
endif;
?>