<x-main :user="$user">
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column mt-5">
                <h1 class="fs-1 fw-bold">{{ $title }}</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($articles as $id => $article)
                <x-articles :title="$article['title']" :category="$article['category']" :description="$article['description']" :articleId="$id" />
            @endforeach
        </div>
    </div>
</x-main>
