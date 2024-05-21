@extends('layouts.app')

@section('title', 'Eventos')

@section('content')
    <div class="row row-gap-3 my-3">
        <div class="col-sm-12">
            <div class="row column-gap-3">
                <div class="col-sm-3 col-md-2 px-2">
                    <div class="mx-3">
                        <h5>Opções</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <x-option icon="fa-solid fa-pen fa-lg text-primary opacity-75" name="Adicionar" redirect="/events/create"/>
                        </li>
                        <li class="list-group-item">
                            <x-option icon="fa-solid fa-fire fa-lg text-warning opacity-75" name="Hoje"/>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <div class="col-sm-10">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 border-bottom mb-3">
                                <h5>Hoje</h5>
                            </div>
                            <div class="col-sm-12">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 my-3">
                        <div class="row justify-content-center">
                            <div class="col-sm-12 border-bottom mb-3">
                                <h5>Todos</h5>
                            </div>
                            <div class="col-sm-12">
                                <x-event.list size="col-md-6 col-lg-6 col-xl-4" :events="$events"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection