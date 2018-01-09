<?php
    session_start();
    require_once('../include/common.inc.php'); 
    require_once '../lib/Smarty.class.php';
    dbInitialConnect();
    if(isset($_SESSION['user']))
    {
        $smarty = new Smarty();
      
        $smarty->template_dir = TEMPLATE_DIR;
        $smarty->compile_dir = COMPILE_DIR;
      
        $smarty->assign('title', 'Настройки');
        $smarty->assign('description', 'Описание');      
        $smarty->display('head.html');
      
        $smarty->display('header.html');
      
        $userData = getUserData($_SESSION['user']['user_id']);  
        $smarty->assign('user', $userData[0]);
        $smarty->display('user_settings_form.html');
      
        $smarty->display('footer.html'); 
    }
    else
    {
        echo '<h3 align="center">Сначала авторизуйтесь на сайте</h3>';
    }
?>
