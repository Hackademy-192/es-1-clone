<!DOCTYPE html>
<html>

<head>
    <title>Conferma Prenotazione</title>
</head>

<body style="font-family: Arial, sans-serif; color: #333;">
    <h2>Nuova richiesta di prenotazione ricevuta!</h2>
    <p><strong>Nome:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <hr>
    <h3>Dettagli del Viaggio Scelto:</h3>
    <p><strong>Destinazione:</strong> {{ $travel['destination'] }}</p>
    <p><strong>Durata:</strong> {{ $travel['duration'] }}</p>
    <p><strong>Prezzo:</strong> €{{ $travel['price'] }}</p>
</body>

</html>
