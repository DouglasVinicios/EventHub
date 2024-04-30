@extends('layouts.app')

@section('title', 'Eventos')

@section('content')
    <div class="row justify-content-center mb-3">
        <div class="col-sm-6">
            <x-event.form/>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-12 border-bottom">
            <h5>Meus Eventos:</h5>
        </div>
    </div>
    <x-event.list/>
@endsection