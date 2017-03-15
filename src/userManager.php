<?php
function listUser($conn)
{
    $sql = "SELECT * from profile";
    return execSql ($conn, $sql);
}

function addUser($conn, $firstname, $lastname, $email)
{
    $sql = "INSERT INTO profile (firstname, lastname, email)
            VALUES ('$firstname', '$lastname', '$email');";
    execSql($conn, $sql);
}

function getUser($conn, $id)
{
    $sql = "SELECT * FROM profile WHERE id = " . $id;
    $result = execSql($conn, $sql);
    return mysqli_fetch_assoc($result);
}