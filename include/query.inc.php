<?php
    require_once("common.inc.php");

    function getUserTask($post_id)
    {
        return dbQueryGetResult("SELECT question.*, us.name, us.avatar, us.user_id  
                                 FROM task question 
                                 INNER JOIN user us 
                                 ON (question.autor_id = us.user_id) 
                                 WHERE task_id = $post_id"
                               );
    }

    function updateUserPoints($taskPoints, $userId, $userPoints)
    {
        $newPoints = $userPoints - $taskPoints;
        $_SESSION['user']['points'] = $newPoints;
        return dbQuery("UPDATE user 
                        SET points = '$newPoints'
                        WHERE user_id = '$userId'
                      ");
    }

    function getUserAnswer($post_id)
    {
        return dbQueryGetResult("SELECT answer.*, us.name, us.avatar, us.user_id 
                                 FROM answer  
                                 INNER JOIN user us 
                                 ON (answer.autor_id = us.user_id)  
                                 AND  (task_id = $post_id)
                                ");
    }

    function getRecentUserTask($limit)
    {
        return dbQueryGetResult("SELECT answer_text, task.task_id, task.item 
                                 FROM answer
                                 INNER JOIN task
                                 on answer.task_id = task.task_id 
                                 ORDER BY answer_id
                                 DESC limit $limit
                                ");
    }

    function getUserData($getUserId)
    {
        return dbQueryGetResult("SELECT * 
                                 FROM user 
                                 WHERE user_id = $getUserId
                                ");
    }

    function getAnswersDataUser($getUserId)
    {
        return dbQueryGetResult("SELECT answer.*, task.task_id, task.class, task.item 
                                 FROM answer 
                                 INNER JOIN task 
                                 ON answer.task_id = task.task_id 
                                 WHERE answer.autor_id = $getUserId
                               ");
    }

    function isUserInDatabase($vk_id)
    {
        return dbQueryGetResult("SELECT vk_id, user_id, avatar, points
                                 FROM user
                                 WHERE vk_id = $vk_id
                               ");
    }
    function updateProfile($name, $lastname, $imageName, $userId)
    {
        return dbQuery("UPDATE user 
                        SET name = '$name', last_name = '$lastname', avatar = '$imageName'
                        WHERE user_id = '$userId'
                      ");
    }


    function getPost($start, $num)   
    {
        return dbQueryGetResult("SELECT questions.*, us.name, us.avatar, us.user_id, an.answer_id
                                 FROM task questions
                                 LEFT JOIN user us ON (questions.autor_id = us.user_id) 
                                 LEFT JOIN answer an ON (questions.task_id = an.task_id) 
                                 GROUP BY questions.task_id, an.task_id
                                 ORDER BY questions.task_id 
                                 DESC LIMIT $start, $num                     
                               ");
    }

    function getCountPostsInSubject($subject)
    {
        return count(dbQueryGetResult("SELECT task_id FROM task WHERE item = '$subject'"));  
        
    }

    function getCountPosts()
    {
         return count(dbQueryGetResult("SELECT task_id FROM task"));  
    }

    function getSubjectDate()
    {
        return dbQueryGetResult("SELECT
                                 DISTINCT item
                                 FROM task 
                                ");
    }

    function getPostsSubject($subject, $start, $num)
    {
        return dbQueryGetResult("SELECT questions.*, us.name, us.avatar, us.user_id 
                                 FROM task questions  
                                 INNER JOIN user us 
                                 ON (questions.autor_id = us.user_id) AND (questions.item = '$subject')
                                 ORDER BY task_id 
                                 DESC LIMIT $start, $num                             
                               ");
    }

    function addAnswerInDB($postid, $text, $autro_id, $imageName, $today)
    {
        return  dbQuery("insert into answer (task_id, answer_text, autor_id, image, date) values ('$postid', '$text', '$autro_id', '$imageName', '$today')");
    }

    function addNewUserInDB($user, $avatar)
    {
        $name = $user['first_name'];
        $floor = $user['sex'];   
        $vk_id = $user['uid']; 
        $last_name = $user['last_name'];   
        $bdate = $user['bdate'];
        $points = INITIAL_POINT;
        return dbQuery("insert into user (name, last_name, vk_id, avatar, floor, bdate, points) values ('$name', '$last_name', '$vk_id', '$avatar', '$floor', '$bdate', '$points')"); 
    }

    function addQuestionInDB($class, $predmet, $text, $today, $imageName, $points)
    {
        return dbQuery("insert into task (task_text, autor_id, date, item, class, autor_name, image, points) values ('$text', '".$_SESSION['user']['user_id']."', '$today', '$predmet', '$class', '".$_SESSION['user']['first_name']."', '$imageName', '$points')");
    }

    function addAnonimUserQuestionInDB($class, $predmet, $text, $today, $imageName, $points)
    {
      $autor = 95;
      $autorName = "Аноним";
        return dbQuery("insert into task (task_text, autor_id, date, item, class, autor_name, image, points) values ('$text', '$autor', '$today', '$predmet', '$class', '$autorName', '$imageName', '$points')");
    }

    function updateCategory()
    {
      
      $enum = array(
        'Алгебра' => '1',
        'Информатика' => '2',
        'Математика' => '3',
        'Физика' => '4',
        'Геометрия' => '5',
        'Русский язык' => '6',
        'Химия' => '7',
        
      );
      $all = dbQueryGetResult("SELECT task_id, item FROM task WHERE 1");
      //var_dump($allId);
      for ($i = 0; $i < count($all); $i++) {
        //$allId["$i"]["task_id"]
        $enumValue = $enum[$all["$i"]["item"]];
        $taskId = $all["$i"]["task_id"];
        var_dump( dbQuery("UPDATE task 
                        SET category_id = '$enumValue'
                        WHERE task_id = '$taskId'
                      "));
        echo $i . "=" . $enumValue . "<br>";
      }
      
    }
           
