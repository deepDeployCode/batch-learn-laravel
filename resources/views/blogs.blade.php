<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <form>
        <div class="input-group mb-3 mt-3">
            <input type="search" class="form-control" aria-describedby="button-addon2" name="search" id="search">
            <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
        </div>
    </form>

    {{ $blogs->links() }}
    @foreach ($blogs as $blog)

    <div class="card float-start mb-3 mx-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $blog['title'] }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $blog->created_at->diffForHumans() }}</h6>
            <p class="card-text">{{ Str::limit($blog['body'], 30) }} <a href="/blogs/{{ $blog['slug'] }}" class="">Read More &raquo;</a></p>
            Author : <a class="card-link" href="/authors/{{ $blog->author->username }}">{{ $blog->author->name }}</a>
            Category: <a class="card-link" href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a>
        </div>
    </div>

    @endforeach
</x-layout>