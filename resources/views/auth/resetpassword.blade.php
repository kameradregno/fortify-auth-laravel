@extends('layouts.app')

@section('title', 'Reset Kata Sandi')

@section('content')


    <div class="row mt-5">
        <div class="col-md-4 mx-auto">
            <div class="card rounded-0" style="width: 18rem;">
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <h4 class="mb-4">Reset Kata Sandi</h4>
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label rounded-0">Alamat email</label>
                            <input type="email" class="form-control rounded-0" id="email" name="email" value="{{ old('email', $request->email) }}">
                            @if ($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        @endif
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label rounded-0">Kata Sandi Baru</label>
                            <input type="password" class="form-control rounded-0" id="password" name="password" required>
                            @if ($errors->has('password'))
                                <small class="text-danger">{{ $errors->first('password') }}</small>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi Baru</label>
                            <input type="password" class="form-control rounded-0" id="password_confirmation"
                                name="password_confirmation">
                            </div>
                        <button type="submit" class="btn btn-outline-dark rounded-0">Reset Password</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
