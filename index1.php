<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link
        href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII="
        rel="icon" type="image/x-icon">
    <title>Лабораторная 4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2> Записаная книга СТО "Мираж" </h2> <br>

    <h3> <?php 
                $files_amount = 6;

                for ($i = 6; $i <= 20 ; $i++){
                    if (file_exists("clients/{$i}.txt")){
                    $files_amount++;
                    } else {
                        break;
                    }
                }
               
                for ($j = 6; $j < $files_amount; $j++){
                echo $j;
                $file_array = file("clients/{$j}.txt");
                $f = file("clients/{$j}.txt");
                for ($i=0; $i < count($f); $i++){
                echo "<br>";
                echo $file_array[$i];
                }
                echo "<br>";
                echo "<br>";
            }
                ; ?></h3>

           <div>  Больше клиентов нет! Ищите новых. </div>
            <br>
           <a href="create.php">Добавить клиента.</a>
           <br>
           <a href="change.php">Редактировать заказ</a>
           <br>
           <a href="index.php"> На главную</a>
</body>
</html>