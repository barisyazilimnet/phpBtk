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
    $number = 0;
    if ($number > 0) :
        echo "Pozitif";
    elseif ($number < 0) :
        echo "Negatif";
    else :
        echo "Sıfır";
    endif;

    echo "<br /><br />";

    $number = -5;
    switch ($number):
        case ($number > 0):
            echo "Pozitif";
            break;
        case ($number < 0):
            echo "Negatif";
            break;
        default:
            echo "Sıfırdır";
    endswitch;

    echo "<br /><br />";

    $name = "Barış";
    try{ //? hata olmazsa çalışır
        if($name== "Barış"):
            echo "İsim dogru";
        else:
            throw new Exception("İsim yanlış");
        endif;

        echo "<br />Bu satır çalışıyorsa hata yoktur";
    }catch(Exception $result){ //? hata olursa çalışır
        echo $result->getMessage();
    }finally{
        echo "<br />İşlem tamamlandı";
        //? burası her daim çalışır
    }
    ?>
</body>

</html>