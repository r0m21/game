<?php

require_once('model/Parcours.php');
require_once('model/Security.php');

function getAllParcours()
{
    $object = new \SeriousGame\Model\Parcours();
    $parcours = $object->getAllParcours();

    return $parcours;
}
function compareLatLong()
{
    
}
function login()
{
    $result = new \SeriousGame\Model\Security();
    $login = $result->login();

    return $login;
}
function register()
{
    $result = new \SeriousGame\Model\Security();
    $register = $result->register();

    return $register;
}
function disconnect()
{
    $result = new \SeriousGame\Model\Security();
    $disconnect = $result->disconnect();
}