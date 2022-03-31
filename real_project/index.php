<?php

include ('autoloader.php');

use Models\human\Man;

echo ('<pre>');
$man1 = new Man();  
//$man1->colorTop('1');
print_r($man1);
echo ('</pre>');
