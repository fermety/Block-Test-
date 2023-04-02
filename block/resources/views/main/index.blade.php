@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="page-title">Блог</h1>
        <section class="blog-section">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4 fetured-post blog-post">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                    </div>
                    <p class="blog-post-category">{{ $post->category->title }}</p>
                    <a href="#!" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                    </a>
                </div>
                @endforeach
                <div class="pag">
                    {{ $posts->links() }}
                </div>
            </div>
        </section>
    </div>
</main>

@endsection
