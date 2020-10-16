<?php

    session_start();
    if(!isset($_SESSION['lang']))
        $_SESSION['lang'] = "en";
    else if(isset($_GET['lang']) && !empty($_GET['lang']) && $_GET['lang'] != $_SESSION['lang']){
        switch ($_GET['lang']) {
            case 'en':
                $_SESSION['lang'] = "en";
                break;
            case 'sr':
                $_SESSION['lang'] = "sr";
                break;
            case 'hu':
                $_SESSION['lang'] = "hu";
            break;
            case 'ge':
                $_SESSION['lang'] = "ge";
            break;
        }
    }

    //echo "Language: ".$_SESSION['lang'];
    require_once "languages/" . $_SESSION['lang'] . ".php";
?>