<x-main :user="$user">
    <x-slot:title>{{ $article['title'] }}</x-slot:title>
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
</x-main>
