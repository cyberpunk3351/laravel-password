@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- @foreach ($users as $user)
                        <h3>{{ $user->name }} role: {{ $user->title }}</h3>

                    @endforeach --}}
                    <h3>{{ $users }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
