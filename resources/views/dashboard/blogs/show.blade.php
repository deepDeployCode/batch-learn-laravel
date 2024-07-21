<x-dash-ui-layout>
<x-slot:title>{{ $title }}</x-slot:title>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <article class="">
        <h2 class="">{{ $blog['title'] }}</h2>
        <div class="">
            <a href="/dashboard/blogs" class="badge bg-info" style="text-decoration: none">Back</a>
            <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="badge bg-success" style="text-decoration: none">Edit</a>
            <form action="/dashboard/blogs/{{ $blog->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')">delete</button>
            </form>
        </div>
        <p class="">{{ $blog['body'] }}</p>
    </article>
    </main>
</x-dash-ui-layout>