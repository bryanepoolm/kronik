@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <!-- General Form Elements -->
                    <a class="btn btn-primary" href="{{ route('productos.create') }}">Crear producto</a>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Interest Rate</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activeProducts as $item)
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>

        </div>
    </div>
@endsection
