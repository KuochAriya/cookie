<?php
$a = ['both', 'keat', 'soknoy', 'kook', 'kkkk'];

$q = $_REQUEST['q'];

$suggestion = "";

if($q!=''){
    $q = strtolower($q);
    $qlen = strlen($q);
    foreach($a as $name){//call each element of array
        if (stristr($q, substr($name, 0, $qlen))){//check if q is the same as the name in the same length if so, return the full name which is true in the condition
        if ($suggestion == ""){
        $suggestion = $name;//let suggestion be the name that meets the condition
        }
        else{
            $suggestion .= ", $name";
        }
        }
    }
    
}
echo $suggestion == ""? "no suggestion": "$suggestion";

?>