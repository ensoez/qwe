<?php

session_start();
$data = json_decode(file_get_contents( '../core/storage/data.json'),1);


if ($_POST['loginForm']) {
    if ($_POST['user'] === 'admin' && $_POST['pass'] === '12345') {
        $_SESSION['user'] = 'ok';
    }
}

if ($_POST['saveForm']) {
    $data['pageTitle'] = $_POST['pageTitle'];
    $data['pageIntroduction'] = $_POST['pageIntroduction'];
    $data['pageDescription'] = $_POST['pageDescription'];
    $data['Name1'] = $_POST['Name1'];
    $data['Name2'] = $_POST['Name2'];
    $data['Name3'] = $_POST['Name3'];
    $data['Name4'] = $_POST['Name4'];
    $data['price1'] = $_POST['price1'];
    $data['price2'] = $_POST['price2'];
    $data['price3'] = $_POST['price3'];
    $data['price4'] = $_POST['price4'];
    $data['sendMail'] = $_POST['sendMail'];
    $data['phoneNumber'] = $_POST['phoneNumber'];
    $data['TitleHistory'] = $_POST['TitleHistory'];
    $data['answer1'] = $_POST['answer1'];
    $data['answer2'] = $_POST['answer2'];
    $data['answer3'] = $_POST['answer3'];
    $data['question1'] = $_POST['question1'];
    $data['question2'] = $_POST['question2'];
    $data['question3'] = $_POST['question3'];
    $data['about_tittle'] = $_POST['about_tittle'];
    $data['seo'] = $_POST['seo'];
    file_put_contents('../core/storage/data.json', json_encode($data, JSON_PRETTY_PRINT));
}

if ($_SESSION['user']) {
    include 'template/data.php';
} else {
    include 'template/login.php';
}


// Это на случай если я забуду:
// Что бы это работало надо вставить <?=$data['pageTitle']?ю> чтобы заменить что-то, и не забыть подключить 
//<?php
//$data = json_decode(file_get_contents( 'core/storage/data.json'),1);
//?ю>