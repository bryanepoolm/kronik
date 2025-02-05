@extends('layouts.app')

@push('styles')
    <style>
        .card-icon {
            font-size: 32px;
            line-height: 0;
            width: 64px;
            height: 64px;
            flex-shrink: 0;
            flex-grow: 0;
        }

        .sales-card .card-icon {
            color: #4154f1;
            background: #f6f6fe;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        @include('modules.home.partials.menu_item', [
            'title' => 'Clientes',
            'iconClass' => 'bi bi-people',
            'route' => route('client.ine'),
        ])
        @include('modules.home.partials.menu_item', [
            'title' => 'Lineas de crédito',
            'iconClass' => 'bi bi-file-text-fill',
            'route' => route('lineasCredito.index'),
        ])
        @include('modules.home.partials.menu_item', [
            'title' => 'Productos',
            'iconClass' => 'bi bi-box-seam',
            'route' => route('productos.index'),
        ])
    </div>
    </div>
@endsection
