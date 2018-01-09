<?php
    session_start();
    require_once("../include/common.inc.php");
    dbInitialConnect();
    ob_start();
    if (isset($_GET['code'])) 
    {
        $params = array(
            'client_id' => CLIENT_ID,
            'client_secret' => CLIENT_SECRET,
            'code' => $_GET['code'],
            'redirect_uri' => REDIRECT_URI
        );

        $token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);
        if (isset($token['access_token'])) 
        {            
        	$params = array(
            	'uids'         => $token['user_id'],
            	'fields'       => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big',
            	'access_token' => $token['access_token']
        	);
      
    	    $userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
            $userInfo = $userInfo['response'][0];               
            $vk_id = $userInfo['uid'];      
            if (!($userInDatabase = isUserInDatabase($vk_id)))
            {  
                $avatarName = 'id'.$userInfo['uid'].'.jpg'; 
                uploadFileAvatar($avatarName, $userInfo['photo_big']);                  
                addNewUserInDB($userInfo, $avatarName);
                $userInfo['user_id'] = dbGetLastInsertId();
                $userInfo['photo_big'] = $avatarName;
                $userInfo['points'] = INITIAL_POINT;
            }
            else
            {
                $userInfo['user_id'] = $userInDatabase[0]['user_id']; 
                $userInfo['photo_big'] = $userInDatabase[0]['avatar'];
                $userInfo['points'] = $userInDatabase[0]['points'];
            }    
            $_SESSION['user'] =  $userInfo;                   
        }
    }
    header("Location: /addquestion" ); // . $_SERVER['HTTP_REFERER']
    ob_end_flush();
    
?>