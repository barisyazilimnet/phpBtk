<?php
//? sabitler kullanılamaz
// trait person_properties{
//     public $name = "Barış";
//     public $surname = "KURT";
// }

// trait person_information{
//     public function information(){
//         return "barisyazilim.net";
//     }
// }
// class MainClass{
//     use person_properties, person_information;
// }

// $result = new MainClass;

// echo $result->name . " " . $result->surname . "<br />" . $result->information();

//!------------

trait person_properties{
    private function name_surname()
    {
        return "Ali ÜSTÜN";
    }
}

trait person_information{
    public function name_surname(){
        return "Barış KURT";
    }
}
class MainClass{
    // use person_properties, person_information { person_information::name_surname insteadof person_properties; } //? person_properties daki name_surname fonksiyonu pasif hale getirir
    // use person_information, person_properties { person_information::name_surname insteadof person_properties; } //? person_information daki name_surname fonksiyonu pasif hale getirir
    // use person_information, person_properties { person_properties::name_surname insteadof person_information; } //? person_information daki name_surname fonksiyonu pasif hale getirir
    // use person_information, person_properties { person_properties::name_surname insteadof person_information; person_information::name_surname as ns; } //? person_information daki name_surname fonksiyonu pasif hale getirir ve person_informationdaki methodun ismini degiştirelerek kullanılabilir
    // use person_properties, person_information { person_properties::name_surname insteadof person_information; person_information::name_surname as pins; person_properties::name_surname as ppns; } //! as ile aktarma yapıldıgı zaman mutlaka insteadof kullanılmalı
    //! üst taraftaki işlemler için methodların public olması gerekli

    use person_properties, person_information { person_properties::name_surname as public; person_properties::name_surname insteadof person_information; } //? erson_properties daki name_surname fonksiyonu public olur
}

$result = new MainClass;

// echo $result->pins() . "<br />"; //? person_information daki method
// echo $result->ppns();
echo $result->name_surname();

