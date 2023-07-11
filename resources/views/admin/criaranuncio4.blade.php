@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('Anuncio5') }}">
                        @csrf
                        <input type="hidden" name="mergedParams" value="{{ $mergedParams }}">
                        <div style="text-align:center">Equipamento Exterior</div>
                        <br>
                        <fieldset>
                            <div class="checkbox-grid">
                                <div>
                                    <input type="checkbox" id="BarrasDeTejadilho" name="BarrasDeTejadilho" unchecked>
                                    <label for="BarrasDeTejadilho">Barras de Tejadilho</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="FaroisDirecionais" name="FaroisDirecionais" unchecked>
                                    <label for="FaroisDirecionais">Farois Direcionais</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="FaroisDiurnosEmLed" name="FaroisDiurnosEmLed" unchecked>
                                    <label for="FaroisDiurnosEmLed">Farois Diurnos em Led</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="FuncaoLuzesComingAndLeavingHome" name="FuncaoLuzesComingAndLeavingHome" unchecked>
                                    <label for="FuncaoLuzesComingAndLeavingHome">Funcao Luzes Coming and Leaving Home</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="LuzesTraseirasLED" name="LuzesTraseirasLED" unchecked>
                                    <label for="LuzesTraseirasLED">Luzes Traseiras LED</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="RetrovisoresAquecidos" name="RetrovisoresAquecidos" unchecked>
                                    <label for="RetrovisoresAquecidos">Retrovisores Aquecidos</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="RetrovisoresComRegulacaoEletrica" name="RetrovisoresComRegulacaoEletrica" unchecked>
                                    <label for="RetrovisoresComRegulacaoEletrica">Retrovisores com Regulacao Eletrica</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="TecnologiaLED" name="TecnologiaLED" unchecked>
                                    <label for="TecnologiaLED">Tecnologia LED</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="VidrosEletricosDianteirosETraseiros" name="VidrosEletricosDianteirosETraseiros" unchecked>
                                    <label for="VidrosEletricosDianteirosETraseiros">Vidros Eletricos Dianteiros e Traseiros</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="FaroisDeNevoeiro" name="FaroisDeNevoeiro" unchecked>
                                    <label for="FaroisDeNevoeiro">Farois de Nevoeiro</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="FaroisDiurnos" name="FaroisDiurnos" unchecked>
                                    <label for="FaroisDiurnos">Farois Diurnos</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="FaroisRegulaveisEmAltura" name="FaroisRegulaveisEmAltura" unchecked>
                                    <label for="FaroisRegulaveisEmAltura">Farois Regulaveis em Altura</label>
                                </div>
                                <div class="row mb-3">
                                    <label for="segmento">Tipo Jantes</label>
                                    <div class="col-md-6">
                                        <label id="TipoJantes" for="TipoJantes" autocomplete="TipoJantes">
                                            <label for="TipoJantes"></label>
                                            <select id="TipoJantes" name="TipoJantes">
                                                <option value="none"></option>
                                                <option value="1">Jantes de Aço</option>
                                                <option value="2">Jantes de Liga Leve</option>
                                                <option value="3">Jantes Cromadas</option>
                                                <option value="4">Jantes "spinners"</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <input type="checkbox" id="RetrovisoresAntiEncadeamento" name="RetrovisoresAntiEncadeamento" unchecked>
                                    <label for="RetrovisoresAntiEncadeamento">Retrovisores Anti Encadeamento</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="RetrovidoresRebativeisEletricos" name="RetrovidoresRebativeisEletricos"  unchecked>
                                    <label for="RetrovidoresRebativeisEletricos">Retrovidores Rebativeis Eletricos</label>
                                </div>

                                <div class="row mb-3">
                                    <label for="JantesSize">Tamanho das Jantes</label>
                                    <div class="col-md-6">
                                        <input id="JantesSize" type="number" class="form-control" name="JantesSize" unchecked>
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
