<?php

session_start();

$_SESSION['name'] = 'Jessica';


require ('views/home.view.php');