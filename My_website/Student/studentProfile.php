<?php
if(!isset($_SESSION)){
    session_start();
}

include('/stuInclude/header.php');
include_once('../DBconnection.php');