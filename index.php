<?php 
    session_start();
    require_once('include/common.inc.php'); 
    require_once 'lib/Smarty.class.php';
    dbInitialConnect();
    
    if(isset($_GET['page']))
    {
        $page = $_GET['page']; 
        checkTheGetRequestInIndex($page);
    }
    if (GetCurPage() == ROOT_PAGE)
    {
        $vars = array(
                     'title' => 'ReshuVsem - помогаем друг другу решить задачи по предметам.',
                     'description' => 'ReshuVsem, это прект в котором, пользователи помогает друг другу с задачой, а так же вы сможете подготовиться к егэ.'
                     );
    } elseif (is_numeric($page)){
        $vars = array(
                     'title' => 'ReshuVsem - решение задач | Страница № '.$page,
                     'description' => 'Задачи, Страница № '.$page
                     );
    }
    echo getView('head.html', $vars); 

    echo getView('header.html', array()); 
    
 
    $num = AMOUNT_DATA_ON_PAGE; // Переменная хранит число сообщений выводимых на станице   
    $posts =  getCountPosts(); // Определяем общее число постов в базе данных   
    $total = totalNumberOfPages($posts, $num); // Находим общее число страниц             
    $start = startPost(&$page, $total, $num);

    // Выбираем $num сообщений начиная с номера $start
    $postRow = getPost($start, $num);

    $vars = array(
                 'array' => $postRow,
                 'page' => $page,
                 'total' => $total
                 );
    echo getView('item.html', $vars); 

    $recentUserTask = getRecentUserTask(AMOUNT_DATA_ON_RIGHT_BLOCK); 
    $subjectDate = getSubjectDate();
    $vars = array(
                 'subject' => $subjectDate,
                 'arrayLastTask' => $recentUserTask
                 );
    echo getView('right_block.html', $vars); 
     
    $vars = array(
                 'VkAuthLink' => getVkAuthLink()
                 );
    echo getView('footer.html', $vars); 

?>
