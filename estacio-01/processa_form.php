<?php
/***VALIDAÇÃO DOS DADOS RECEBIDOS DO FORMULÁRIO ***/
if($_REQUEST['user_name'] == ""){
	echo "O campo Nome não pode ficar vazio.";
	exit;
}

if(strlen($_REQUEST['cpf_number']) != 11){
	echo "O campo CPF precisa ter 11 caracteres.";
	exit;
}

if(!stripos($_REQUEST['email_account'], "@") || !stripos($_REQUEST['email_account'],".")){
	echo "O campo E-mail não é válido.";
	exit;
}

if($_REQUEST['data_nasc'] == ""){
	echo "O campo Data de Nascimento não pode ficar vazio.";
	exit;
}
/***FIM DA VALIDAÇÃO DOS DADOS RECEBIDOS DO FORMULÁRIO ***/


/***CONEXÃO COM O BD ***/
//Constantes para armazenamento das variáveis de conexão.
define('HOST', '192.168.52.128');
define('PORT', '5432');
define('DBNAME', 'job_estacio');
define('USER', 'postgres');
define('PASSWORD', 'fake123');

try {
	$dsn = new PDO("pgsql:host=". HOST . ";port=".PORT.";dbname=" . DBNAME .";user=" . USER . ";password=" . PASSWORD);
} catch (PDOException $e) {
	echo 'A conexão falhou e retorno a seguinte mensagem de erro: ' .$e->getMessage();
}
/*** FIM DOS CÓDIGOS DE CONEXÃO COM O BD ***/


/***PREPARAÇÃO E INSERÇÃO NO BANCO DE DADOS ***/
$stmt = $dsn->prepare("INSERT INTO 
							cliente(user_name, cpf_number, email_account, data_nasc)
							VALUES (?, ?, ?, ?)
						");

$resultSet = $stmt->execute([$_REQUEST['user_name'], $_REQUEST['cpf_number'], $_REQUEST['email_account'], $_REQUEST['data_nasc']]);

if($resultSet){
	echo "Os dados foram inseridos com sucesso.";
}else{
	echo "Ocorreu um erro e não foi possível inserir os dados.";
}

//Destruindo o objecto statement e fechando a conexão
$stmt = null;
$dsn = null;