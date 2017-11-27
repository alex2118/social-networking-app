@extends('layouts.master')

@section('title')

  Home

@endsection

@section('content')

  <h1>This is the home page</h1>

  <ul>

    @foreach ($posts as $post)

      <li>

        <a href="post/{{$post->post_id}}">

          <h3>{{ $post->title }}</h3>

        </a>

        <p>{{ $post->body }}</p>
        
      </li>

    @endforeach

  </ul>

@endsection
