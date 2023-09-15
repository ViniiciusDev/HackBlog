<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>{{ $title ?? '' }}</title>
</head>

<body>
    <header>
        <x-navbar :auth="$auth" />
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="mt-5 d-flex justify-content-end">
                    <a href="{{ route('articles') }}" class="btn btn-outline-primary">Indietro</a>
                </div>
                <div class="d-flex flex-column mt-3">
                    <h5 class="fs-6 fw-light mb-3">{{ $article['category'] }}</h5>
                    <h1 class="fs-1 fw-bold">{{ $article['title'] }}</h1>
                    <p class="fw-normal fs-4">{{ $article['description'] }}</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
