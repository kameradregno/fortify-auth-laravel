@extends('layouts.app')

@section('title', 'Lupa Kata Sandi')

@section('content')


    <div class="row mt-5">
        <div class="col-md-4 mx-auto">
            <div class="card rounded-0" style="width: 18rem;">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h4 class="mb-4">Reset Kata Sandi</h4>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label rounded-0">Alamat email</label>
                            <input type="email" class="form-control rounded-0" id="email" name="email" required>
                            @if ($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-outline-dark rounded-0">Kirim Link Reset</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
