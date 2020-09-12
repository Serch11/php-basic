<?php 

 require_once('ClassUsuario.php');


 $usuario1 = new Usuario('Sergio Andres','sredondo95@gmai.com','Administrador');

 echo $usuario1->getPerfil();


 ?>