<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">

        body {
            margin: 1rem;
            padding: 0;
        }

        .error {
            border-radius: 10px;
            background-color: red;
            padding: .1rem;
            margin-top: .2rem; 
            margin-bottom: .2rem; 
            font-weight: bold;
        }

        .sucess {
            border-radius: 10px;
            background-color: green;
            padding: .1rem;
            margin-top: .2rem; 
            margin-bottom: .2rem; 
            font-weight: bold;
        }        
    </style>
</head>
<body>
    <?php
        require_once("conta-corrente.php");

        $cc = new ContaCorrente("0001", "12459", "Fernando");
        echo var_dump($cc), "<br>";

        try {
            $msg = $cc->depositar(-100);
    ?>
        <div class="sucess">
            <p><?php echo $msg; ?></p>
        </div>
    <?php
        } catch (Exception $e) {
    ?>
        <div class="error">
            <p><?php echo $e->getMessage(); ?></p>
        </div>
    <?php
        }

        try {
            $msg = $cc->depositar(100);
    ?>
            <div class="sucess">
                <p><?php echo $msg; ?></p>
            </div>
    <?php            
        } catch (Exception $e) {
    ?>
        <div class="error">
            <p><?php echo $e->getMessage(); ?></p>
        </div>
    <?php
        }        

        try {
            echo $cc->sacar(-150), "<br>";
        } catch (Exception $e) {
    ?>
        <div class="error">
            <p><?php echo $e->getMessage(); ?></p>
        </div>
    <?php
        }            

        try {
            echo $cc->sacar(150), "<br>";
        } catch (Exception $e) {
    ?>
        <div class="error">
            <p><?php echo $e->getMessage(); ?></p>
        </div>
    <?php
        }

        try {
            echo $cc->sacar(25), "<br>";
        } catch (Exception $e) {
    ?>
        <div class="error">
            <p><?php echo $e->getMessage(); ?></p>
        </div>
    <?php
        }

        echo var_dump($cc), "<br>";

        echo "<hr>";

        require_once("conta-poupanca.php");

        $cp = new ContaPoupanca("0001", "98745", "Larissa");
        echo var_dump($cp), "<br>";

        try {
            echo $cp->depositar(100), "<br>";
        } catch (Exception $e) {
    ?>
        <div class="error">
            <p><?php echo $e->getMessage(); ?></p>
        </div>
    <?php
        }

        echo var_dump($cp), "<br>";

    ?>
</body>
</html>