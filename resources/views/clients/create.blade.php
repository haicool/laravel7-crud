@extends('layouts.client')
@section('title', 'create a new Client')
@section('content')

    <div class="col-sm-6 mx-auto">

 <div class="card shadow mt-3">
            <div class="card-body">
                <h2 class="my-3 card-title">Create a new client form</h2>

                @if($errors->any())
                    <div class="alert alert-danger">
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </div>
                @endif
                <form action="{{ route('clients.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'has-error' : ''}}" id="name" name="name" value="{{ old('name') }}" placeholder="Name please"/>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control  @error('email') has-error @enderror" id="email" name="email" value="{{ old('email') }}" style="" placeholder="Email please"/>
                    </div>

                    <div class="form-group">
                        <label for="credit">Credit</label>
                        <input type="number" class="form-control  @error('credit') has-error @enderror" id="credit" name="credit" value="{{ old('credit') }}" min="0"
                               placeholder="Credit please"/>
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="tel" class="form-control @error('mobile') has-error @enderror" id="mobile" name="mobile" value="{{ old('mobile') }}" placeholder="Mobile please"/>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control @error('address') has-error @enderror" id="address" name="address" value="{{ old('address') }}" placeholder="Address please"/>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

@endsection
