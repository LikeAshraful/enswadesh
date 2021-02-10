@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your OTP') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification OTP has been sent to your registered contact number.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your contact number for a verification OTP.') }}
                    {{ __('If you did not receive the OTP') }},
                    <form class="d-inline" method="POST" action="{{ route('verified.otp') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="otp" class="col-md-4 col-form-label text-md-right">{{ __('OTP') }}</label>

                            <div class="col-md-6">
                                <input name="user_id" type="hidden" value="{{$user_verification->user_id}}">
                                <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" required autocomplete="otp" autofocus>

                                @error('otp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sent</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
