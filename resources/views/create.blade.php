<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cadastro de Jogos</title>

</head>

<body style="margin:0; background-color: black; font-family:Arial, Helvetica, sans-serif; padding:5%;">
    <form method="post" action="{{route('game.store')}}">
        @csrf
        @method('post')

        <div style="text-align: center;">
            <h3 style="font-size: 200%; color: white">G4MES COMPANY</h3>   
        </div>

        <div style="border:2px solid black; padding: 10px; background-color:darkgrey; margin-top:5%; border-radius:10px">

            <div style="padding: 5px; background-color:black; border-radius:10px">
                <label style="font-size: 150%; margin-left:45%;color:white">Nome do Jogo</label>
                <input style="width: 95%; border:2px solid black; padding:8px;border-radius:10px;" type:"text" name="newgame" placeholder="Digite o nome do Jogo">
            </div>

            <br>

            <div  style=" padding: 5px; background-color:black;border-radius:10px">
                <label style="font-size: 150%; margin-left:45%;color:white">Gênero</label>
                <input style="width: 95%; border:2px solid black; padding:8px;border-radius:10px;" type="string" name="gender" placeholder="Digite o Gênero do Jogo">
            </div>

            <br>

            <div  style="padding: 5px; background-color:black;border-radius:10px">
                <label style="font-size: 150%; margin-left:45%;color:white">Ano de Lançamento</label>
                <input style="width: 95%; border:2px solid black; padding:8px;border-radius:10px;" type="date" name="year" placeholder="Digite o Ano de Lançamento">
            </div>

            <br>

            <div  style="padding: 5px; background-color:black;border-radius:10px">
                <label style="font-size: 150%; margin-left:45%;color:white">Preço</label>
                <input style="width: 95%; border:2px solid black; padding:8px;border-radius:10px;" type="decimal" name="price" placeholder="Digite o preço do Jogo">
            </div>
            <br>
            <div>
                <button style="border-radius:10px;" type="post">Salvar Jogo</button>
            </div>
        </div>
    </form>
</body>
</html>