<ul>
    @foreach ($posts as $post)
    <li>
        <a href="{{ route('posts.edit', $post) }}">
            {{ $post->name }}
        </a>
        <br>
        <img width="60" src="{{ asset('storage/'.$post->image) }}" alt="">
    </li>        
    @endforeach
</ul>

<a href="{{ route('posts.create') }}">Add post</a>