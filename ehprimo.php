    <?php

        $n = filter_input(INPUT_POST,'numero',FILTER_SANITIZE_NUMBER_INT) ;
    
        if ($n > 0) {

            $d = 0;
            if ($n <= 2) {
                echo $n;
            } else {
                for($i=2; $i<$n; $i++){
                    if($n % $i == 0){
                        $d++;
                    }
                    
                    if(!$d){
                        echo $n;
                        break;
                    } else {
                        echo "não é primo!";}
                        break;
                }
    
            }

        } else {

            echo '0';

        }

    ?>
