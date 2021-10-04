<?php

    // Variables
    $num = 101;     // integer
    $float = 10.8;  // float
    $name = 'Vasta';    // string

    $arr = array(1,2,3,4,5);      // array

    $arr2 = array(
        'Johny',
        'Flame',
        'Walker',
        'Curtis');

    $arr3 = array(
        'name' => 'Johny',
        'surname' => 'Flame',
        'education' => array(   // многомерный массив
            'school in 2003',
            'college in 2009'
        ),
        'geek' => true);

    echo "Hello PHP index";
    echo '<hr>';
    echo $float;

    echo '<hr>';
    echo $name;

    echo '<hr>';
    echo $arr;

    echo '<hr>';
    echo $arr . ' ' . $arr[3];

    echo '<hr>';
    echo $arr2 . ' ' . 'ARRAY 2 '. ' ' . $arr[3];

    echo '<hr>';
    echo 'arr3' . ' ' . $arr3[name] . ' ' . $arr3[surname] . ' ' . $arr3[education][1];

    echo '<hr>';
    $bool = false;
    echo '' . $arr3[geek];
    echo '<br>';


    echo '' . '$arr3[geek]';
    echo '<br>';
    echo "' . '$arr3[geek]";
    echo '<hr>';
    echo '<hr>';

    echo ' Math ';
    echo '<br>';
    echo 'echo 10 + 5';
    echo '<br>';
    echo 10 + 5;

    echo '<hr>';
    echo '<hr>';

    echo 'echo 100 % 2;  // Проверка четное или нет';
    echo '<br>';
    echo 100 % 2;

    echo '<hr>';
    echo '<hr>';

    // ===========================================================================
    echo '// ===============   if =============================';

    $weather = 'snow';
    
    echo '<br>';
    if($weather == 'snow') {
        echo 'weather is no good ' . 'now is ' . $weather;
    }

    echo '<hr>';
    echo '<hr>';

    // ===========================================================================
    echo '// ==============={   > >= !=   }=============================';

    $age = 18;

    if($age >= 24 or $name = 'Vasta') {
        echo '<br>';
        echo "Входите";
    } else {
        echo '<br>';
        echo 'NELZYA POKA';
    }


    echo '<hr>';
    echo '<hr>';

    // ===========================================================================
    echo '// ==============={   FOREACH    }=============================';

    echo '<br>';

    $arr11 = array(
        'name' => 'Johny',
        'surname' => 'Flame',
        'education' => array(   // многомерный массив
            'school in 2003',
            'college in 2009'
        ),
        'geek' => true);

    foreach( $arr11 as $val) {


        echo $val;
        echo '<br>';

    }

    // ===========================================================================
    echo '// ==============={   function    }=============================';

    echo '<br>';


    function get_bigger($a, $b) {

        if($a > $b) {
            return $a;
        } else {
            return $b;
        }
    }

    echo '<br>'; 

    $bigger = get_bigger(22, 44);

    echo $bigger;


    echo '<br>'; 
    
    // ===========================================================================
    echo '// ==============={   useful functions    }============';

    echo '<br>  /////////////////////////////////////////  <br>';
    echo round(40.33);

    echo '<br>  /////////////////////////////////////////  <br>';
    echo abs(-332);

    echo '<br>  /////////////////////////////////////////  <br>';
    echo '<br> . ceil() . <br>';
    echo ceil(22.11);

    echo '<br>  /////////////////////////////////////////  <br>';
    echo floor(22.11);

    echo '<br> . rand() . <br>';
    echo rand(0, 100);

    echo '<br>  /////////////////////////////////////////  <br>';
    echo '<br> . min() . <br>';
    echo min(90, 100);

    echo '<br>  /////////////////////////////////////////  <br>';
    echo max(90, 100);

    echo '<br>  /////////////////////////////////////////  <br>';
    echo min(90, 100);



?>