<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddClient;

class AddController extends Controller
{

    public function index ()
    {
        $AddClient = AddClient::all();
        return view('clients') -> with([
            'AddClient' => $AddClient
        ]);

    }

    public function create()
    {
        return view('addClient');
    }

    public function client(Request $request)
    {
        AddClient::create([
            'Name' => $request -> Name,
            'Email' => $request -> Email,
            'Phone' => $request -> Phone,
            'Adress' => $request -> Adress,
        ]);
        return redirect() -> route('added') -> with([
            'success' => 'Customer added successfully'
        ]);
    }

    public function edit($id)
    {
        $AddClient = AddClient::find($id);
        return view('edit') -> with([
            'AddClient' => $AddClient
        ]);
    }

    public function update(Request $request, $id)
    {
        $AddClient = AddClient::find($id);
        $AddClient -> update([
            'Name'   => $request -> Name,
            'Email'  => $request -> Email,
            'Phone'  => $request -> Phone,
            'Adress' => $request -> Adress,
        ]);
        return redirect() -> route('home') -> with([
            'success' => 'The data has been modified'
        ]);
    }

    public function delete($id)
    {
        $AddClient = AddClient::find($id);
        $AddClient -> delete();
        return redirect() -> route('home');
    }
}
