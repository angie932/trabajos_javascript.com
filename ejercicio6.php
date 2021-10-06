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
        var valor;
        valor = parseInt(prompt('ingrese un numero: '));
        switch (valor) {
            case 1: document.write('mensaje 1');
                break;
        
            default:
               document.write('debe ingresar un valor valido');
        }
    </script>
</body>
</html>