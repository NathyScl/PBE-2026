<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>
<body>
    <h1><b>Resumo da Compra</b></h1>
    <table border="1">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preco</th>
                <th>Quantidade</th>
                <th>Subtotal</th>
            </try>
        </thead>
         <body>
            <?php foreach($produtos as $produto): ?>
                <tr>
                    <td><br><?php$produto['nome']?></b></td>
                    <td><br><?php$produto['preco']?></b></td>
                    <td><br><?php$produto['quantidade']?></b></td>
                    <td><br><?php$produto['subtotal']?></b></td>
                </tr>
            <?php endforeach ?>
        </table>
    <br>
    <p><b>Descontos</b> <?= $valorDesconto ?></p>]
    <?php if ($desconto < 0): ?>
        <h2>Parabens voê ganhou um desconto !!!!</h2>
        <?php endif ?>
        <h2>Total da compra <?=$total?></h2>
    </body>