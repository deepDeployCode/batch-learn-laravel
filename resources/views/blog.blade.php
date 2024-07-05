<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="">
        <h2 class="">{{ $blog['title'] }}</h2>
        <div class="">
            <a href="#">{{ $blog['author'] }}</a> | 1 Jan 2024
        </div>
        <p class="">{{ $blog['body'] }}</p>
        <a href="/blogs" class="">Back &laquo;</a>
    </article>

</x-layout>