<!DOCTYPE HTML>
<meta charset = "utf-8">

<?php
    error_reporting(E_ALL); //вкл сообщения об ошибках

    $n = 10;    //число вопросов
    $p = 7;     //порог сдачи теста
    $i = 0;     //счетчик ответов

    $keys = file('keys.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);   //читаем содержимое файла с ключами и помещаем его в массив

    foreach ($keys as $key){      //обходим массив keys с помощью цикла
        if (in_array($key, $_GET)){  //ищем правильный ответ в массиве $_GET
            $i++;                        //увеличиваем счетчик ответов на 1
        }
    }

    if ($i < $p){   //если счетчик ответов меньше порога сдачи
        echo "<div style=\"font:bold 18px Arial; color:red;\">К сожалению, Вы не сдали тест. Попробуйте снова!</div>";  //выводим сообщение, что тест не сдан
    }
    else{
        echo "<div style=\"font:bold 18px Arial; color:green;\">Поздравляем! Вы успешно сдали тест!</div>";             //выводим сообщение, что тест сдан
    }
?>
<p><a href="control_test.html"><< Назад</a></p>