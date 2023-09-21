<x-main :user="$user">
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column mt-5">
                <h1 class="fs-1 fw-bold">{{ $title }}</h1>
                @if ($user)
                    <h3 class="fs-4 fw-normal">Bentornato {{ $user['name'] }}</h3>
                @endif
            </div>
        </div>
    </div>
</x-main>
