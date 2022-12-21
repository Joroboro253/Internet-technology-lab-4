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
    
    $nomer = (int)$_GET['nomer'];
    $anek = $_GET['anek'];
    for ($i = 1; $i <= 15; $i++){
        if (file_exists("clients/{$i}.txt")){
        $files_amount++;
        } else {
            break;
        }
    }
    $files_amount++;
    if ($nomer > $files_amount){
        $succes = false;
    } else {
        $succes = true;
        $new_anek = fopen("clients/{$nomer}.txt","w");
        fwrite($new_anek,$anek);
        fclose($new_anek);
    }
    ?>

    <h2> <?php if ($succes) { echo 'Запись отредактирована!';} else { echo 'Введен неверный номер записи';} ?></h2> <br>
    <a href="change.php"> Заново</a>
    <br>
    <a href="index.php"> На главную</a>
</body>

</html>