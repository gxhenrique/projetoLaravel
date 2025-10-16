<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text-to-Speech Laravel (VoiceRSS)</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow-y: hidden;
            background-color: #d3d3d3;
        }
        .conteiner{
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;

        }

        form{
            height: 100px;
            display: flex;
            flex-flow: column wrap;
            justify-content: space-between;
        }

        form input{
            border-radius: 10px;
            padding: 12px;
            border: 1px solid black;
        }

        form button{
            padding: 7px;
            border-radius: 4px;
            cursor: pointer;
            border: 1px solid #d3d3d3;
        }
        form button:hover{
            background-color: #bebebeff;
        }
    </style>
</head>
<body>

    <div class="conteiner">

        <h2>Gerar Áudio com VoiceRSS</h2>

        <form action="/voz" method="get">
            <label for="voz">Seu texto:</label>
            <input type="text" placeholder="Seu texto aqui" name="voz" id="voz" value="{{ $texto ?? '' }}" required>
            <button type="submit">Produzir voz</button>
        </form>

        @if(!empty($audioUrl))
            <h3>Resultado:</h3>
            <audio controls autoplay>
                <source src="{{ $audioUrl }}" type="audio/mpeg">
                Seu navegador não suporta áudio.
            </audio>
        @endif
            
    </div>

</body>
</html>
