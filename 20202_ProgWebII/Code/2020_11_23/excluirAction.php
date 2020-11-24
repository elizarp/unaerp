<?

$id = $_POST['id'];

require_once "Conexao.php";

$conexaoAluno = Conexao::getConexao();

$sql = "DELETE FROM myDB.Alunos WHERE id = ?;";
$command = $conexaoAluno->prepare($sql);
$command->execute([$id]);

header('Location: index.php');
exit();

?>