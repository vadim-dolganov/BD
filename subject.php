<?php
    session_start();
    require_once('include/common.inc.php'); 
    require_once 'lib/Smarty.class.php';
    dbInitialConnect();
    $subject = $_GET['subject'];
    $page = $_GET['page'];
    checkTheGetRequestInSubject($page, $subject);
  
    
    $num = AMOUNT_DATA_ON_PAGE; // Переменная хранит число сообщений выводимых на станице   
    $posts = getCountPostsInSubject($subject); // Определяем общее число постов в базе данных   
    $total = totalNumberOfPages($posts, $num); // Находим общее число страниц             
    $page = intval($page);  // Определяем начало число для текущей страницы  
    $start = startPost($page, $total, $num);
    // Выбираем $num сообщений начиная с номера $start
    $postRow = getPostsSubject($subject, $start, $num);

    $smarty = new Smarty();
    $smarty->template_dir = TEMPLATE_DIR;
    $smarty->compile_dir = COMPILE_DIR;

    $smarty->assign('title', 'Решенные задачи по '.$subject);
    $smarty->assign('description', 'На этом странице представлены задачи по'.$subject);
    $smarty->display('template/head.html');

    $smarty->display('template/header.html');

    $smarty->assign('array', $postRow);
    $smarty->assign('page', $page);
    $smarty->assign('total', $total);
    $smarty->assign('subject', $subject);
    $smarty->display('template/item.html');

    $recentUserTask = getRecentUserTask(AMOUNT_DATA_ON_RIGHT_BLOCK); 
    $subjectDate = getSubjectDate();
    $smarty->assign('subject', $subjectDate);
    $smarty->assign('arrayLastTask', $recentUserTask);
    $smarty->display('template/right_block.html');
    
    $smarty->assign('VkAuthLink', getVkAuthLink());
    $smarty->display('template/footer.html'); 

?>