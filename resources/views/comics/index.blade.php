@extends('layout.main')

@section('content')
    <div class="container d-flex sc-container flex-column">
        <h1 class="mt-5 mb-3">I nostri fumetti</h1>

        <table class="table">

            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Tipo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>

            <tbody>

                @foreach ($comics as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->type }}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('comics.show', $item)}}">Show</a>
                            <a class="btn btn-primary" href="{{route('comics.edit', $item)}}">Edit</a>
                            <form class="btn btn-danger" href="{{route('comics.destroy', $item)}}">Delete</form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
          </table>
    </div>
@endsection
