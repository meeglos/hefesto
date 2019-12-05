@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="w-1/2 mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <span>agents view</span>
        </div>
    </div>
@endsection
