<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hola Ingresa dos números </h1>
    <p>Selecciona el símbolo de la operación que deseas realizar</p>
    <form method="get" action="calculadora.php">
        <input type="text" name="operando1">
        <select name="operador">
         <option value="+">+</option> 
         <option value="-">-</option>
         <option value="*">*</option>
         <option value="/">/</option>
        </select>
        <input type="text" name="operando2">
        <input type="submit" value="enviar">
       </form>
</body>
</html>