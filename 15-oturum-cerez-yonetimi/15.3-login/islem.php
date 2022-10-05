<?php

session_start();
include 'functions/helper.php';





$user = [
    'sahinersever' => [
        'password' => '123456',
        'mail' => 'sahin@stebilsim.com'
    ],
    'muhammetoguzhanaydogdu' =>[
        'password' => 'ozi1234',
        'mail' => 'muhammetoguzhanaydogdu@gmail.com'
    ],
    'kodluyoruz' => [
        'password' => 'kodluyoruz1234',
        'mail' => 'info@kodluyoruz.org'
    ]
];


//Giriş İşlemi Gerçekleşmişse
if(get('islem')=='giris'){

    //Eğer kullanıcı hatalı girişler yapmışsa, tekrar login'e geri yönlendirdiğimizde 
    //Kullanıcı adı ve şifreyi sıfırlamadan, silmeden olduğu gibi bırakıyoruz. Kullanıcı kendi düzenlesin diye
    $_SESSION['username'] = post('username');
    $_SESSION['password'] = post('password');


    //GET ile gelen bir islem ise ve değeri giris ise burası çalışacak.
    if(!post('username')){
        //POST ile bir username gönderilmemiş ise hata mesajını içeren session oluşturacağız.
        $_SESSION['error'] = 'Lütfen Kullanıcı Adınızı Giriniz.';
        header('Location:login.php');
    }
    else if(!post('password')){
        //POST ile bir password gönderilmemiş ise hata mesajını içeren session oluşturacağız.
        $_SESSION['error'] = 'Lütfen Şifrenizi Giriniz.';
        header('Location:login.php');
    }
    else{
        //username ve password yollanmış ise artık doğruluğunu kontrol ediyoruz.

        //Önce bizim kullanıcılarımızın bulunduğu array içerisinde böyle bir kullanıcı adı var mı diye
        //Kontrol ediyoruz. Kullanıcı adları array içerisinde key olarak tutulmakta, şifreler ise value.
        //Aşağıdaki metod user isimli dizide post metodundan gelen username değerini key olarak arar.
        if(array_key_exists(post('username'),$user)){
            //user dizisi içerisinde böyle bir kullanıcını varsa; şifresini kontrol ediyoruz.
            //user dizisi içerisinde posttan gelen username kullanıcı adına sahip(key) elemanın password
            //değeri posttan gelen password ile eşleşiyorsa;
            if($user[post('username')]['password'] == post('password')){
                //Kullanıcının şifresi doğru.
                //Oturumu başlatıyoruz.
                $_SESSION['login']=true;
                $_SESSION['kullanici_adi'] = post('username');
                $_SESSION['eposta'] = $user[post('username')]['mail'];
                header('Location:index.php');

            }
            else{
                //Kullanıcının şifresi hatalı.
                $_SESSION['error']='Kullanıcı Adı veya Şifresi Hatalı.';
                header('Location:login.php');
            }
            
        }
        else{
            //Böyle bir kullanıcı yoksa, user dizisi içerisinde gönderilen username yoksa.
            $_SESSION['error']='Kullanıcı Adı veya Şifresi Hatalı.';
            header('Location:login.php');
        }
    }
}


//Hakkımda kısmında bir işlem gerçekleşmişse (index.php)
//Daha doğrusu gelen işlem "hakkimda" ise
if(get('islem')=='hakkimda'){
    $hakkimda = post('hakkimda');
    $islem = file_put_contents('./db/'.session('kullanici_adi').'.txt',htmlspecialchars($hakkimda));


    if($islem){
        header('Location:index.php?islem=true');
    }
    else{
        header('Location.index.php?islem=false');
    }
    


}

//Çıkış işlemi
if(get('islem')=='cikis'){
    session_destroy(); //Bütün sessionları sonlandırır sıfırlar.
    session_start(); //Tekrar session yapısını çalıştırıyoruz.
    $_SESSION['error']='Oturum sonlandırıldı.';
    header('Location:login.php');
}


//Renk işlemleri
if(get('islem')=='renk'){
    
    setcookie('color',get('color'),time()+(365*86400));
    
    header('Location:'.$_SERVER['HTTP_REFERER']??'index.php');

    //HTTP_REFERER buraya hangi sayfadan gelindiğini döndürür.



}

?>