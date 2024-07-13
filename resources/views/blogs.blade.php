<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-center">All Blogs</h3>
    <div class="row justify-content-center">
        <div class="col-6">    
            <form>
                <div class="input-group mb-3 mt-3">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <input type="search" class="form-control" aria-describedby="button-addon2" name="search" id="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>

        {{ $blogs->links() }}

    @if (count($blogs)>0)    
        @foreach ($blogs as $blog)

        <div class="card float-start mb-3 mx-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $blog['title'] }}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $blog->created_at->diffForHumans() }}</h6>
                <p class="card-text">{{ Str::limit($blog['body'], 30) }} <a href="/blogs/{{ $blog['slug'] }}" class="">Read More &raquo;</a></p>
                Author : <a class="card-link" href="/blogs?author={{ $blog->author->username }}">{{ $blog->author->name }}</a>
                Category: <a class="card-link" href="/blogs?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a>
            </div>
        </div>

        @endforeach
    @else
        <h4 class="text-center">No Post Found</h4>
    @endif
    <div class="clearfix"></div>
    
        {{ $blogs->links() }}

</x-layout>