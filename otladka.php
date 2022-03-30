<?php

$admVar = 0;
//При 0 выдаст ошибку но пойдет дальше
//При другом просто пойдет дальше

function saleManager($admVar){
    if ($admVar == 0){
        //програма остановится с ошибкой
        throw new Exception ('Пришло нулевое значение');
    } 
}

try {
    saleManager('0'); 
}
catch(Exception $exception){
    echo $exception->getMessage();
    //echo ('Всеравно ошибка но програма идет дальше');
}

echo ('<br />');
//чтобы она продолжила работать
echo ('Дальнейшее выполнение пошло');
