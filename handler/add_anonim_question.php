<?php
	session_start();
    require_once('../include/common.inc.php');
    dbInitialConnect(); //Соединение с бд	
    
    $points = dbQuote($_POST['points']);
    $class = dbQuote($_POST['class']);
    $predmet = dbQuote(convertNumberInSelectText($_POST['predmet']));
    $text = dbQuote(removeTheTags($_POST['text'])); 
    $today = date("Y-m-d H:i"); 

    $imgPath = IMG_QUESTION_PATH;
    $image = $_FILES['image'];
    $imageName = dbQuote($image['name']);
    $TARGET_PATH = $imgPath.$imageName;

	if(!haveIsEmptyData($class, $predmet, $text, $points))
    {   
        if ((empty($imageName)) || (is_valid_type($image)))
        {  
            
            if (!empty($imageName))
            {
                if (file_exists($TARGET_PATH))
	            {      
                    changeNameFile(&$TARGET_PATH, &$imageName, $imgPath);
	            }
                uploadImage($image['tmp_name'], $TARGET_PATH);            
            } 
 
            addAnonimUserQuestionInDB($class, $predmet, $text, $today, $imageName, $points);
            header('Location: /task.php?id='.dbGetLastInsertId()); 
        } 
        else
        {
            echo '<h3 align="center">Недопустимый формат файла. Допускаются только файлы в формате jpg, jpeg, bmp, gif, png</h3>';   
        }       
    }
    else
    {
         echo '<h3 align="center">Обязательные поля КЛАСС, ПРЕДМЕТ, ВОПРОС!</h3>';
    }


?>