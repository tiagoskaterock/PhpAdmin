<?php

/* 
	Este arquivo contém as credenciais de conexão com o banco de dados
	Muda de acordo com o banco que deseja utilizar
	Use a variável $no_ar = true para colocar o projeto em produção
	Use $no_ar = false para utilizar em localhost
*/

$no_ar = false;

// localhost
if (!$no_ar) {
	$connection = mysqli_connect('localhost', 'tiago', '123', 'cms');
	// echo 'Localhost';
}
// em produção
else{
	// echo 'no ar';
	// coloque as credenciais do banco de dados de produção aqui
	// $connection = mysqli_connect('localhost', 'tiago', '123', 'cms');	
}

if ($connection) {
	// echo 'We are connected';
}