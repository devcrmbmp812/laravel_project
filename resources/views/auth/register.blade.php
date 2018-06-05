@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                       {!! csrf_field() !!}

                        <div class="form-group has-icon-left form-control-firstname">
                            <label for="name" class="sr-only">{{ __('firstname') }}</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="First Name">

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group has-icon-left form-control-lastname">
                            <label for="name" class="sr-only">{{ __('lastname') }}</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="lastname" value="{{ old('lastname') }}" required autofocus placeholder="Last Name">

                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group has-icon-left form-control-email">
                            <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required placeholder="Email address">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group form-group has-icon-left form-control-password">
                            <label for="password" class="sr-only">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control form-control-lg" name="password" required placeholder="Enter password">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group ">

                        </div>
                        You agree to the SeekProduct User Agreement, Privacy Policy, and Cookie Policy.

                        <div class="form-submit">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">
                                        {{ __('Agree & Join') }}
                            </button>                       
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
