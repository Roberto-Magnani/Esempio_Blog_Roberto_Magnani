<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Template</title>
</head>
<body>
    <h1>Hai un nuovo messaggio</h1>
    <p>Name: {{$contact_mail['name']}}</p>
    <p>Email: {{$contact_mail['email']}}</p>
    <p>Messaggio: {{$contact_mail['description']}}</p>
</body>
</html>