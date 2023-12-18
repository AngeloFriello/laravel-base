@extends('layouts.app')

@section('content')
<section>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Thumb</th>
            <th>Type</th>
            <th>Description</th>
            <th>Series</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($comics as $comic)
              <tr>
                <td><a href="{{route('comics.show', $comics)}}">{{$comic->title}}</a></td>
                <td>{{ $comic->id }}</td>
                <td><img src="{{ $comic->thumb }}" width="40" alt=""></td>
                <td>{{ $comic->type }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->price }}</td>
                <td>
                  <span>edit</span>
                  <span>delete</span>
                </td>
              </tr>
          @empty
              <tr>
                <td colspan="6">
                  Nessun comic trovato
                </td>
              </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </section>
@endsection