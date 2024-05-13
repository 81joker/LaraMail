<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webappfix</title>
</head>

<body>
    Danke<h2 class="text-red-400">{{ $mailData['name'] }}</h2> für deine Nachricht
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['message'] }}</p>


    <p>Thank You.</p>

</body>

</html>