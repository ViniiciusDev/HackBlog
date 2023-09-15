<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
</head>

<body>
    <header>
        <x-navbar :auth="$auth" />
    </header>
    <main class="container">
        <div class="row">
            <h1 class="mt-5 fs-1 fw-bold">{{ $title }}</h1>
            <p class="fs-4">{{ $desc }}</p>
        </div>
    </main>

</body>

</html>
