<?php

/* COOKIE ILE SESSION ARASINDAKI FARK
- Cookie'ler web sitesine giriş yapan kullanıcıların bilgisayarlarında saklanır.
- Sessionlar ise bizim serverimizde saklanmaktadır. 

*/  


//setcookie('Name','Value');
//setcookie('user','ozikozi41');

//echo time(); //1 ocak 1970'den beri geçen zamanı basar.


//setcookie('isim','Muhammet Oguzhan',time()+20); //20 saniye geçerli
//setcookie('isim','Muhammet Oguzhan',time()+ 86400); //86400 saniye 1 güne denktir.
//setcookie('isim','Muhammet Oguzhan',time()+ (86400 * 2)); //2 gün aktif kalır.

//Cookie'leri php tarafından silemiyoruz fakat tekrar oluşturup sürelerini negatif verirsek silebiliriz.
//Örneğin;
setcookie('isim','Muhammet Oguzhan',time() - (86400*2)); //Direkt olarak geçerliliğini bitirecektir.




echo "<pre>";
print_r($_COOKIE);

/*
setcookie(
    $name, //Cookie'nin ismidir. Cookie bu isim üzerinden çağırılır.
    $value,//Cookie değeridir.
    $time, //Tarayıcı üzerinde aktif olacağı saniye cinsinden tutulan değerdir. Bir değer verilmezse,
    //Tarayıcı kapandığı zaman silinir, tarayıcı açık kaldığı sürece aktif olur. 
    $path, //Sitede hangi dizin içerisinde çalışması gerektiğini belirtir.
    //Bütün sitede aktif olması istenir ise "/" değeri girilir.
    $domain, //Cookie'nin çalıştığı site içerisinde hangi alt domain üzerinde çalışacağını belirtir.
    //Yazılmaz ise çalıştığı sitedeki ana domain baz alınır, yani tüm site üzerinde etkili olur.
    $secure, //True olarak aktif edilir ise sadece HTTPS bağlantılarda PHP çerez kullanımı gerçekleşir.
    //Cookie güvenliği arttırma işlemi için kullanılır. Çerez bilgisi sadece https bağlantısı ile alınacağı belirtilir.
    $http_only//True olarak kullanımı aktif edilir ise cookie sadece sunucu üzerinden erişilebilir olacaktır.
    //Javascript ile tarayıcı üzerinde cookie düzenlenemeyecektir.
); */







?>