@extends('layouts.client')
@section('title', $client->name . ' Profile' )
@section('content')

    <div class="card mx-auto">

        <div class="card-body">
            <div class="card-title">
                <h2 class="my-3 card-title text-center">Show {{ $client->name }}</h2>
            </div>

            <table class="table table-bordered table-hover my-3">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Credit</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                </tr>
                </thead>
                <tbody>
                @php ($n = 1)
                <tr>
                    <td>{{ $n++ }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->credit }}</td>
                    <td>{{ $client->mobile }}</td>
                    <td>{{ $client->address }}</td>
                </tr>
                </tbody>
            </table>


        </div>


    </div>

@endsection
