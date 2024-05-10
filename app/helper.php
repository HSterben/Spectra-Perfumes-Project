<?php

function getUser(){
    $user = new \app\models\User();
    return $user->getById($_SESSION['user_id']);
}