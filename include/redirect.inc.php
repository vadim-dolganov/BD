<?php
    require_once('common.inc.php');

    function redirect()
    {
        header("HTTP/1.0 404 No Response");
        header('Location: /404.html');
        exit();
    }
    function dataIsEmpty($date)
    {
        if (!$date)
        {
            redirect();
        }
    }

    function checkTheGetRequestInSubject($page, $subject)
    {
        if (!(is_numeric($page) && is_subject($subject)))
        {
            redirect();
        }
    }

    function checkTheGetRequestInIndex($page)
    {
        if (!(is_numeric($page ) || (GetCurPage() == ROOT_PAGE)))
        {
            redirect();
        }
    }