@extends('layouts.main')

@section('container')

@foreach ($posts as $blog)
<article class="mb-5 border bottom pb-4">
  <h2>
    <a href="/posts/{{ $blog->id }} " class="text-decoration-none"> {{ $blog->title }}</a>
  </h2>
  <h5>By: {{ $blog->author }}</h5>
  <p>{{ $blog->body }}</p>

  <a href="/posts/{{ $blog->id }}" class="text-decoration-none">Read More ...</a>
</article>

@endforeach

@endsection