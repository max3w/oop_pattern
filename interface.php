<?php

interface Icar{ //интерфейсы состоят только из абстрактных методов
 function Start();
 function Stop();
}

interface Scar{ //интерфейсы состоят только из абстрактных методов
    function Way();
}

class OCar implements Icar,Scar{ //implements вместо extends
    // интерфейсов можем подключать несколько через запятую
    public function Start()
    {
        $result = 'Старт<br>';
        return $result;
    }
    public function Stop(): string
    {
        $result = 'Стоп<br>';
        return $result;
    }
    public function Way(): string{
        return "Дорога";
    }
}
$run = new OCar;
echo $run->Stop();
echo $run->Start();
echo $run->Way();

