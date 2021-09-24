<?php
function camelCase2UnderScore($str, $separator = "-")
{
    if (empty($str)) {
        return $str;
    }
    $str = lcfirst($str);
    $str = preg_replace("/[A-Z]/", $separator . "$0", $str);
    return strtolower($str);
}


if (isset($_GET['menu']))
{
    switch ($_GET['menu'])
    {
        case 'homePage':
            echo camelCase2UnderScore("homePage");
             
         
            break;
        case 'menu2':
            echo "other pages";
            break;
    }
}

?>