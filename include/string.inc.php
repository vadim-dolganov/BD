<?php
    require_once('common.inc.php');

    function haveIsEmptyData($class, $predmet, $text, $points)
    {
        return (empty($class)) || (empty($predmet)) || (empty($text)) || (empty($points));
    }

    function removeTheTags($text)
    {
        return strip_tags($text, '<p><br><strong><b><span><code>');
    }

    function convertNumberInSelectText($predmet)
    {   
        switch ($predmet) 
        {
            case 1: return "Математика"; 
            case 2: return "Алгебра";
            case 3: return "Геометрия";
            case 4: return "Физика";
            case 5: return "Русский язык";
            case 6: return "Информатика";
            case 7: return "Химия";
        }       
    }

    function is_subject($subject)
    {   
        $subjectDate = getSubjectDate();
        foreach($subjectDate as $item)
        { 
            foreach($item as $value)
            { 
                if (mb_strtolower($value, 'UTF-8') == mb_strtolower($subject, 'UTF-8'))
                {
                    return true;
                }
                
            }
     
        }
        return false;
    }
 
    function totalNumberOfPages($posts, $num)
    {
        return intval(($posts-1) / $num +1);
    }

    function startPost($page, $total, $num)
    {
        if(empty($page) or $page < 0) 
        {
            $page = 1;  
        }

        if($page > $total) 
        {
            $page = $total;  
        }
        return $page * $num - $num;   
    }
