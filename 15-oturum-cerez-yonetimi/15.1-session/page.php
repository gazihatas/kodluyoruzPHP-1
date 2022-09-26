<?php


session_start();

if(isset($_SESSION['user'])){

    echo "Sayın ".$_SESSION['user']['name']." ".$_SESSION['user']['surname']." Hoşgeldiniz.";

}
else{
    echo "Oturum açmanız gerekmektedir.";
}



?>