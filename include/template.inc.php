<?php
    require_once("common.inc.php");

    function getView($template, $vars)
    {
        $smarty = new Smarty();
        $smarty->template_dir = TEMPLATE_DIR;
        $smarty->compile_dir = COMPILE_DIR;
        $smarty->assign($vars);
        return $smarty->fetch($template);  
    }
