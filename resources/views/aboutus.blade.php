<x-main :user="$user">
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
        <div class="row">
            <h1 class="mt-5 fs-1 fw-bold">{{ $title }}</h1>
            <p class="fs-4">{{ $desc }}</p>
        </div>
    </div>
</x-main>
