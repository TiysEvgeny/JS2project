<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true?
    // Оператор "==" подразумевает приведение типов, а предпочтение при приведении типов отдаётся численным типам перед строковым, поэтому содержимое переменной $b будет преобразовано к числу 5.
    
    var_dump((int)'012345');     // Почему 12345?
    // Здесь происходит явное преобразование строки к числу, ноль отбрасывается, поскольку числа хранятся в двоичном коде и информация о количестве нулей перед числом не хранится.
    
    var_dump((float)123.0 === (int)123.0); // Почему false?
    // Числа преобразуются к разным числовым типам, а поскольку знак "===" требует совпадения типов чтобы значение было истинным, то получаем "ложь"
    
    var_dump((int)0 === (int)'hello, world'); // Почему true?
    // Любая строка, не содержащая цифр, преобразуется при приведении типов в 0.
    
?> 
