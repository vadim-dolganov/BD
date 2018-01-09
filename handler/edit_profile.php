<?php
    session_start();
    require_once('../include/common.inc.php');
    dbInitialConnect(); //Соединение с бд	

    $name = dbQuote(removeTheTags($_POST["name"]));
    $lastname = dbQuote(removeTheTags($_POST["lastname"]));
    $userId = $_SESSION['user']['user_id'];

    $imgPath = PATH_IMG_AVATAR;
    $image = $_FILES['SettingsAvatar'];
    $imageName = dbQuote($image['name']);
	$TARGET_PATH = $imgPath.$imageName;
    if ((empty($imageName) || is_valid_type($image)) && !(empty($name) || empty($lastname)))
    {
        if (empty($imageName))
        {
            $imageName = $_SESSION['user']['photo_big']; //если изображение не загружено  
        }
        else
        {
            if (file_exists($TARGET_PATH))
	        {      
                changeNameFile(&$TARGET_PATH, &$imageName, $imgPath);
	        }
            uploadImage($image['tmp_name'], $TARGET_PATH);     
            $_SESSION['user']['photo_big'] = $imageName;
        }
        updateProfile($name, $lastname, $imageName, $userId);
        
    }
    header('Location: ../user/settings.php'); 
?>