<!DOCTYPE html>
<html>
    <head>
        <title>oooh my</title>
    </head>
    <body>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
                <input type="number" name="num01" placeholder="Number one" required>
                <select name="operator" >
                    <option value="add">-</option>
                    <option value="subtract">+</option>
                    <option value="multiply">*</option>
                    <option value="divide">/</option>
                </select>
                <input type="number" name="num02"placeholder="Number two" required>
                <button>calculate</button>
        </form> 
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $num01 = filter_input(INPUT_POST,"numb01",FILTER_SANITIZE_NUMBER_FLOAT);
            ($_SERVER["REQUEST_METHOD"] == "POST")
             $num02 = filter_input(INPUT_POST,"num02",FILTER_SANITIZE_NUMBER_FLOAT);
              ($operator = htmlspecialchars($_POST["operator"]))
            }
        ?>
    </body>
</html>
