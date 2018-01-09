<?php
	session_start();
    require_once('../include/common.inc.php');
    require_once '../lib/Smarty.class.php';
    dbInitialConnect(); //Соединение с бд	

	 
	// получение отправленных переменных	
    $noTags = removeTheTags($_POST['text_answer']);
    $text = dbQuote(removeTheTags($_POST['text_answer']));
    $postid = dbQuote($_POST['postid']);
    $autro_id = dbQuote($_SESSION['user']['user_id']);
    $today = date("Y-m-d H:i"); 

    $imgPath = TARGET_IMG_ANSWER_PATH;
    $image = $_FILES['image'];
    $imageName = dbQuote($image['name']);
	$TARGET_PATH = $imgPath.$imageName;

	if(!empty($text) && ((empty($imageName)) || (is_valid_type($image))))
    {
        if (!empty($imageName))
        {
            if (file_exists($TARGET_PATH))
	        {      
                changeNameFile(&$TARGET_PATH, &$imageName, $imgPath);
	        }
            uploadImage($image['tmp_name'], $TARGET_PATH);     
        }  	 
      
        addAnswerInDB($postid, $text, $autro_id, $imageName, $today);
        $vars = array(
                     'image' => $imageName,
                     'text' => $noTags
                     );
        echo getView('echo_answer_ajax.html', $vars);  
    }
    else
    {
       header('HTTP/1.0 400 Bad Request');
	    
    }
	