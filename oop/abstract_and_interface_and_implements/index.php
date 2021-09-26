<?php
abstract class main_class{ //? soyut sınıf
    abstract public function hello($param);
}

class exam extends main_class{ //? soyut sınıf içierisinde bulunan methodlar soyut sınıf içerisinde türeyen alt sınıflarda bulunmalı
    public function hello($param)
    {
        echo $param;
    }
}

//!-----------------------

//? normal method public olmak zorunda
//? standar özellik içeremez
interface main_class1{ //? soyut arayüz sınıf
    public function hello1($param);
}

//? birden fazla interface sınıf tanımlanabilir3
//? soyut arayüz sınıf içierisinde bulunan methodlar soyuta arayüz sınıf içerisinde türeyen alt sınıflarda bulunmalı
class exam1 implements main_class1{ 
    public function hello1($param)
    {
        echo $param;
    }
}