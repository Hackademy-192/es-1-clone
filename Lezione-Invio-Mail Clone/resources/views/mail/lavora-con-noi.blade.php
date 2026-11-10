{{-- Regole di un Mailable
    1 - NON può usare componenti
    2 - NON funziona il bundling o il building degli assett
--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        h1{
            color: red;
        }

        .bold{  
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Mail di Lavora con noi</h1>    
    <p>Un utente ha fatto richiesta di lavorare per noi</p>
    <p><span class="bold">Nome:</span> {{$username}}</p>
    <p><span class="bold">Email:</span> {{$email}}</p>
    <p><span class="bold">Lettera di presentazione:</span> {{$description}}</p>
</body>
</html>