@extends('layouts.main')

@section('container')

<h1 class="mb-5">Post Cate gory</h1>
@foreach ($posts as $blog)
<article class="mb-5">
  <h2>
    <a href="/posts/{{ $blog->id }} "> {{ $blog->title }}</a>
  </h2>
  <h5>By: {{ $blog->author }}</h5>
  <p>{{ $blog->body }}</p>
</article>

@endforeach

@endsection