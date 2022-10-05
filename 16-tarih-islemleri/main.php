<?php

/*
    PHP'de tarih ve zaman bilgisini date() fonksiyonu ile elde ederiz.
    Hangi formatta tarih ve zamanı alacağımız date fonksiyonuna parametre olarak bildirmemiz gerekiyor.
*/


/* Tarih Zaman Parametreleri


Karakter        Açıklama                                        Örnek
s               Sıfırlı Şekilde İki Haneli Saniye Değeri        07
i               İki Haneli Dakika Değeri                        05
H               İki Haneli 24 Saat Biçiminde Saat Değeri        00 ile 23 arası
d               İki Haneli Gün Değeri                           01 ile 31 arası
m               İki Haneli Ay Değeri                            01 ile 12 arası
Y               Dört Haneli Yıl Değeri                          2017
j               Tek Haneli Gün Değeri                           4
n               Tek Haneli Ay Değeri                            1 ile 12 arası
y               İki Haneli Yıl Değeri                           Örneğin 2012 için 12
l               Gün İsmi                                        Saturday 
F               Ay İsimleri                                     February
z               Yılın Günü                                      0 ile 365 arası


date_default_timezone_set();
date();
time();
strtotime();
*/

function _date($date){

    $date_en = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];

    $date_tr = [
        'Ocak',
        'Şubat',
        'Mart',
        'Nisan',
        'Mayıs',
        'Haziran',
        'Temmuz',
        'Ağustos',
        'Eylül',
        'Ekim',
        'Kasım',
        'Aralık'
    ];

    return str_replace($date_en,$date_tr,$date);

}

date_default_timezone_set('Europe/Istanbul');
$format = 'Y-m-d H:i:s';
$format = 'H:i:s d-m-Y';
$format = 'H:i:s l-F-Y z';
echo _date(date($format));

echo "<br>".time()."<br>"; //1 ocak 1970'ten şu ana geçen saniyeyi verir, Buna unix timestap(zaman damgası) denir.


/* strtotime() fonksiyonu

    Parametre olarak 'now' değerini verirsek time ile aynı işlevi görür.
    '+1 hours' parametresi 1 saat sonrasını 
    '+1 days' parametresi 1 gün sonrasını gibi gibi.

*/
echo strtotime('+1 hours')."<br>";

$unix = strtotime('+1 hours');

//Aşağıda unix timestap'i gönderip (1 saat sonrasına ayarlayıp) istediğimiz formatta ekrana yazdırıyoruz.
echo date('Y-m-d H:i:s', $unix);

//Aşağıda belirlediğimiz bir tarihi, zaman damgasına çeviriyoruz.
$unix = strtotime('2022-10-05 09:50:35');
echo "<br>".$unix;

//Ya da belirttiğimiz tarih üzerine ekleme çıkarma yapabiliriz.
//Aşağıda sabit olarak belirttiğimiz bir tarihten 5 ay çıkarıyoruz.
echo "<br>".strtotime('-5 month',$unix);

//Hatta yukarıdaki işlemi bir değişkene atayıp ardından date ile istediğimiz formata da çevirebiliriz.
$t = strtotime('-5 month',$unix);
echo "<br>".date('H:i:s d-m-Y',$t)."<br>";


//DateTime sınıfı ile çalışma örneği
$DateTime = new DateTime(); //Burada parametre olarak '+1 month' verebiliriz aynı strtotime gibi.
echo $DateTime->format('Y-m-d H:i:s'); //Timezone ayarlamadığımız için bu da 1 saat geriden geliyor.





?>