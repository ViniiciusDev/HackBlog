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

    <main>
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column mt-5">
                    <h1 class="fs-1 fw-bold">{{ $title }}</h1>
                    @if ($auth)
                        <h3 class="fs-4 fw-normal">Bentornato {{ $auth['name'] }}</h3>
                    @endif
                </div>
            </div>
        </div>
    </main>
</body>

</html>
