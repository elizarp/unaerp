<?

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];

require_once "Conexao.php";

$conexaoAluno = Conexao::getConexao();

$sql = "UPDATE myDB.Alunos SET nome = ?, sobrenome = ?, email = ? WHERE id = ?;";
$command = $conexaoAluno->prepare($sql);
$command->execute([$nome, $sobrenome, $email, $id]);

header('Location: index.php');
exit();

?>