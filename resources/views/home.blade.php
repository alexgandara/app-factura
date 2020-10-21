@extends('template')

@section('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="card-body">
                        @if(! auth()->user()->two_factor_secret)
                            You have not enable 2fa
                        @else
                            You have 2fa enable

                        @endif
                    </div>
                </div>
            </div>
        </div>
@endsection
