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
    $content = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");
    $USD_buying = $content->Currency[0]->ForexBuying;
    $USD_selling = $content->Currency[0]->ForexSelling;
    $USD_effective_buying = $content->Currency[0]->BanknoteBuying;
    $USD_effective_selling = $content->Currency[0]->BanknoteSelling;
    $EUR_buying = $content->Currency[3]->ForexBuying;
    $EUR_selling = $content->Currency[3]->ForexSelling;
    $EUR_effective_buying = $content->Currency[3]->BanknoteBuying;
    $EUR_effective_selling = $content->Currency[3]->BanknoteSelling;
    echo $content->Currency[0]["Kod"];
    ?>
    <table>
        <tr>
            <th>Birim</th>
            <th>Alış</th>
            <th>Satış</th>
            <th>Efektif alış</th>
            <th>Efektif satış</th>
        </tr>
        <tr>
            <td><?php echo "USD"; ?></td>
            <td><?php echo $USD_buying; ?></td>
            <td><?php echo $USD_selling; ?></td>
            <td><?php echo $USD_effective_buying; ?></td>
            <td><?php echo $USD_effective_selling; ?></td>
        </tr>
        <tr>
            <td><?php echo "EUR"; ?></td>
            <td><?php echo $EUR_buying; ?></td>
            <td><?php echo $EUR_selling; ?></td>
            <td><?php echo $EUR_effective_buying; ?></td>
            <td><?php echo $EUR_effective_selling; ?></td>
        </tr>
    </table>
    <?php
        echo "<pre>";
        print_r($content);
        echo "</pre>";
    
    ?>
</body>
</html>