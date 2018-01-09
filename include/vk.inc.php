<?php
    require_once "common.inc.php";

    function getVkAuthLink()
    {
        $params = array(
            'client_id'     => CLIENT_ID,
            'redirect_uri'  => REDIRECT_URI,
            'response_type' => 'code'
        );
        $link = URL_OAUTH_VK . '?' . urldecode(http_build_query($params));
        return $link;      
    }
    
    function getToken()
    {
        $params = array(
            'client_id' => CLIENT_ID,
            'client_secret' => CLIENT_SECRET,
            'code' => $_GET['code'],
            'redirect_uri' => REDIRECT_URI
        );

        $token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);
        return $token;
    }
    
    function getUserInfo($token)
    {
          $params = array(
            'uids'         => $token['user_id'],
            'fields'       => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big',
            'access_token' => $token['access_token']
        );
      
        $userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
        return $userInfo['response'][0];     
    }

?>