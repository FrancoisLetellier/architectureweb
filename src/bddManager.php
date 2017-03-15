<?php
/**
 * Created by PhpStorm.
 * User: topikana
 * Date: 06/03/17
 * Time: 11:28
 */

function getConnection()
{
    require "../config/credentials.php";
    $mysqli = new mysqli(HOST, USER, PASSWORD, DB);
    if ($mysqli->connect_errno) {
        throw new mysqli_sql_exception("failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
    }
    return $mysqli;
}

/**
 * @param mysqli $mysqli
 * @param $sql
 * @param mixed
 */

function execSql($mysqli, $sql){
    if (!$result = $mysqli->query($sql)){
        throw new mysqli_sql_exception("failed to run query: (" . $mysqli->errno . ") " . $mysqli->error);
    }
    return $result;
}