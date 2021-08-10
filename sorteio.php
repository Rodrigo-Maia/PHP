    <?php
    
        $sorteio = [];
        $newSorteio = [];
        $repet = 0;
        $contRepet = 0;
        for ($i=0; $i < 20; $i++) { 
            $num = rand(1,20);

            array_push($sorteio, $num);

        }
        sort($sorteio);
        $a = array_count_values($sorteio);
        sort($a);
echo '<pre>';
print_r($sorteio);
print_r($a);
echo 'O número q se repetiu mais vezes foi o '. array_key_last($a).'.'.'<br>';
echo 'O número se repetiu '. end($a). ' vezes.';
echo '</pre>';
