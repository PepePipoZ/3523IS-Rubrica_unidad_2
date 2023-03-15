<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route ('hmmm')); ?>" method="GET">
        <input type="text" name="nombre" placeholder=" NOMBRE "><br>
        <input type="text" name="edad" placeholder=" EDAD "><br>
        <input type="email" name="correo" placeholder=" CORREO "><br>
        <input type="submit">
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ejemplo_siu\resources\views/formulario.blade.php ENDPATH**/ ?>