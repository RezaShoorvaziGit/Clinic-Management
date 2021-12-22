<?php

function createCookie($name, $value, $option = [])
{

    setcookie($name, $value, $option);
}


function getCookie($name)
{
    return $_COOKIE[$name];
}



function destroyCookie($name)
{
    setcookie($name, '', 0);
}



function addToSession($name, $value)
{
    $_SESSION[$name] = $value ;
}



function removeFromSession($name)
{
    unset($_SESSION[$name]) ;
}


function refreshSession()
{
    session_destroy();
}
