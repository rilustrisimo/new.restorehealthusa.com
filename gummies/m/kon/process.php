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
    $pagetype = (isset($_GET['pid']))?'package':$pagetype;

    if($pagetype == "checkout"):
        
        $kon->prepareData($_SESSION);
        $result = json_decode($kon->importOrder());

        $_SESSION['orderId'] = $result->message->orderId;
        $_SESSION['order_details'] = $result->message;

        if($result->result == "SUCCESS"):
            $kon->prepareData(array("orderId" => $_SESSION['orderId']));
            $kon->confirmOrder();
            
            header("location: ../" . $config[$_POST['page']]['redirect']);
        else:
            $kon->setErrors($result->message);
            header("location: " . $_SERVER['HTTP_REFERER']);
        endif;
    elseif($pagetype == "index"):
        $kon->prepareData($_SESSION);
        $result = json_decode($kon->importLead());
        header("location: ../" . $config[$_POST['page']]['redirect']);
    elseif($pagetype == "package"):
        $pid = $_GET['pid'];
        $pqty = $_GET['qty'];

        $_SESSION['product1_id'] = $pid;
        $_SESSION['product1_qty'] = $pqty;
        
        header("location: ../shipping.php");
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

        $_SESSION['order_details'] = $result->message;
        
        header("location: ../" . $up_redirect);
    else:
        header("location: ../" . $config[$_POST['page']]['redirect']);
    endif;
endif;
?>