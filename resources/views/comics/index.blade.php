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
                <td><a href="{{route('comics.show', $comic)}}">{{$comic->title}}</a></td>
                <td>{{ $comic->id }}</td>
                <td><img src="{{ $comic->thumb }}" width="40" alt=""></td>
                <td>{{ $comic->type }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->price }}</td>
                <td>
                <span><a href="{{route('comics.edit', $comic)}}" class="btn btn-secondary">Edit</a></span>
                <span>
                    <form action="{{route('comics.destroy', $comic)}}" method="POST">

                        @csrf

                        @method('DELETE')

                        <input type="submit" value="Cancella" class="btn btn-primary">

                    </form>
                </span>
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