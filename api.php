<?php
    
    require_once("initsession.php");
    require_once('config.php');
    require_once('initdb.php');
    require_once("mods/ext_libs.php");

    // die(0) --> error session
    // die(1) --> token not defined
    // die(10) --> fail to update
    // die(100) --> no process made (no token match)  
    // VALIDASI ======================================
    if(count($_SESSION)==0 && !isset($_GET['debug'])) {
      die('0');
    }
    
    if(isset($_POST['token'])) {
        $token = $_POST['token'];
    } else {
        die('1');
    }
    // END: VALIDASI =======================================

    if($token=='test') {
        die('ok');
    }
    
    die('100');
