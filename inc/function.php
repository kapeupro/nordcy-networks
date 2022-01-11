<?php

function debug(array $array){
    echo '<pre style="height: 200px; overflow-y: scroll; font-size: .7rem; padding: .6rem; font-family: Consolas,monospace; background: #000000; color: lime;">';
    print_r($array);
    echo '</pre>';
}


function recupInputValue($key)
{
    if(!empty($_POST[$key])) {
        echo $_POST[$key];
    }
}


function cleanXss($key)
{
    return trim(strip_tags($_POST[$key]));
}

function viewError($errors,$key)
{
    if(!empty($errors[$key])) {
        echo $errors[$key];
    }
}

function textValidation($errors,$value,$key,$min = 3,$max = 50)
{
    if(!empty($value)) {
        if(mb_strlen($value) < $min) {
            $errors[$key] = 'Min '.$min.' caractères';
        } elseif (mb_strlen($value) > $max) {
            $errors[$key] = 'Max '.$max.' caractères';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ.';
    }
    return $errors;
}

