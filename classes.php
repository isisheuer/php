<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Pessoa{
            public $nome;
            public $idade;
            function envelhecer($anos){
                if($anos >0){
                    $this->idade+=$anos;
                }
            }
        }

        $pessoa = new Pessoa();
        $pessoa->nome="isis";
        $pessoa->idade=43;

        echo "a idade de " . $pessoa->nome . " é " . $pessoa->idade;

    ?>
</body>
</html>