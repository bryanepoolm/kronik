@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="mt-4">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                A simple danger alert—check it out!
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    <!-- General Form Elements -->
                    <form class="mt-4" action="{{ route('productos.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Clave</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="custom_key">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Descripción</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" style="height: 100px"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tipo de crédito</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="credit_type" aria-label="Default select example">
                                    <option selected>Seleccionar tipo de interés</option>
                                    <option value="simple">Simple</option>
                                    <option value="revolvente">Revolvente</option>
                                    <option value="bullet">Bullet</option>
                                    <option value="arrendamiento">Arrendamiento</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Tasa de interés</label>
                            <div class="col-sm-10">
                                <input type="number" name="interest_rate" class="form-control">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tipo de interés</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="interest_type" aria-label="Default select example">
                                    <option selected>Seleccionar tipo de interés</option>
                                    <option value="fixed">Fijo</option>
                                    <option value="variable">Variable</option>
                                </select>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Monto máximo</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" name="max_amount"
                                        aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Monto mínimo</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" name="min_amount"
                                        aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Plazo máximo</label>
                            <div class="col-sm-10">
                                <input type="number" name="max_term" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Plazo mínimo</label>
                            <div class="col-sm-10">
                                <input type="number" name="min_term" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tipo de plazo</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="term_type" aria-label="Default select example">
                                    <option selected>Seleccionar tipo de plazo</option>
                                    <option value="daily">Diario</option>
                                    <option value="weekly">Semanal</option>
                                    <option value="monthly">Mensual</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>



                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
@endsection
