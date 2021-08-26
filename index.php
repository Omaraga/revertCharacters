<?php
function revertCharacters($string){
    $words = explode(" ", $string);
    $last_str = "";


    for($j = 0; $j < sizeof($words); $j++){
        $str = $words[$j];
        $r = strlen($str) - 1;
        $l = 0;

        while ($l < $r)
        {
            if ( !ctype_alpha($str[$l])){
                $l++;
            } else if(!ctype_alpha($str[$r])){
                $r--;
            } else {

                $temp = $str[$l];
                if(ctype_upper($temp)){
                    $str[$r] = strtoupper($str[$r]);
                    $temp = strtolower($temp);
                }

                $str[$l] = $str[$r];
                $str[$r] = $temp;

                $l++;
                $r--;
            }
        }
        $last_str = $last_str.$str." ";
    }


    return $last_str;
}
?>
<p> Hi! Long time no see.      :      <?=revertCharacters("Hi! Long time no see.");?></p>
