<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>vue-email-list</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <header class="bg-dark p-3">
        <nav class="d-flex justify-content-end">
            <ul class="p-1 m-0">
                <li>
                    <a href="/">Back to home</a>
                </li>
            </ul>
        </nav>

    </header>

    <main class="container">
        <h1 class="text-success text-center p-5">
            Contatti: {{ $name }} {{ $surname }}
        </h1>

        <div class="row justify-content-center">
            <div class="col-6 bg-success rounded-3 p-3">
                <ul class="text-center list-unstyled">
                    @foreach ($ContattiLucio as $elcontLucio)
                        <li>
                            <h3 class="m-0">{{ $elcontLucio }}</h3>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>

</body>

</html>
