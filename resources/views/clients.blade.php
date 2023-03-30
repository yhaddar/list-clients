@extends('include.index')

@section('tables')
    <a class="btn btn-primary" href="{{ route('add-client') }}">Add Client</a>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Adress</th>
                <th scope="col">Created At</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($AddClient as $AddClient)
            <tr>
                <th scope="row"> {{ $AddClient -> id }} </th>
                <td>{{ $AddClient -> Name }}</td>
                <td>{{ $AddClient -> Email }}</td>
                <td>{{ $AddClient -> Phone }}</td>
                <td style="width: 39%">{{ $AddClient -> Adress }}</td>
                <td>{{ $AddClient -> created_at }}</td>
                <td><a href="{{ route('edit-client', $AddClient -> id) }}" class="btn btn-warning"><ion-icon name="create"></ion-icon></a></td>
                <td>
                    <form action="{{ route('delete-client', $AddClient -> id) }}" id="form" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><ion-icon name="trash"></ion-icon></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
