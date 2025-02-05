@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('ine.store') }}" method="post">
                        @csrf
                        <h5 class="card-title">Ingresa los datos del INE</h5>
                        <x-forms.input :label="'Primer nombre'" />
                        <x-forms.input :label="'Segundo nombre'" />
                        <x-forms.input :label="'Apellido paterno'" />
                        <x-forms.input :label="'Apellido materno'" />
                        <x-forms.input :label="'Dirección'" />
                        <x-forms.input :label="'Número de INE'" />
                        <x-forms.button :label="'Siguiente'" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
