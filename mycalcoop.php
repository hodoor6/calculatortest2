
<!doctype html>
<html lang="en">
<body>
<form action="" method="get">
    <input name="name" type="text">
    <button type="submit">Посчитать</button>
</form>
<?php

class Calculator

{

    public function calc($data)
    {
        if ($this->correctInput($data)) {

            //вычетание
            $this->Subtraction($data);

            //сумирование
            $this->Sum(($data));

                //умножение
            $this->Multiplication(($data));

                //деление

            $this->Division(($data));


        }
    }

    public function Subtraction($data)
    {
        //вычетание
        if (strpos($data, '-') === false) {
            echo '- не обнаружен ' . '<br>';
        } else {

            $result = explode("-", $data);
            $resultSubtraction = $result[0] - $result[1];
            echo $resultSubtraction . '<br>';
        }
    }

    public function Sum($data)
    {
       //сумирование
         if (strpos($data, '+') === false) {
                echo '+ не обнаружено ' . '<br>';
            } else {
                $result = explode("+", $data);
                $resultSum = $result[0] + $result[1];
                echo $resultSum . '<br>';
            }
}
    public function Multiplication($data)
    {
        //умножение
        if (strpos($data, '*') === false) {
                echo '* не обнаружено ' . '<br>';
            } else {

                $result = explode("*", $data);
                $resultMultiplication = $result[0] * $result[1];
                echo $resultMultiplication . '<br>';
            }
    }

    public function Division($data)
    {

        //деление
        if (strpos($data, '/') === false) {
            echo '/ не обнаружено ' . '<br>';
        } else {

            $result = explode("/", $data);
            $resultDivision = $result[0] / $result[1];
            echo $resultDivision . '<br>';
        }
    }


    private function correctInput($data)
    {
        if (trim($data) or !empty($data)) {
            if (preg_match('#^[\d\s*/+.()_-]+$#si', $data)) {
                return $data;
            } else {
                echo 'Ведите числовые данные букви некорректны для калькулятора';
            }
        } else {
            echo 'Введите данные для подсчета на калькуляторе пример 1+1';
        }

    }

}




$calculator = new Calculator;

$calculator -> calc($data=$_GET['name']);





?>
</body>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
</html>

//Создать class validator
//все класси должни быть инклюдиться
//какие есть interfe и что в них реализовано
// создать клас passser
//какие методи и где
========================


