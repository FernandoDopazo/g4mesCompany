<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cadastro de Jogos</title>

</head>

<body style="margin:0; background-color: black; font-family:Arial, Helvetica, sans-serif; padding:1%">
    <form method="post" action="{{route('game.store')}}">
        @csrf
        @method('post')

        <div style="text-align: center;">
            <h3 style="font-size: 200%; color: white">G4MES COMPANY</h3>   
        </div>

        <div style="border:2px solid black; padding: 10px; background-color:darkgrey; margin-top:5%">

            <div style="border:1px solid black; padding: 5px; background-color:aliceblue">
                <label style="font-size: 150%; margin-left:45%">Nome do Jogo</label>
                <input style="width: 95%; border:2px solid black; padding:8px" type:"text" name="newgame" placeholder="Digite o nome do Jogo">
            </div>

            <br>

            <div  style="border:1px solid black; padding: 5px; background-color:aliceblue">
                <label style="font-size: 150%; margin-left:45%">Gênero</label>
                <input style="width: 95%; border:2px solid black; padding:8px" type="string" name="gender" placeholder="Digite o Gênero do Jogo">
            </div>

            <br>

            <div  style="border:1px solid black; padding: 5px; background-color:aliceblue">
                <label style="font-size: 150%; margin-left:45%">Ano de Lançamento</label>
                <input style="width: 95%; border:2px solid black; padding:8px" type="date" name="year" placeholder="Digite o Ano de Lançamento">
            </div>

            <br>

            <div  style="border:1px solid black; padding: 5px; background-color:aliceblue">
                <label style="font-size: 150%; margin-left:45%">Preço</label>
                <input style="width: 95%; border:2px solid black; padding:8px; " type="decimal" name="price" placeholder="Digite o preço do Jogo">
            </div>
            <br>
            <div>
                <button type="post">Salvar Jogo</button>
            </div>
        </div>
    </form>
</body>
</html>