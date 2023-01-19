<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>vue-email-list</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>

<body>
<header class="">

</header>

    <main>
        <h1 class="text-success text-center p-5">
            Benvenuto: {{ $name }} {{ $surname }}
        </h1>

        <ul class="text-center list-unstyled">
            @foreach ($listaSpesa as $elListaSpesa)
                <li>
                    <h3>{{ $elListaSpesa }}</h3>
                </li>
            @endforeach
        </ul>

    </main>

</body>

</html>
