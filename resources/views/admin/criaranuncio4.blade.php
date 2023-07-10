@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('cars.edit5', ['id' => $car->id]) }}">
                        @csrf
                        <input type="hidden" name="mergedParams" value="{{ $mergedParams }}">
                        <div style="text-align:center">Equipamento Exterior</div>
                        <br>
                        <fieldset>
                            <div class="checkbox-grid">
                                <div>
                                    <input type="checkbox" id="BarrasDeTejadilho" name="BarrasDeTejadilho" {{ $car->BarrasDeTejadilho ? 'checked' : '' }}>
                                    <label for="BarrasDeTejadilho">Barras de Tejadilho</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="FaroisDirecionais" name="FaroisDirecionais" {{ $car->FaroisDirecionais ? 'checked' : '' }}>
                                    <label for="FaroisDirecionais">Farois Direcionais</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="FaroisDiurnosEmLed" name="FaroisDiurnosEmLed" {{ $car->FaroisDiurnosEmLed ? 'checked' : '' }}>
                                    <label for="FaroisDiurnosEmLed">Farois Diurnos em Led</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="FuncaoLuzesComingAndLeavingHome" name="FuncaoLuzesComingAndLeavingHome" {{ $car->FuncaoLuzesComingAndLeavingHome ? 'checked' : '' }}>
                                    <label for="FuncaoLuzesComingAndLeavingHome">Funcao Luzes Coming and Leaving Home</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="LuzesTraseirasLED" name="LuzesTraseirasLED" {{ $car->LuzesTraseirasLED ? 'checked' : '' }}>
                                    <label for="LuzesTraseirasLED">Luzes Traseiras LED</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="RetrovisoresAquecidos" name="RetrovisoresAquecidos" {{ $car->RetrovisoresAquecidos ? 'checked' : '' }}>
                                    <label for="RetrovisoresAquecidos">Retrovisores Aquecidos</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="RetrovisoresComRegulacaoEletrica" name="RetrovisoresComRegulacaoEletrica" {{ $car->RetrovisoresComRegulacaoEletrica ? 'checked' : '' }}>
                                    <label for="RetrovisoresComRegulacaoEletrica">Retrovisores com Regulacao Eletrica</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="TecnologiaLED" name="TecnologiaLED" {{ $car->TecnologiaLED ? 'checked' : '' }}>
                                    <label for="TecnologiaLED">Tecnologia LED</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="VidrosEletricosDianteirosETraseiros" name="VidrosEletricosDianteirosETraseiros" {{ $car->VidrosEletricosDianteirosETraseiros ? 'checked' : '' }}>
                                    <label for="VidrosEletricosDianteirosETraseiros">Vidros Eletricos Dianteiros e Traseiros</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="FaroisDeNevoeiro" name="FaroisDeNevoeiro" {{ $car->FaroisDeNevoeiro ? 'checked' : '' }}>
                                    <label for="FaroisDeNevoeiro">Farois de Nevoeiro</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="FaroisDiurnos" name="FaroisDiurnos" {{ $car->FaroisDiurnos ? 'checked' : '' }}>
                                    <label for="FaroisDiurnos">Farois Diurnos</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="FaroisRegulaveisEmAltura" name="FaroisRegulaveisEmAltura" {{ $car->FaroisRegulaveisEmAltura ? 'checked' : '' }}>
                                    <label for="FaroisRegulaveisEmAltura">Farois Regulaveis em Altura</label>
                                </div>
                                <div class="row mb-3">
                                    <label for="segmento">Tipo Jantes</label>
                                    <div class="col-md-6">
                                        <label id="TipoJantes" for="TipoJantes" autocomplete="TipoJantes">
                                            <label for="TipoJantes"></label>
                                            <select id="TipoJantes" name="TipoJantes">
                                                <option value="none"></option>
                                                <option value="1" {{ $car->TipoJantes == 1 ? 'selected' : '' }}>Jantes de Aço</option>
                                                <option value="2" {{ $car->TipoJantes == 2 ? 'selected' : '' }}>Jantes de Liga Leve</option>
                                                <option value="3" {{ $car->TipoJantes == 3 ? 'selected' : '' }}>Jantes Cromadas</option>
                                                <option value="4" {{ $car->TipoJantes == 4 ? 'selected' : '' }}>Jantes "spinners"</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <input type="checkbox" id="RetrovisoresAntiEncadeamento" name="RetrovisoresAntiEncadeamento" {{ $car->RetrovisoresAntiEncadeamento ? 'checked' : '' }}>
                                    <label for="RetrovisoresAntiEncadeamento">Retrovisores Anti Encadeamento</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="RetrovidoresRebativeisEletricos" name="RetrovidoresRebativeisEletricos" {{ $car->RetrovidoresRebativeisEletricos ? 'checked' : '' }}>
                                    <label for="RetrovidoresRebativeisEletricos">Retrovidores Rebativeis Eletricos</label>
                                </div>

                                <div class="row mb-3">
                                    <label for="JantesSize">Tamanho das Jantes</label>
                                    <div class="col-md-6">
                                        <input id="JantesSize" type="number" class="form-control" name="JantesSize" value="{{ $car->JantesSize }}">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Continuar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
