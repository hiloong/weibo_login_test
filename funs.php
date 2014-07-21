i<?php

/* 
 *   用于判读是否登录
 */

function is_login () {
    return (( isset($_SESSION['login'])) && ( $_SESSION['login'] === true ));
}

/*
 *  获取post数据， 默认处理是去除两端的空白
 */

function post($x = null) {
    if(!$x) {
        if( isset($_post[$x]) )  {
            return (trim($_post[$x]));
        } else {
            return "" ;
        }
    } else {
        return $_POST;
    }
}


