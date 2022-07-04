@extends('layout.main')

@section('content')

<div class="container d-flex sc-container flex-column">
    <h1 class="mt-5 mb-3">Modifica Fumetto Esistente</h1>
    <h3>Stai modificando: {{$comic->title}}</h3>
    <p style="font-size: 18px">Modifica i dati e fai click su <span style="color: blue; text-decoration: underline">invia</span> per aggiornare i dati del fumetto presente nel database.</p>

    @if ($errors->any())
            <div class="w-50 alert alert-danger">
                    <ul>
                        {{-- $errors->all() reistituisce l'array ceon tutti gli errori --}}
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            </div>
    @endif

    <div class="w-50">
        <form action="{{ route('comics.update', $comic)}}" method="POST">
            {{-- @csrf deve essere inserito in tutti i form altrimenti il form non è valido --}}
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label sc-label">Nome fumetto</label>
                {{-- il name dell'input deve corrispondere al nome della colonna della tabella di riferimento --}}
                <input type="text" id="name" name="title"
                value="{{ old('title', $comic->title) }}"
                class="form-control @error('title') is-invalid @enderror"
                placeholder="Nome fumetto">
                @error('title')
                        <p class="error-msg text-danger"> {{$message}} </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" id="type"
                name="type"
                value="{{ old('type', $comic->type) }}"
                class="form-control @error('type') is-invalid @enderror"
                placeholder="Tipo fumetto" >
                @error('type')
                        <p class="error-msg text-danger"> {{$message}} </p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">URL immagine</label>
                <input type="text" id="image"
                name="image"
                value="{{ old('image', $comic->image) }}"
                class="form-control @error('image') is-invalid @enderror"
                placeholder="URL immagine">
                @error('image')
                        <p class="error-msg text-danger"> {{$message}} </p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>

</div>

@endsection
