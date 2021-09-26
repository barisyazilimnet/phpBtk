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

    $teams = array(array("year_foundation" => "1903", "team_name" => "Beşiktaş"), array("year_foundation" => "1905", "team_name" => "Galatasaray"), array("year_foundation" => "1907", "team_name" => "Fenerbahçe"));
    
    echo "<pre>";
    print_r($teams);
    echo "</pre>";

    echo "<pre>";
    print_r(array_column($teams, "team_name")); // ? takım adlarını alarak yeni bir dizi oluşturur
    echo "</pre>";

    echo "<pre>";
    print_r(array_column($teams, "team_name", "year_foundation")); // ? takım adlarını ve kuruluş yıllarını alarak yeni bir dizi oluşturur
    echo "</pre>";

    ?>
</body>

</html>