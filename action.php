<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link
        href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII="
        rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Лаба 4</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= 15; $i++){
        if (file_exists("clients/{$i}.txt")){
        $files_amount++;
        } else {
            break;
        }
    }
    $files_amount++;
    $new_client = fopen("clients/{$files_amount}.txt","w");
    $client = $_POST['client'];
    echo $_POST['client'];
    fwrite($new_client,$client);
    fclose($new_client);
    ?>

    <h2> Клиент добавлен</h2> <br>
    <a href="index.php"> На главную</a>
</body>

</html>