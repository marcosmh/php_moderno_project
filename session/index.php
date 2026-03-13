<?php
session_start();

$_SESSION['name'] = 'Anakin';

if(isset($_SESSION['name'])) {
    echo 'Hola '.$_SESSION['name'];
}