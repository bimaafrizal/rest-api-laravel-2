<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Selamat datang di contoh redirect</h1>
    <p>{{ $contohData }}</p>

    <h3>Contoh array</h3>
    @foreach ($contohArrays as $array)
        <p>{{ $array }}</p>
    @endforeach
    <h3>Contoh Object</h3>
    @foreach ($contoObjecks as $obj)
        <p>{{ $obj->name }}</p>
    @endforeach
</body>

</html>
