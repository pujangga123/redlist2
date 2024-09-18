<?php 
    require_once "config.php";
    require_once "initsession.php";
    require_once "initdb.php";  
    require_once "initsmarty.php";
    require_once "ext_libs.php";

    //POST to _var
    foreach($_POST as $key=>$val) {
        $$key = $val;
    }

    $_jsvars = array();

    // DEFAULTS
    // semua global val gunakan _ sebagai prefix
    $_default = "index.tpl"; // default template
    $_header = PATH_MODS."head.tpl";
    $_title = "REDLIST2"; 

    //read module
    if(isset($_GET['md'])) {
        $_page = "viewmd";
    } else {
        $_page = isset($_GET['p'])?$_GET['p']:"home";
    }
    $_path_mods = PATH_MODS;

    // execute module
    
    include PATH_MODS.$_page.".php"; 
    
    // assign vars1
    $smarty->assign("_title", $_title);
    $smarty->assign("_header", $_header);
    $smarty->assign("_page", $_page);
    $smarty->assign("_path_mods", PATH_MODS);
    $smarty->assign("_path_libs", PATH_LIBS);
    $smarty->display(PATH_MODS.$_default);