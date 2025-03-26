<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagen de Funcionários</title>
</head>
<body>
    <h1>Listagem de funcionarios</h1>
    <a href="formulario-funcionario"><button>Adicionar</button></a>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Setor</th>
                <th>Opções</th>
            </tr>
        </thead>
    <?php foreach($funcionarios as $funcionario) { ?>
        <tr>
        <td><?= $funcionario['nome'] ?></td>
        <td><?= $funcionario['email'] ?></td>
        <td><?= $funcionario['cargo'] ?></td>
        <td><?= $funcionario['setor'] ?></td>
        <td>
            <button>Editar</button>
            <button>Apagar</button>
        </td>

        </tr>
    <?php } ?>    

</body>
</html>