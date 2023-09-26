<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD produtos</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th style="margin-left: 5px;">ID</th>
                <th style="margin-left: 5px;">NOME PRODUTO</th>
                <th style="margin-left: 5px;">PRECO</th>
            
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($lista_produtos as $produto){
            
            ?>
            <tr>
                <td style="text-align: center;"><?php echo $produto->get_id();?></td>
                <td style="text-align: center;"><?php echo $produto->get_nome();?></td>
                <td style="text-align: center;"><?php echo $produto->get_preco();?></td>
               
            </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>