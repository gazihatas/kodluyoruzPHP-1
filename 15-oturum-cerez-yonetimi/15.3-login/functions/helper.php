<?php


function get($get){
    /*
        Bu fonksiyonun amacı şu;
        if(get('islem')) diye bir kontrol yazdığımızda eğer islem adında bir get isteği varsa
        kontrol mekanizması çalışacak, yoksa false dönecek.
    */
    if(isset($_GET[$get])){
        //$_GET ile $get isminde bir işlem gelmişse
        return trim($_GET[$get]);
    }
    else{
        return false;
    }
}
function post($post){
    
    if(isset($_POST[$post])){
        //$_GET ile $get isminde bir işlem gelmişse
        return trim($_POST[$post]);
    }
    else{
        return false;
    }
}
function session($session){
    if(isset($_SESSION[$session])){
        return trim($_SESSION[$session]);
    }
    else{
        return false;
    }
}

function cook($cookie){
    if(isset($_COOKIE[$cookie])){
        return $_COOKIE[$cookie];
    }
    else{
        return false;
    }
}


?>