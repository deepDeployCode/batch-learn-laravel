<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="">
        <h2 class="">{{ $blog['title'] }}</h2>
        <div class="">
            <a href="/blogs?author={{ $blog->author->username }}">{{ $blog->author->name }}</a> | {{ $blog->created_at }} | <a href="/blogs?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a>
        </div>
        <p class="">{{ $blog['body'] }}</p>
        <a href="/blogs" class="">Back &laquo;</a>
    </article>

</x-layout>