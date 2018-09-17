<?php
/**
 * Created by PhpStorm.
 * User: mrkoj
 * Date: 9/09/2018
 * Time: 7:48 PM
 */

$username = 'root';
$dsn = 'mysql:host=localhost; dbname=register';
$password = '';



try{
    //create an instance of the PDO class with the required parameters
    $db = new PDO( $dsn, $username, $password);

    //set pdo error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //display success message
    //echo "Connect to the database";
}catch(PDOException $ex){
    //display error message
    echo "Connection was unsuccessful ".$ex->getMessage();
}
