@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('cars.edit3', ['id' => $car->id]) }}">
                                @csrf
                                <input type="hidden" name="mergedParams" value="{{ $mergedParams }}">
                                <div style="text-align:center">Securança e Desempenho</div>
                                <br>
                                <fieldset>
                                    <div class="checkbox-grid">
                                        <div>
                                            <input type="checkbox" id="ABS" name="ABS" {{ $car->ABS ? 'checked' : '' }}>
                                            <label for="ABS">ABS</label>
                                        </div>                                        
                                        <div>
                                            <input type="checkbox" id="AjudaAoParqueamento" name="AjudaAoParqueamento"
                                            {{ $car->AjudaAoParqueamento ? 'checked' : '' }} >
                                            <label for="AjudaAoParqueamento">Ajuda Ao Parqueamento</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AlertaTransposicaoDeLinha"
                                                name="AlertaTransposicaoDeLinha" {{ $car->AlertaTransposicaoDeLinha ? 'checked' : '' }}>
                                            <label for="AlertaTransposicaoDeLinha">Alerta Trasnposicao De Linha</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AvisoDeAnguloMorto" name="AvisoDeAnguloMorto"
                                            {{ $car->AvisoDeAnguloMorto ? 'checked' : '' }}>
                                            <label for="AvisoDeAnguloMorto">Aviso De Ângulo Morto</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AvisoSinaldeTransito" name="AvisoSinaldeTransito"
                                            {{ $car->AvisoSinaldeTransito ? 'checked' : '' }}>
                                            <label for="AvisoSinaldeTransito">Aviso Sinal de Trânsito</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="CruiseControl" name="CruiseControl" 
                                            {{ $car->CruiseControl ? 'checked' : '' }}>
                                            <label for="CruiseControl">Cruise Control</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="EDSBloqueioEletronicoDoDiferencial" name="EDSBloqueioEletronicoDoDiferencial" {{ $car->EDSBloqueioEletronicoDoDiferencial ? 'checked' : '' }}>
                                            <label for="EDSBloqueioEletronicoDoDiferencial">EDS Bloqueio Eletrónico Do
                                                Diferencial</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="FechoAutomaticoPortasAndamento"
                                                name="FechoAutomaticoPortasAndamento" {{ $car->FechoAutomaticoPortasAndamento ? 'checked' : '' }}>
                                            <label for="FechoAutomaticoPortasAndamento">Fecho Autonático das Portas em
                                                Andamento</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="FechoCentralizadoComComandoDistancia"
                                                name="FechoCentralizadoComComandoDistancia" {{ $car->FechoCentralizadoComComandoDistancia ? 'checked' : '' }}>
                                            <label for="FechoCentralizadoComComandoDistancia">Fecho Centralizado Com Comando
                                                à
                                                Distância</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="ISOFIX" name="ISOFIX" {{ $car->ISOFIX ? 'checked' : '' }}>
                                            <label for="ISOFIX">ISOFIX</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="SensoresChuva" name="SensoresChuva" {{ $car->SensoresChuva ? 'checked' : '' }}>
                                            <label for="SensoresChuva">Sensores Chuva</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="SistemaChaveIntelegente"
                                                name="SistemaChaveIntelegente" {{ $car->SistemaChaveIntelegente ? 'checked' : '' }}>
                                            <label for="SistemaChaveIntelegente">Sistema de Chave Intelegente</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="TCSSistemaDeControloDeTracao"
                                                name="TCSSistemaDeControloDeTracao" {{ $car->TCSSistemaDeControloDeTracao ? 'checked' : '' }}>
                                            <label for="TCSSistemaDeControloDeTracao">TCS Sistema De Controlo De
                                                Tracao</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AirbagDeCondutor" name="AirbagDeCondutor" {{ $car->AirbagDeCondutor ? 'checked' : '' }}>
                                            <label for="AirbagDeCondutor">Airbag De Condutor</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AlertaDeColisao-TravagemDeEmergencia"
                                                name="AlertaDeColisao-TravagemDeEmergencia" {{ $car->{'AlertaDeColisao-TravagemDeEmergencia'} ? 'checked' : '' }}>
                                            <label for="AlertaDeColisao-TravagemDeEmergencia">Alerta de Colisao - Travagem de Emergência</label>
                                        </div>
                                        
                                        <div>
                                            <input type="checkbox" id="AssistenteFaixadeRodagem"
                                                name="AssistenteFaixadeRodagem" {{ $car->AssistenteFaixadeRodagem ? 'checked' : '' }}>
                                            <label for="AssistenteFaixadeRodagem">Assistente Faixa de Rodagem</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AvisoDeVelocidade" name="AvisoDeVelocidade"
                                            {{ $car->AvisoDeVelocidade ? 'checked' : '' }}>
                                            <label for="AvisoDeVelocidade">Aviso de Velocidade</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="BotaoStart" name="BotaoStart" {{ $car->BotaoStart ? 'checked' : '' }}>
                                            <label for="BotaoStart">Botao Start</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="DirecaoAssistida" name="DirecaoAssistida" {{ $car->DirecaoAssistida ? 'checked' : '' }}>
                                            <label for="DirecaoAssistida">Direcao assistida</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="ESP" name="ESP" {{ $car->ESP ? 'checked' : '' }}>
                                            <label for="ESP">ESP</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="FechoCentral" name="FechoCentral" {{ $car->FechoCentral ? 'checked' : '' }}>
                                            <label for="FechoCentral">Fecho Central</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Imobilizador" name="Imobilizador" {{ $car->Imobilizador ? 'checked' : '' }}>
                                            <label for="Imobilizador">Imobilizador</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="SensorDeEstacionamentoTraseiro"
                                                name="SensorDeEstacionamentoTraseiro" {{ $car->SensorDeEstacionamentoTraseiro ? 'checked' : '' }}>
                                            <label for="SensorDeEstacionamentoTraseiro">Sensor de Estacionamento
                                                Traseiro</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="SensoresDeLuzes" name="SensoresDeLuzes" {{ $car->SensoresDeLuzes ? 'checked' : '' }}>
                                            <label for="SensoresDeLuzes">Sensores de Luzes</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="SistemaDeControloPressaoDosPneus"
                                                name="SistemaDeControloPressaoDosPneus" {{ $car->SistemaDeControloPressaoDosPneus ? 'checked' : '' }}>
                                            <label for="SistemaDeControloPressaoDosPneus">Sistema de Controlo Pressao dos
                                                Pneus</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="SistemaDeControloDePressaoDosPneus"
                                                name="SistemaDeControloDePressaoDosPneus" {{ $car->SistemaDeControloDePressaoDosPneus ? 'checked' : '' }}>
                                            <label for="SistemaDeControloDePressaoDosPneus">Sistema de Controlo de Pressao
                                                dos Pneus</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="TravaoDeMaoEletrico" name="TravaoDeMaoEletrico"
                                            {{ $car->TravaoDeMaoEletrico ? 'checked' : '' }}>
                                            <label for="TravaoDeMaoEletrico">Travao de Mao Eletrico</label>
                                        </div>
                                </fieldset>



                                <div class="row mb-3">
                                    <label for="airbags">Nº de Airbags</label>
                                    <div class="col-md-6">
                                        <input id="airbags" type="number" class="form-control" name="airbags" value="{{ $car->airbags ?? '' }}">
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
