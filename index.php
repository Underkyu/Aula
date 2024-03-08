<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if(isset($_GET['x']) && isset($_GET['y']) && isset($_GET['operacao'])){
        if($_GET['operacao'] == "soma"){
            echo "{$_GET['x']} + {$_GET['y']} = " . ($_GET['x'] + $_GET['y']);
        }

        else if($_GET['operacao'] == "subtracao"){
            echo "{$_GET['x']} - {$_GET['y']} = " . ($_GET['x'] - $_GET['y']);
        }

        else if($_GET['operacao'] == "multiplicacao"){
            echo "{$_GET['x']} * {$_GET['y']} = " . ($_GET['x'] * $_GET['y']);
        }

        else if($_GET['operacao'] == "divisao"){
            echo "{$_GET['x']} / {$_GET['y']} = " . ($_GET['x'] / $_GET['y']);
        }
        
        else{
            echo "Operecação invalida";
        }
        
    }
    ?>
</body>
</html>