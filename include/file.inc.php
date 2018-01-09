<?php
    require_once('config.inc.php');
	function is_valid_type($file)
	{
	    $valid_types = array("image/jpg","image/jpeg", "image/bmp", "image/gif", "image/png");	
        return in_array($file['type'], $valid_types);
	}
    
    function uploadFileAvatar($avatar, $uploadAvatar)
    {
        $getFileAvatar = file_get_contents($uploadAvatar);  
        file_put_contents(PATH_IMG_AVATAR.$avatar, $getFileAvatar); 
    }
 
    function uploadImage($temporaryFolder, $TARGET_PATH)
    {
        move_uploaded_file($temporaryFolder, $TARGET_PATH);
    }
  
    function changeNameFile(&$TARGET_PATH, &$fileName, $imgPath)
    {    
        $fileName = date("YmdHi").$fileName;
        $TARGET_PATH = $imgPath.$fileName;
	    
    }