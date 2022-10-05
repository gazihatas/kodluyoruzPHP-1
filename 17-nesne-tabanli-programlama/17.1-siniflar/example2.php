<?php

class User{

    //Property field, özellik nitelik tanımlanan alan.
    public $isim;
    public $soyisim;
    public $eposta;
    public $yas;

    //Aşağıdaki metod sınıfın değişkenlerinin tanımlandığı fonksiyondur.
    //Javada'ki parametreli constructor ile aynı işlevi görmektedir.
    public function addUser($isim, $soyisim, $eposta, $yas){
        $this->isim=$isim;
        $this->soyisim=$soyisim;
        $this->eposta=$eposta;
        $this->yas=$yas;
    }
}


$Kullanici = new User();
$Kullanici->addUser('Muhammet Oğuzhan','AYDOĞDU','moa@gmail.com',25);

echo $Kullanici->yas;


?>