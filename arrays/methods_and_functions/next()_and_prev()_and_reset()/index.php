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
        $names = array("Barış KURT", "Ali TOPÇU", "Ali ÜSTÜN");
        echo "<pre>";
        print_r($names);
        echo "</pre>";
        echo "Dizinin varsayılan ilk anahtar degeri => " . key($names) . "<br />",
             "Dizinin varsayılan ilk eleman degeri => " . current($names) . "<br /><br />";
        next($names); // ? gösterici konum degerini bir ileri alır
        echo "Dizinin ileri alınmış ilk anahtar degeri => " . key($names) . "<br />",
             "Dizinin ileri alınmış ilk eleman degeri => " . current($names) . "<br /><br />";
        next($names); // ? gösterici konum degerini bir ileri alır
        echo "Dizinin ileri alınmış ilk anahtar degeri => " . key($names) . "<br />",
             "Dizinin ileri alınmış ilk eleman degeri => " . current($names) . "<br /><br />";
        prev($names); // ? gösterici konum degerini bir geri alır
        echo "Dizinin geri alınmış ilk anahtar degeri => " . key($names) . "<br />",
             "Dizinin geri alınmış ilk eleman degeri => " . current($names) . "<br /><br />";
        next($names); // ? gösterici konum degerini bir ileri alır
        echo "Dizinin ileri alınmış ilk anahtar degeri => " . key($names) . "<br />",
             "Dizinin ileri alınmış ilk eleman degeri => " . current($names) . "<br /><br />";
        reset($names); // ? gösterici konum degerini sıfırlar (varsayılan haline döner)
        echo "Dizinin varsayılan (sıfırlar) ilk anahtar degeri => " . key($names) . "<br />",
             "Dizinin varsayılan (sıfırlar) ilk eleman degeri => " . current($names) . "<br /><br />";
    ?>
</body>
</html>