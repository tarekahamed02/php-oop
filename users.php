<?php

function getUsers()
{
    $users = json_decode(file_get_contents(__DIR__ . '/users.json'), true);
    echo '<pre>';
    var_dump($users);
    echo '</pre>';
    exit;
}

function getUserById($id)
{
}

function createUser($data)
{
}

function updateUser($data, $id)
{
}

function deleteUser($id)
{
}
