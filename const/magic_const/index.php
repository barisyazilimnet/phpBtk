<?php 
    namespace projects; //! dosyanın en başında bulunması gereklidir 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        echo __LINE__."<br />"; // bulundugu satır numarasını verir.
        $line =  __LINE__;
        echo $line;
        echo "<br /><br />";
        echo __DIR__."<br />"; // dosyanın bulundugu klasör bilgisini verir. Dosya adını içermez.
        $dir =  __DIR__;
        echo $dir;
        echo "<br /><br />";
        echo __FILE__."<br />"; // dosyanın bulundugu klasör bilgisini verir. Ekstra olarak dosya adınıda verir.
        $file =  __FILE__;
        echo $file;
        echo "<br /><br />";
        function func(){
            echo __FUNCTION__."<br />"; // bulundugu fonksiyonun adını verir.
            $file =  __FUNCTION__;
            echo $file;
        }
        func();
        echo "<br /><br />";
        class classes{ // sınıfın içindeki her fonksiyon bir methoddur
            function func1(){
                echo __CLASS__."<br />"; // bulundugu sınıfın adını verir.
                $class =  __CLASS__;
                echo $class;
            }
        }
        $value = new classes; // sınıfa ulaşmak için
        $value -> func1(); // sınıfın içindeki methoda ulaşmak için
        echo "<br /><br />";
        class class1{  // sınıfın içindeki her fonksiyon bir methoddur
            function func2(){
                echo __METHOD__."<br />"; // bulundugu classın ve methodun adını verir.
                $method =  __METHOD__;
                echo $method;
            }
        }
        $value2 = new class1; // sınıfa ulaşmak için
        $value2 -> func2(); // sınıfın içindeki methoda ulaşmak için
        echo "<br /><br />";
        trait property1{ // sınıfa özellik eklemek için kullanılır.
            function func3(){
                echo __TRAIT__."<br />"; // bulundugu özelligin adını verir.
                $trait =  __TRAIT__;
                echo $trait."<br />";
            }
        }
        trait property2{ // sınıfa özellik eklemek için kullanılır.
            function func4(){
                echo __TRAIT__."<br />"; // bulundugu özelligin adını verir.
                $trait =  __TRAIT__;
                echo $trait;
            }
        }
        class class2{
            use property1;
            use property2;
        }
        $value3 = new class2; // sınıfa ulaşmak için
        $value3 -> func3(); // sınıfın içindeki methoda ulaşmak için
        $value3 -> func4(); // sınıfın içindeki methoda ulaşmak için
        echo "<br /><br />";
        echo __NAMESPACE__."<br />"; // namespace adını verir.
        $namespace =  __NAMESPACE__;
        echo $namespace;
    ?>
</body>

</html>