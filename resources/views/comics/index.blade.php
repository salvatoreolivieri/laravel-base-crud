@extends('layout.main')

@section('content')
    <div class="container d-flex justify-content-center align-items-center sc-container flex-column">
        <h1 class="my-5">I nostri comics</h1>

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
                        </td>
                    </tr>
                @endforeach

            </tbody>
          </table>
    </div>
@endsection
