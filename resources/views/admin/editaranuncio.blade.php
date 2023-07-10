@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('cars.edit2', ['id' => $car->id]) }}">
                        @csrf
                        <div style="text-align:center">Caracteristicas</div>
                        <br>

                        <div class="row mb-3">
                            <label for="brand" class="col-md-4 col-form-label text-md-end">Marca</label>
                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control" name="brand" value="{{ $car->brand }}"  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="model" class="col-md-4 col-form-label text-md-end">Modelo</label>
                            <div class="col-md-6">
                                <input id="model" type="description" class="form-control"  name="model" value="{{ $car->model }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="year" class="col-md-4 col-form-label text-md-end">Ano</label>
                            <div class="col-md-6">
                                <input id="year" type="number" class="form-control" name="year" value="{{ $car->year }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Preço</label>
                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control" name="price" value="{{ $car->price }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mileage" class="col-md-4 col-form-label text-md-end">Kilometros</label>
                            <div class="col-md-6">
                                <input id="mileage" type="number" class="form-control" name="mileage" value="{{ $car->mileage}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fuelType" class="col-md-4 col-form-label text-md-end">Combustivel</label>
                            <div class="col-md-6">
                                <label  id="fuelType" for="fuelType" autocomplete="fuelType" class="col-form-label text-md-end">
                                    <label for="fuelType"></label>
                                    <select id="fuelType" name="fuelType">
                                      <option value="none"></option>
                                      <option value="Gasoline" {{ $car->fuelType === 'Gasoline' ? 'selected' : '' }}>Gasolina</option>
                                      <option value="Diesel" {{ $car->fuelType === 'Diesel' ? 'selected' : '' }}>Gasoleo</option>
                                      <option value="Electric" {{ $car->fuelType === 'Electric' ? 'selected' : '' }}>Elétrico</option>
                                      <option value="Hybrid" {{ $car->fuelType === 'Hybrid' ? 'selected' : '' }}>Hibrido</option>
                                    </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="color" class="col-md-4 col-form-label text-md-end">Cor</label>

                            <div class="col-md-6">
                                <input id="color" type="text" class="form-control" name="color" value="{{ $car->color}}" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="numberDoors" class="col-md-4 col-form-label text-md-end">Número de Portas</label>
                            <div class="col-md-6">
                                <input id="numberDoors" type="number" class="form-control"  name="numberDoors" value="{{ $car->numberDoors}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="capacity" class="col-md-4 col-form-label text-md-end">Capacidade</label>
                            <div class="col-md-6">
                                <input id="capacity" type="number" class="form-control"  name="capacity" value="{{ $car->capacity}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="transmission" class="col-md-4 col-form-label text-md-end">Transmissao</label>
                            <div class="col-md-6">
                                <label id="transmission" for="transmission" autocomplete="transmission" class="col-form-label text-md-end">
                                    <label for="transmission"></label>
                                    <select id="transmission" name="transmission">
                                        <option value="none"></option>
                                        <option value="Automatic" {{ $car->transmission === 'Automatic' ? 'selected' : '' }}>Automatico</option>
                                        <option value="Manual" {{ $car->transmission === 'Manual' ? 'selected' : '' }}>Manual</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="engineCapacity" class="col-md-4 col-form-label text-md-end">Cilindrada</label>
                            <div class="col-md-6">
                                <input id="engineCapacity" type="number" class="form-control"  name="engineCapacity" value="{{ $car->engineCapacity}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="horsePower" class="col-md-4 col-form-label text-md-end">Cavalos</label>
                            <div class="col-md-6">
                                <input id="horsePower" type="number" class="form-control"  name="horsePower" value="{{ $car->horsePower}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="VIN" class="col-md-4 col-form-label text-md-end">VIN</label>

                            <div class="col-md-6">
                                <input id="VIN" type="text" class="form-control" name="VIN" value="{{ $car->VIN}}" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="matricula" class="col-md-4 col-form-label text-md-end">Matricula</label>

                            <div class="col-md-6">
                                <input id="matricula" type="text" class="form-control" name="matricula" value="{{ $car->matricula}}" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="segmento" class="col-md-4 col-form-label text-md-end">Segmento</label>
                            <div class="col-md-6">
                                <label id="segmento" for="segmento" autocomplete="segmento" class="col-form-label text-md-end">
                                    <label for="segmento"></label>
                                    <select id="segmento" name="segmento">
                                        <option value="none"></option>
                                        <option value="A" {{ $car->segmento === 'A' ? 'selected' : '' }}>A - Carros Citadinos e económicos</option>
                                        <option value="B" {{ $car->segmento === 'B' ? 'selected' : '' }}>B - Carros Utilitários</option>
                                        <option value="C" {{ $car->segmento === 'C' ? 'selected' : '' }}>C - Familiares Compactos</option>
                                        <option value="D" {{ $car->segmento === 'D' ? 'selected' : '' }}>D - Familiares Médios/Executivos Médios</option>
                                        <option value="E" {{ $car->segmento === 'E' ? 'selected' : '' }}>E - Familiares Grands/Executivos Grandes</option>
                                        <option value="F" {{ $car->segmento === 'F' ? 'selected' : '' }}>F - Luxo</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="state" class="col-md-4 col-form-label text-md-end">Estado</label>
                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value="{{ $car->state}}" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="warranty" class="col-md-4 col-form-label text-md-end">Garantia</label>

                            <div class="col-md-6">
                                <input id="warranty" type="text" class="form-control" name="warranty" value="{{ $car->warranty}}" autofocus>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Continuar
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
