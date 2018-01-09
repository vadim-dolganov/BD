<?php
    require_once('../include/common.inc.php');
    require_once '../lib/Smarty.class.php';
    dbInitialConnect(); //Соединение с бд	
    if(isset($_GET['num']))
    {
        session_start();
        $num = dbQuote($_GET['num']);
        $getUserId = $_SESSION['user']['user_id'];
        $addUserDate = dbQueryGetResult("SELECT answer.*, task.task_id, task.class, task.item 
                                         FROM answer 
                                         INNER JOIN task 
                                         ON answer.task_id = task.task_id 
                                         WHERE answer.autor_id = $getUserId
                                         LIMIT $num, 5
                                       ");
        if ($addUserDate)
        {
            for($i = 0; $i != count($addUserDate); $i++)
            {
                echo '<div class="min_task" style="width: 70%; margin: 0 auto;">        
                        <div class="text_task" style="margin-left: 0; margin-bottom:20px;">          
                          <div>           
                            <a href="/task.php?id='.$addUserDate[$i]['task_id'].'">             
                              <span class="autor">Ссылка на задачу</span>           
                            </a>          
                            <span class="date joint_item fl_right date">'.$addUserDate[$i]['date'].'</span>    
                          </div>          
                          <p>'.$addUserDate[$i]['answer_text'].'</p>';
                          if($addUserDate[$i]['image'])
                          {
                            echo '<a href="/upload/answer/'.$addUserDate[$i]['image'].'">
                              <img src="/upload/answer/'.$addUserDate[$i]['image'].'" style="max-width: 20%; max-height:500px; margin-top: 5px;" alt="Решение пользователя">
                            </a><br>';
                          }       
                          echo '<span class="joint_item">'.$addUserDate[$i]['item'].'</span>          
                          <span class="joint_item">'.$addUserDate[$i]['class'].' класс</span>
                        </div>     
                      </div>';
                sleep(0.8);
            }
        }
        else
        {
            echo 0;
        }
    }
?>