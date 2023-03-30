@extends('include.index')

@section('addClients')
    <div class="alert alert-dark" style="color: black; text-align: center;">
        <h1 style="font-size: 22px">Add Client</h1>
    </div>
    <hr>
    @if ($errors -> any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('added') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name :</label>
            <input type="text" name="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email :</label>
            <input type="email" name="Email" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone :</label>
            <input type="tel" name="Phone" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Adress :</label>
            <input type="text" name="Adress" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
    </form>
    <div style="margin-top: 18px">
        @if (session() -> has('success'))
            <div class="alert alert-success"> {{ session() -> get('success') }} </div>
        @endif
    </div>
@endsection
