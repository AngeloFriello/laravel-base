@extends('layouts.app')

@section('content')
<section>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Thumb</th>
            <th>Titolo</th>
            <th>Tipo</th>
            <th>Cottura</th>
            <th>Peso</th>
            <th>
              {{-- <a href="{{ route('pastas.create') }}" class="btn btn-sm btn-primary">Nuova pasta </a> --}}
            </th>
          </tr>
        </thead>
        <tbody>
          @forelse ($comics as $comic)
              <tr>
                <td>{{ $comic->id }}</td>
                <td><img src="{{ $comic->thumb }}" width="40" alt=""></td>
                {{-- <td><a href="{{ route('pastas.show',$comic) }}">{{ $comic->title }}</a></td> --}}
                <td>{{ $comic->type }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->series }}</td>
                <td>
                  <span>edit</span>
                  <span>delete</span>
                </td>
              </tr>
          @empty
              <tr>
                <td colspan="6">
                  Nessuna pasta trovata
                </td>
              </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </section>
@endsection