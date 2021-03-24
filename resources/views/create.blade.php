@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <h3>Создать пароль</h3>                        
                        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="pass" required value="{{ $pass->pass ?? ''}}">                        
                            </div>

                            <input type="submit" value="Создать" class="btn btn-outline-success">
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
