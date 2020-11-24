<?

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];

require_once "Conexao.php";

$conexaoAluno = Conexao::getConexao();

$sql = "INSERT INTO myDB.Alunos (nome, sobrenome, email, data_cadastro)  VALUES(?, ?, ?, current_timestamp());";
#$sql = "INSERT INTO Alunos (nome, sobrenome, email, data_cadastro)  VALUES(?, ?, ?, now());";
$command = $conexaoAluno->prepare($sql);
$command->execute([$nome, $sobrenome, $email]);

header('Location: index.php');
exit();

?>