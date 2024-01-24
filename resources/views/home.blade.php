@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div id=”example”></div>
                    <script src="{{ asset('/js/app.js') }}"></script>
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div id="example"></div>
                        <div id="example2"></div>

                        <script src="{{ asset('/js/app.js') }}"></script>
                        {{ __('You are ww in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
