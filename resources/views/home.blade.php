@php
    
    $titolo = "Benvenuto!";

@endphp



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titolo }}</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/about-us">About-Us</a></li>

                
            </ul>
        </nav>
    </header>
    <main>
        <h1>{{$titolo}}</h1>
    </main>
</body>
</html>

<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

header, main{
    margin: auto;
}


li {
    list-style: none;
}

a {
    text-decoration: none;
}
</style>