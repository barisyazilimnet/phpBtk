<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // ! tavsiye edilmeyen kullanım
        echo <<<end
        echo küçük end
        end."<br />";
        echo <<<END
        echo büyük end
        END."<br />";
        print <<<end
        print küçük end
        end."<br />";
        print <<<END
        print büyük end
        END."<br />";
        // ! tavsiye edilmeyen kullanım
        echo 'Türkiye\'nin başkenti Ankara\'dır.<br />';
        echo "Türkiye\"nin başkenti Ankara\"dır.<br />";
        $ankara ="Ankara";
        echo 'Türkiye\'nin başkenti $ankara\'dır.<br />'; // ! -> Türkiye'nin başkenti $ankara'dır.
        echo "Türkiye'nin başkenti $ankara'dır.<br />"; // ! -> Türkiye'nin başkenti Ankara'dır.
        echo 'Türkiye\'nin başkenti {$ankara}\'dır.<br />'; // ! -> Türkiye'nin başkenti $ankara'dır.
        echo "Türkiye'nin başkenti {$ankara}'dır.<br />"; // ! -> Türkiye'nin başkenti Ankara'dır.
        print 'Türkiye\'nin başkenti $ankara\'dır. (print)<br />'; // ! -> Türkiye'nin başkenti $ankara'dır.
        print "Türkiye'nin başkenti $ankara'dır. (print)<br />"; // ! -> Türkiye'nin başkenti Ankara'dır.
    ?>
    <?
        echo 'Türkiye\'nin başkenti Ankara\'dır.<br />';  
    ?>
    <?='Türkiye\'nin başkenti Ankara\'dır.<br />'?>
</body>
</html>