<?php
    session_start();
    require_once('include/common.inc.php');
    require_once 'lib/Smarty.class.php';

    $smarty = new Smarty();

    $smarty->template_dir = TEMPLATE_DIR;
    $smarty->compile_dir = COMPILE_DIR;

    $smarty->assign('title', 'Задать вопрос');
    $smarty->assign('description', 'Описание');
    $smarty->display('head.html');

    $smarty->display('header.html');

    $smarty->display('form_add_question.html');

    $smarty->assign('VkAuthLink', getVkAuthLink());
    $smarty->display('footer.html');
?>