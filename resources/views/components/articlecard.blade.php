<div class="col-sm-3 my-4 mb-sm-0">
    <div class="card">
        <div class="card-header fw-light">{{ $category }}</div>
        <div class="card-body">
            <h5 class="card-title fs-3 mb-3">{{ $title }}</h5>
            <p class="card-text">{{ $description }}</p>
            <small class="text-black-50">last update 3 mins ago</small>
            <div class="text-start mt-3">
                <a href="{{ route('article', $articleId) }}" class="btn btn-primary">LEGGI</a>
            </div>

        </div>
    </div>
</div>
