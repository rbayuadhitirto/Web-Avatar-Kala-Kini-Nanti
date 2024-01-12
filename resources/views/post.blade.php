@extends('layouts.main')

@section('container')
<article>
  <h2>{{ $post->title }}</h2>
  <h3>{{ $post->slug }}</h3>
  <h5>{{ $post->author }}</h5>
  <p>{{ $post->body }}</p>
</article>


<a href="/blog">Back</a>


@endsection