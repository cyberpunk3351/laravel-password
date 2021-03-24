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
                    <h1>Имя: {{ $user }}</h1>
                    <p>Роль: {{ $rolename }}</p>
                    {{-- {{dd($password)}} --}}
                    @foreach ($password as $pass)
                        <p>Пароль: {{ $pass->pass }} | Категория: {{ $pass->title }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
