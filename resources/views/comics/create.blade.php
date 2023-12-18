@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <form action="{{ route('comics.store') }}" method="POST">

                @csrf

                <div>
                    <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="titolo">
                </div>

                <div>
                    <label for="title" class="form-label">description</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="descrizione">
                </div>

                <div>
                    <label for="title" class="form-label">type</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="tipologia">
                </div>

                <div>
                    <label for="title" class="form-label">series</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="serie">
                </div>

                <div>
                    <label for="title" class="form-label">price</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="prezzo">
                </div>

                <div>
                    <label for="title" class="form-label">thumb</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="immagine">
                </div>

                <div>
                    <input type="submit" class="btn btn-primary my-2">
                </div>

            </form>
        </div>
    </section>
@endsection