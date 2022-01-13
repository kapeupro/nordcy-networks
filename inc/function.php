<?php

function debug(array $tableau)
{
    echo '<pre style="height:200px;overflow-y: scroll;font-size: .7rem;padding: .6rem;background-color: black;color: lime">';
    print_r($tableau);
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

function emailValidation($errors,$email,$key)
{
    if(!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[$key] = 'Veuillez renseigner un email valid';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner un email';
    }
    return $errors;
}

function samePassword($error, $password1, $password2, $key){
    if ($password1 === $password2){
        return $password1;
    }else {
        $error[$key] = 'Mot de passe différent';
    }
    return $error;
}
