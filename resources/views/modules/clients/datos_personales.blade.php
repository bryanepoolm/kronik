@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('datosp.store') }}" method="post">
                        @csrf
                        <h5 class="card-title">Ingresa los datos adicionales</h5>
                        <x-forms.input :label="'Calle'" />
                        <x-forms.input :label="'Cruzamientos'" />
                        <x-forms.input :label="'Codigo Postal'" />
                        <x-forms.input :label="'Colonia'" />
                        <x-forms.input :label="'Numero exterior'" />
                        <x-forms.input :label="'Numero interior'" />
                        <x-forms.button :label="'Siguiente'" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
