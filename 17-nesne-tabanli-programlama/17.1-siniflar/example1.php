<?php

//Class Tanımlaması, harf veya alt çizgiyle başlar. Genel kullanımı diğer dillerde de
//olduğu gibi Büyük harfle başlatmaktır.

class User{

    public $isim = 'Muhammet Oğuzhan AYDOĞDU';
    const YAS = 28; //Sabit tanımlaması.
    public $toplam;
    public $test=5;

    public function isimYaz(){
        return $this->isim;
        //$this değişkeni class'ı temsil eder.
        //$isim yerine isim kullandık çünkü class'ın kendi değişkeni.

    }

    public function topla($number1, $number2){
        /*
            PHP içerisinde şöyle bir saçmalık mevcut;
            Eğer burada $toplam = $number1+$number2; diyerek daha sonra $toplam'ı döndürürsen sorun yok.
            Fakat $this->toplam; diyerek döndürmeye kalkarsan hata alacaksın. Çünkü undefined durumda.
            Neden undefined?
            Çünkü metodun altında aynı isimde de olsa yazdığın değişkenin imzası farklı. Aynı görmüyor.
            This ile eriştiğin class'ın toplamı, $toplam diyerek eriştiğin metodun toplam değişkeni.
            Java > PHP

        */

        $this->toplam = $number1+$number2;
        return $this->toplam;
    }

}

//Class'tan bir instance oluşturuyoruz. Bir kopya. Adı da Kullanici Olsun
$Kullanici = new User();

echo $Kullanici->isimYaz();

echo $Kullanici->topla(5,5)."<br>";
echo $Kullanici->toplam; //topla fonksiyonunun sonucunu toplamda tutuyor, toplamı döndürüyorduk.
//Daha sonra toplam'ı çağırdığımızda son sonucu tekrar görebiliyoruz. Çünkü hala bellekte duruyor.


echo User::YAS; //Sabitlere erişmek için sınıftan bir nesne türetmeye gerek yok.
//Adeta static gibi çalışıyorlar. Belki de öyleler :)






?>