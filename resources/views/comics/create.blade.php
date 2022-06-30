@extends('layout.main')

@section('content')
<div class="container d-flex sc-container flex-column">
        <h1 class="mt-5 mb-3">Crea Fumetto</h1>
        <p style="font-size: 18px">Inserisci i dati e fai click su <span style="color: blue; text-decoration: underline">invia</span> per aggiungere il nuovo fumetto al database.</p>

        <div class="w-50">
            <form action="{{ route('comics.store')}}" method="POST">
                {{-- @csrf deve essere inserito in tutti i form altrimenti il form non è valido --}}
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label sc-label">Nome fumetto</label>
                    {{-- il name dell'input deve corrispondere al nome della colonna della tabella di riferimento --}}
                    <input type="text" id="name" name="title" class="form-control" placeholder="Nome fumetto">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" id="type" name="type" class="form-control" placeholder="Tipo fumetto" >
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">URL immagine</label>
                    <input type="text" id="image" name="image" class="form-control" placeholder="URL immagine" >
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>

    </div>
@endsection
