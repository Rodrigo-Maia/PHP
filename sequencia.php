<?php
$seq = [3, 6, 5, 8, 10, 20, 15];
$countSeq = count($seq);
$newArray = [];
$exclui = 0;
$j=0;

for ($i=0; $i < $countSeq ; $i++) { 
    $ii = $i -1;

    if (array_key_exists($ii,$seq)) {
        if ($seq[$ii] < $seq[$i]){
            $newArray[$j] = $seq[$i];
            $j++;
        } else {
            if ($exclui == 0) {
                unset($seq[$ii]);
                $exclui = 1;
            } else {
                echo "Falseeeeeeeeeeee".'<br>';
                break;
            }
        }
    } else {
        $newArray[$j] = $seq[$i];
        $j++;
    }
}
