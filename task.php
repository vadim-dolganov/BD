<?php
    session_start();
    require_once('include/common.inc.php'); 
    require_once 'lib/Smarty.class.php';
    dbInitialConnect();
    if(isset($_GET['id']))
    {
        $post_id = $_GET['id'];
    }
    if(!preg_match('/[0-9]/', $post_id))
    {
      redirect();
    }
    $userTask= getUserTask($post_id);
    dataIsEmpty($userTask);


    $vars = array(
                 'title' => mb_substr($userTask[0]['task_text'], 0, 150, 'UTF-8') . ' | Решим Всем, поможем решить с задачу.',
                 'description' => $userTask[0]['task_text']
                 );
    echo getView('head.html', $vars); 

    echo getView('header.html', array()); 
      
    $vars = array(
                 'post' => $userTask[0],
                 'substr_task' => mb_substr($userTask[0]['task_text'], 0, 70, 'UTF-8'),
                 'date' => substr($userTask[0]['date'], 0, 16),
                 'page_url' => GetCurPage()
                 );
    echo getView('post.html', $vars); 

    $vars = array(
                 'post_id' => $post_id,
                 'substr_task' => mb_substr($userTask[0]['task_text'], 0, 70, 'UTF-8'),
                 );
    echo getView('form_add_answer.php', $vars); 

    $userAnswer = dbQueryGetResult("SELECT * 
                                 FROM task
                                 ORDER BY RAND()
                                 LIMIT 4
                                "); 
    $rowAnswerTask = getUserAnswer($post_id);
    $vars = array(
                 'answer' => $rowAnswerTask,
                 'userAnswer' => $userAnswer
                 );
    echo getView('answer.html', $vars); 


    $recentUserTask = getRecentUserTask(AMOUNT_DATA_ON_RIGHT_BLOCK);
    $subjectDate = getSubjectDate();
    $vars = array(
                 'arrayLastTask' => $recentUserTask,
                 'subject' => $subjectDate
                 );
    echo getView('right_block.html', $vars); 
      

    $vars = array(
                 'VkAuthLink' => getVkAuthLink()
                 );
    echo getView('footer.html', $vars); 
   
?>
