<?php
echo 'Simple Break';
for ($i=1; $i <= 2 ; $i++) { 
    echo"\n".'$i='.$i.' ';
    for ($j=0; $j <= 5 ; $j++) { 
        if ($j == 2) {
           break;
        }
        echo '$j = '. $j. ' ';
    }
}