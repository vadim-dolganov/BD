<?php
    session_start();
    require_once('include/common.inc.php'); 
    require_once 'lib/Smarty.class.php';
    dbInitialConnect();
    $getUserId = intval($_GET['id']);

    $userData = getUserData($getUserId);
    dataIsEmpty($userData);

    $smarty = new Smarty();

    $smarty->template_dir = TEMPLATE_DIR;
    $smarty->compile_dir = COMPILE_DIR;

    $smarty->assign('title', 'Страница пользователя ' . $userData[0]['name'].' '.$userData[0]['last_name']);
    $smarty->assign('description', 'Главная страница пользователя ' . $userData[0]['name'].' '.$userData[0]['last_name']);
    $smarty->display('head.html');


    $smarty->display('header.html');

      
    $smarty->assign('user', $userData[0]);
    $smarty->display('user_profil.html');

    $addUserDate = dbQueryGetResult("SELECT answer.*, task.task_id, task.class, task.item 
                                 FROM answer 
                                 INNER JOIN task 
                                 ON answer.task_id = task.task_id 
                                 WHERE answer.autor_id = $getUserId
                                 LIMIT 15
                               ");

    $countAnswer = count(dbQueryGetResult("SELECT answer.*, task.task_id, task.class, task.item 
                                 FROM answer 
                                 INNER JOIN task 
                                 ON answer.task_id = task.task_id 
                                 WHERE answer.autor_id = $getUserId
                               "));

    $smarty->assign('userAnswer', $addUserDate);
	$smarty->assign('countAnswer', $countAnswer);
    $smarty->display('user_answer_profil.html');
      
    $smarty->assign('VkAuthLink', getVkAuthLink());
    $smarty->display('footer.html'); 
  
?>
