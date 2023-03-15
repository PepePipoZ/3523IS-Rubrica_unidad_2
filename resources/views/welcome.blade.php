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
        @for ($x=0; $x<count($cosas); $x++)
            <br>
            @for ($y=0; $y<count($cosas[$x]); $y++){
            {{$cosas[$x][$y]}}
            
            }
            @endfor
        @endfor
        <hr>
        </div>
    </header>
</body>
</html>