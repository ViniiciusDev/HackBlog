<x-main :user="$user">
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column mt-5">
                <h1 class="fs-1 fw-bold">{{ $title }}</h1>
                <p class="fs-4">{{ $desc }}</p>
            </div>
        </div>
    </div>
</x-main>
