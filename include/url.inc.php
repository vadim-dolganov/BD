<?php
    function GetCurPage()
    {
        return "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    }
