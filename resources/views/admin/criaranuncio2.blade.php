@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('Anuncio3') }}">
                                @csrf
                                <input type="hidden" name="mergedParams" value="{{ $mergedParams }}">
                                <div style="text-align:center">Segurança e Desempenho</div>
                                <br>
                                <fieldset>
                                    <div class="checkbox-grid">
                                        <div>
                                            <input type="checkbox" id="ABS" name="ABS" unchecked>
                                            <label for="ABS">ABS</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AjudaAoParqueamento" name="AjudaAoParqueamento"
                                                unchecked>
                                            <label for="AjudaAoParqueamento">Ajuda Ao Parqueamento</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AlertaTransposicaoDeLinha"
                                                name="AlertaTransposicaoDeLinha" unchecked>
                                            <label for="AlertaTransposicaoDeLinha">Alerta Trasnposicao De Linha</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AvisoDeAnguloMorto" name="AvisoDeAnguloMorto"
                                                unchecked>
                                            <label for="AvisoDeAnguloMorto">Aviso De Ângulo Morto</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AvisoSinaldeTransito" name="AvisoSinaldeTransito"
                                                unchecked>
                                            <label for="AvisoSinaldeTransito">Aviso Sinal de Trânsito</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="CruiseControl" name="CruiseControl" unchecked>
                                            <label for="CruiseControl">Cruise Control</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="EDSBloqueioEletronicoDoDiferencial" name="EDSBloqueioEletronicoDoDiferencial" unchecked>
                                            <label for="EDSBloqueioEletronicoDoDiferencial">EDS Bloqueio Eletrónico Do
                                                Diferencial</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="FechoAutomaticoPortasAndamento"
                                                name="FechoAutomaticoPortasAndamento" unchecked>
                                            <label for="FechoAutomaticoPortasAndamento">Fecho Autonático das Portas em
                                                Andamento</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="FechoCentralizadoComComandoDistancia"
                                                name="FechoCentralizadoComComandoDistancia" unchecked>
                                            <label for="FechoCentralizadoComComandoDistancia">Fecho Centralizado Com Comando
                                                à
                                                Distância</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="ISOFIX" name="ISOFIX" unchecked>
                                            <label for="ISOFIX">ISOFIX</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="SensoresChuva" name="SensoresChuva" unchecked>
                                            <label for="SensoresChuva">Sensores Chuva</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="SistemaChaveIntelegente"
                                                name="SistemaChaveIntelegente" unchecked>
                                            <label for="SistemaChaveIntelegente">Sistema de Chave Intelegente</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="TCSSistemaDeControloDeTracao"
                                                name="TCSSistemaDeControloDeTracao" unchecked>
                                            <label for="TCSSistemaDeControloDeTracao">TCS Sistema De Controlo De
                                                Tracao</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AirbagDeCondutor" name="AirbagDeCondutor" unchecked>
                                            <label for="AirbagDeCondutor">Airbag De Condutor</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AlertaDeColisao-TravagemDeEmergencia"
                                                name="AlertaDeColisao-TravagemDeEmergencia" unchecked>
                                            <label for="AlertaDeColisao-TravagemDeEmergencia">Alerta de Colisao - Travagem
                                                de Emergência</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AssistenteFaixadeRodagem"
                                                name="AssistenteFaixadeRodagem" unchecked>
                                            <label for="AssistenteFaixadeRodagem">Assistente Faixa de Rodagem</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AvisoDeVelocidade" name="AvisoDeVelocidade"
                                                unchecked>
                                            <label for="AvisoDeVelocidade">Aviso de Velocidade</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="BotaoStart" name="BotaoStart" unchecked>
                                            <label for="BotaoStart">Botao Start</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="DirecaoAssistida" name="DirecaoAssistida" unchecked>
                                            <label for="DirecaoAssistida">Direcao assistida</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="ESP" name="ESP" unchecked>
                                            <label for="ESP">ESP</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="FechoCentral" name="FechoCentral" unchecked>
                                            <label for="FechoCentral">Fecho Central</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Imobilizador" name="Imobilizador" unchecked>
                                            <label for="Imobilizador">Imobilizador</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="SensorDeEstacionamentoTraseiro"
                                                name="SensorDeEstacionamentoTraseiro" unchecked>
                                            <label for="SensorDeEstacionamentoTraseiro">Sensor de Estacionamento
                                                Traseiro</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="SensoresDeLuzes" name="SensoresDeLuzes" unchecked>
                                            <label for="SensoresDeLuzes">Sensores de Luzes</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="SistemaDeControloPressaoDosPneus"
                                                name="SistemaDeControloPressaoDosPneus" unchecked>
                                            <label for="SistemaDeControloPressaoDosPneus">Sistema de Controlo Pressao dos
                                                Pneus</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="TravaoDeMaoEletrico" name="TravaoDeMaoEletrico"
                                                unchecked>
                                            <label for="TravaoDeMaoEletrico">Travao de Mao Eletrico</label>
                                        </div>
                                </fieldset>



                                <div class="row mb-3">
                                    <label for="airbags">Nº de Airbags</label>
                                    <div class="col-md-6">
                                        <input id="airbags" type="number" class="form-control"  name="airbags" >
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
