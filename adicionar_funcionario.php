<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $celular = $_POST["celular"];
    $data = $_POST["data"];
    $endereco = $_POST["endereco"];
    $cep = $_POST["cep"];
    $numero = $_POST["numero"];
    $genero = $_POST["genero"];

    // Caminho absoluto para o arquivo Python
    $pythonScript = __DIR__ . "/adicionar_funcionario.py";

    // Chamar a função Python para adicionar os dados ao arquivo Excel
    exec("python3 adicionar_funcionario.py \"$nome\" \"$celular\" \"$data\" \"$endereco\" \"$cep\" \"$numero\" \"$genero\"");
}
?>
