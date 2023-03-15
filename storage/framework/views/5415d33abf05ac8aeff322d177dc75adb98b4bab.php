<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div>
        <?php for($x=0; $x<count($cosas); $x++): ?>
            <br>
            <?php for($y=0; $y<count($cosas[$x]); $y++): ?>{
            <?php echo e($cosas[$x][$y]); ?>

            
            }
            <?php endfor; ?>
        <?php endfor; ?>
        <hr>
        </div>
    </header>
</body>
</html><?php /**PATH C:\xampp\htdocs\ejemplo_siu\resources\views/welcome.blade.php ENDPATH**/ ?>