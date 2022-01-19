<?php

function debug(array $tableau)
{
    echo '<pre style="height:200px;overflow-y: scroll;font-size: .7rem;padding: .6rem;background-color: black;color: lime">';
    print_r($tableau);
    echo '</pre>';
}


function recupInputValue($key){
    if (!empty($_POST[$key])) {
        echo $_POST[$key];
    }
}


function cleanXss($key){
    return trim(strip_tags($_POST[$key]));
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
            $errors[$key] = 'Veuillez renseigner un email valide';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner un email';
    }
    return $errors;
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function getUserById($id){
    global $pdo;
    $sql="SELECT * FROM nordcynetwork_user WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query ->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

function requestVerifLogin($email){
    global $pdo;
    $sql = "SELECT * FROM nordcynetwork_user WHERE email = :email";
    $query = $pdo->prepare($sql);
    $query->bindValue(':email',$email,PDO::PARAM_STR);
    $query->execute();
    return $query->fetch();
}

function isLogged()
{
    if(!empty($_SESSION['user'])) {
        if (!empty($_SESSION['user']['id'])) {
            if (!empty($_SESSION['user']['email'])) {
                                if (!empty($_SESSION['user']['status'])) {
                                    if (!empty($_SESSION['user']['ip'])) {
                                        if ($_SESSION['user']['ip'] == $_SERVER['REMOTE_ADDR']) {
                                            return true;
                                        }
                                    }
                                }
                            }
                        }
                    }
    return false;
}
