<form action="#" method="post">
    Type a word : <input type="text" name="1">
    Type a number : <input type="number" name="2" style="width: 50px;">
    <input type="submit" value="Find anagrams">
</form>
<?php
/**
 * @Author: Romain
 * @Date:   2017-02-07 15:17:33
 * @Last Modified by:   romain.piveteau@epitech.eu
 * @Last Modified time: 2017-02-15 21:19:12
 */
function letterCheck($w) {
    if ( ( $w[2] === '' || $w[2] > 0 ) && $w[1] !== '' ) {
        $w[2] = ( $w[2] === '' ) ? 0 : $w[2];
        $a = [];
        $z = 0;
        $handle = fopen("anagram-master-dictionnaire.txt", "r");
        while($v = fgets($handle)) {
            if ( strlen($v) - 1 === strlen($w[1]) - $w[2] ) {
                $res = $v;
                $tmpW = $w[1];
                $m = 0;
                for ($i = 0; $i < strlen($v); $i++) { 
                    for ($j = 0; $j < strlen($tmpW); $j++) { 
                        if ( $tmpW[$j] === $v[$i] && $v[$i] = TRUE && $tmpW[$j] = FALSE ) $m++; 
                    }
                }
                if ( $m === strlen($res) -1 && $res !== $w[1]."\n" && $res !== $w[1] ) $a[] = $res; 
            }
        }
        fclose($handle);
        $a[' ' . count($a) . ' results founds in '] = round(microtime(), 2) . 'seconds';
    }
    return ( isset($a) ) ? ($a) : "\n\tError : Not enough or invalid arguments.\n";
}
echo '<pre>', print_r(letterCheck($_POST)), '<pre>';