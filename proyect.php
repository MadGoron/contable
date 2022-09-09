<?php

session_start();
if(isset($_SESSION['usuario'])){
 require 'views/proyect.view.php';

}else{
    header('Location: index.php');
}

?>