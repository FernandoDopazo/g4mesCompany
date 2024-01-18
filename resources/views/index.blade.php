<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>
</head>
<style>
    div {
        box-sizing: border-box;
        padding:0;
    }
    a {
        text-decoration: none;
        color: black;
    }
</style>
<body style="margin:0; background-color: black; font-family:Arial, Helvetica, sans-serif">

    <div style="text-align: center;">
        <h3 style="font-size: 200%; color: white">G4MES COMPANY</h3>   
    </div>
    <div style="background-color: white;width:100%; padding:0.5%">
        <div style="margin-left: 30%">
            <a style="margin:2%;" href="{{ route('game.index') }}">Inicio</a>
            <a style="margin:2%;" href="{{ route('game.create') }}">Cadastrar Jogos</a>
            <a style="margin:2%;" href="{{ route('game.console') }}">Consoles</a>
            <a style="margin:2%;" href="">Promoções</a>
            <a style="margin:2%;" href="">Lançamentos</a>
        </div>
    </div>
    <br><br>
    <div style="display:flex;justify-content:center;align-items:center;" >
        <img style="max-width: 40%;" src="/images/controleimg.jpg" alt="controle">
    </div>
</body>
</html>