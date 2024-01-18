<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Console</title>
    <style>
        a {
        text-decoration: none;
        color: white;
        }
    </style>

</head>
<body style="margin:0; background-color: black; font-family:Arial, Helvetica, sans-serif; padding:1%;">

    <div style="text-align: center;">
        <h3 style="font-size: 200%; color: white;">G4MES COMPANY</h3>      
    </div>
    <div style="background-color: white;width:100%; padding:0.5%">
        <div style="margin-left: 30%">
            <a style="margin:2%;color:black" href="{{ route('game.index') }}">Inicio</a>
            <a style="margin:2%;color:black" href="{{ route('game.create') }}">Cadastrar Jogos</a>
            <a style="margin:2%;color:black" href="{{ route('game.console') }}">Consoles</a>
            <a style="margin:2%;color:black" href="">Promoções</a>
            <a style="margin:2%;color:black" href="">Lançamentos</a>
        </div>
    </div>
    <br><br>
    <div>
        <div>
            <img style="max-width:15%;" src="/images/ps1.webp" alt="ps1">
            <br>
            <a href="">Playstation 1</a>
        </div>
        <br><br><br>
        <div>
            <img style="max-width:15%;"src="/images/ps2.webp" alt="ps2">
            <br>
            <a href="">Playstation 2</a>
        </div>
        <br><br><br>
        <div>
            <img style="max-width:15%;"src="/images/ps3.jpg" alt="ps3">
            <br>
            <a href="">Playstation 3</a>
        </div>
        <br><br><br>
        <div>
            <img style="max-width:15%;"src="/images/ps4.webp" alt="ps4">
            <br>
            <a href="">Playstation 4</a>
        </div>
        <br><br><br>
        <div>
            <img style="max-width:15%;"src="/images/ps5.jpg" alt="ps5">
            <br>
            <a href="">Playstation 5</a>
        </div>
    </div>
</body>
</html>