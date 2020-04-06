@extends('layouts.client')
@section('title', 'MR.IT')
@section('content')




    <div class="card mx-auto">
        <div class="card-body">
            <div class="card-title">
                <a href="{{ route('clients.create') }}" class="btn btn-success">Creat a new client</a>

            </div>

            <div class="card-text">
                <div class="col-sm-12 mt-1 mb-0">
                    @if(session()->get('success'))
                        <div class="alert alert-success message">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>

                <table class="table table-bordered table-hover mt-2">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Address</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php ($n = 1)
                    @foreach($clients as $client)
                        <tr>
                            <td>{{ $n++ }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->credit }}</td>
                            <td>{{ $client->mobile }}</td>
                            <td>{{ $client->address }}</td>
                            <td class="table-buttons" width="100">
                                <a href="{{ route('clients.show', $client->id) }}" class="btn m-0 p-0">
                                    <i class="fas fa-eye text-primary"></i>
                                </a>

                                <a href="{{ route('clients.edit', $client->id) }}" class="btn m-0 p-0">
                                    <i class="fas fa-edit text-success"></i>
                                </a>
                            <!--
                    <form action="{{ route('clients.destroy', $client->id) }}" method="post">
                        @csrf
                            @method('DELETE')
                                <button type="submit" class="btn text-danger m-0 p-0 del">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
-->
                                {{ Form::open(['method' => 'DELETE', 'route' => ['clients.destroy', $client->id]]) }}
                                {{ Form::button(
                                            '<i class="fas fa-trash-alt"></i>',
                                            ['type' => 'submit', 'class'=> 'btn text-danger m-0 p-0 del',
                                            //'onclick'=>'return confirm("Are you sure?")'
                                            ])
                                    }}
                                {{ Form::close() }}

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
