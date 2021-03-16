<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #resultat {
            border: 1px solid black;
            width: 210px;
            height: 50px;
            margin-top: 10px;
            background-color: gray;
        }
    </style>
</head>

<body>
    <p><strong>Ecrivez la fonction calculator() traitant les opérations d'addition, de soustraction, de multiplication et de division.</strong></p><br><br>
    <form action="#" name="calculator" method="get">
        <input type="number" name="num1" placeholder="Numéro 1" required>
        <select name="operator" id="operator" required>
            <option value="" name=></option>
            <option value="+" name="addition">+</option>
            <option value="-" name="soustraction">-</option>
            <option value="*" name="multiplication">*</option>
            <option value="/" name="division">/</option>
        </select><br>
        <input type="number" name="num2" placeholder="Numéro 2" required>
        <button type="submit" value="submit" name="submit">=</button>
    </form>
    <div id="resultat">
        <?php
        function calculator()
        {
            if (isset($_GET['submit'])) {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];
                $operator = $_GET['operator'];
                switch ($operator) {
                    case "+":
                        echo $resultat = $num1 + $num2;
                        break;

                    case "-":
                        echo $resultat = $num1 - $num2;
                        break;
                    case "*":
                        echo $resultat = $num1 * $num2;
                        break;
                    case "/":
                        echo $resultat = $num1 / $num2;
                        break;
                }
            }
        }
        calculator();
        ?>
    </div>
</body>

</html>