@extends('layouts.app')

@section('title', 'Verifikasi Email')

@section('content')


    <div class="row mt-5">
        <div class="col-md-4 mx-auto">
            <div class="card rounded-0" style="width: 18rem;">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success"><small>Email Verifikasi Telah Dikirim!</small></div>
                    @endif

                    <h4 class="mb-4 text-center">Verifikasi Email</h4>
                    <p class="p-0 m-0 align-baseline text-center">Sebelum melanjutkan proses, silahkan cek email anda untuk verifikasi. Atau</p>
                    <form action="{{ route('verification.send') }}" method="POST" class="d-inline">
                        @csrf

                        <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">{{ __('klik ini untuk kirim ulang verifikasi email.') }}
                        </button>


                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
