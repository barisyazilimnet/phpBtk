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
        echo "<pre>";
        print_r($_FILES["file1"]);
        echo "</pre>";

        foreach($_FILES["file1"]["tmp_name"] as $key => $value){
            echo $key . "<br />";
            echo $_FILES["file1"]["name"][$key] . "<br />";
            echo $_FILES["file1"]["type"][$key] . "<br />";
            echo $_FILES["file1"]["tmp_name"][$key] . "<br />";
            echo $_FILES["file1"]["size"][$key] . "<br /><br />";
            move_uploaded_file($_FILES["file1"]["tmp_name"][$key], $_FILES["file1"]["name"][$key]);
        }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file1[]" multiple>
    <input type="submit" value="Gönder">
    </form>
</body>
</html>