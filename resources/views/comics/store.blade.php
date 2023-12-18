@extends('layouts.app')

@section('content')

  <section class="py-5">
    <div class="container">
      <h1>{{ $comic->title }}</h1>
      <p>
        {{ $comic->description }}
      </p>
    </div>
  </section>

@endsection
