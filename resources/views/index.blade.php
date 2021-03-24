@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    
                    <h1>Имя: {{ $user }}</h1>
                    <p>Роль: {{ $rolename }}</p>
                    <a class="btn btn-outline-primary" href="{{ route('create') }}" role="button">Создать</a>
                    {{-- {{dd($password)}} --}}
                    @foreach ($password as $pass)
                        <p class="mt-3">Пароль: {{ $pass->pass }} | Категория: {{ $pass->title }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
