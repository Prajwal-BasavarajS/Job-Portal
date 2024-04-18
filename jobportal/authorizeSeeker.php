<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$sid="";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION["sid"])){
    $sid=$_SESSION["sid"];
    
}else{
    header('Location:index.php');
}