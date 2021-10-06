<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        var numero1, numero2;
        numero1 = prompt('ingrese el numero 1 ');
        numero2 = prompt('ingrese el numero 2');
        num1 = parseInt(numero1);
        num2 = parseInt(numero2);
        if(num1 > num2){
            document.write('el mayor es ' + num1);
        }else {
            document.write('el mayor es ' + num2);
        }
    </script>
</body>
</html>