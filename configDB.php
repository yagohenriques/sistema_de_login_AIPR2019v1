<?php
//configDB.php

//Dados para escolha do DataBase (DB)
$dbhost = "localhost";
$dbuser = "root"; //Usuário Raíz (Rute)
$dbpass = "";
$dbname = "sistemaDeLogin";

//Conexão com o banco de dados
$conecta = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conecta->connect_error){
    die("Não foi possível conectar ao Banco de Dados: " . $conecta->connect_error);
}else{
<<<<<<< HEAD
   // echo "<h1>Conectou no BD Manowwwww!</h1>";
}
=======
    //echo "<h1>Conectou no BD Manowwwww!</h1>";
}
>>>>>>> f35d78c02b89b498d6fb61c1e06730f624ed80d8
