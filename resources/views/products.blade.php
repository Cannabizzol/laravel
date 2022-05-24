
    @extends('layouts.app')
    @push('styles')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endpush

    @section('content')
    <body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                @include ('includes.product')
                <div class="alert alert-success" role="alert">
                </div>
            </div>
        </div>
    </div>
    </body>

    @endsection
