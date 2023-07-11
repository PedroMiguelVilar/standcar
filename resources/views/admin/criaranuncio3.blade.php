@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('Anuncio4') }}">
                                @csrf
                                <input type="hidden" name="mergedParams" value="{{ $mergedParams }}">
                                <div style="text-align:center">Equipamento Interior</div>
                                <br>
                                <fieldset>
                                    <div class="checkbox-grid">
                                        <div>
                                            <input type="checkbox" id="ApoioDeBraço" name="ApoioDeBraço" unchecked>
                                            <label for="ApoioDeBraço">Apoio de Braço</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="BancosDianteirosComRegulacaoEletrica"
                                                name="BancosDianteirosComRegulacaoEletrica" unchecked>
                                            <label for="BancosDianteirosComRegulacaoEletrica">Bancos Dianteiros Com
                                                Regulacao Eletrica</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="ControloPorVoz" name="ControloPorVoz" unchecked>
                                            <label for="ControloPorVoz">Controlo por Voz</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="NaoFumador" name="NaoFumador" unchecked>
                                            <label for="NaoFumador">Não Fumador</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="VolanteDesportivo" name="VolanteDesportivo"
                                                unchecked>
                                            <label for="VolanteDesportivo">Volante Desportivo</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="EstofosEmPele" name="EstofosEmPele" unchecked>
                                            <label for="EstofosEmPele">Estofos em Pele</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="VolanteRegulavelEmAlturaEProfundidade"
                                                name="VolanteRegulavelEmAlturaEProfundidade" unchecked>
                                            <label for="VolanteRegulavelEmAlturaEProfundidade">Volante Regulavel em Altura e
                                                Profundidade</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="BancosDianteirosAquecidos"
                                                name="BancosDianteirosAquecidos" unchecked>
                                            <label for="BancosDianteirosAquecidos">Bancos Dianteiros Aquecidos</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="BancosRebativeis" name="BancosRebativeis" unchecked>
                                            <label for="BancosRebativeis">Bancos Rebativeis</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="EncostosDeCabeçaTraseiros"
                                                name="EncostosDeCabeçaTraseiros" unchecked>
                                            <label for="EncostosDeCabeçaTraseiros">Encostos de Cabeça Traseiros</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="VolanteComComandosDeRadio"
                                                name="VolanteComComandosDeRadio" unchecked>
                                            <label for="VolanteComComandosDeRadio">Volante com Comandos de Radio</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="VolanteMultifuncoes" name="VolanteMultifuncoes"
                                                unchecked>
                                            <label for="VolanteMultifuncoes">Volante Multifuncoes</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="VolanteEmPele" name="VolanteEmPele" unchecked>
                                            <label for="VolanteEmPele">Volante em Pele</label>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Continuar
                                                </button>
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
