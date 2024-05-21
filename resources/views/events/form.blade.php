@extends('layouts.app')

@section('title', 'Criar Evento')

@section('content')
    <div class="row justify-content-center my-3">
        <div class="col-sm-8">
            <x-event.form :event="$event"/>
        </div>
    </div>
@endsection