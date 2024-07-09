<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($blogs as $blog)

    <article class="">
        <h2 class="">{{ $blog['title'] }}</h2>
        <div class="">
            <a href="#">{{ $blog['author'] }}</a> | {{ $blog->created_at->diffForHumans() }}
        </div>
        <p class="">{{ Str::limit($blog['body'], 150) }}</p>
        <a href="/blogs/{{ $blog['slug'] }}" class="">Read More &raquo;</a>
    </article>

    @endforeach
</x-layout>