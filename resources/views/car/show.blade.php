@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/car_show.css') }}">



    <div class="car-showcase">
        <div class="car-images">
            <div id="car-carousel" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    @foreach ($car->photos as $photo)
                        <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
                            <img src="{{ $photo->photo_path }}" alt="Car Photo" class="car-image"
                                onclick="enlargeImage(this)">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#car-carousel" data-bs-slide="prev"
                    id="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#car-carousel" data-bs-slide="next"
                    id="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>



        <div class="thumbnail-carousel">
            @foreach ($car->photos as $photo)
                <div class="thumbnail-item">
                    <img src="{{ $photo->photo_path }}" alt="Car Photo" class="thumbnail-image" onclick="changeImage(this)">
                </div>
            @endforeach
        </div>

        <div class="car-details">
            <div class="car-info">
                <div class="car-details-container">
                    @if (!empty($car->brand))
                        <div class="car-row">
                            <span class="car-label">Marca</span>
                            <span class="car-value">{{ $car->brand }}</span>
                        </div>
                    @endif

                    @if (!empty($car->model))
                        <div class="car-row">
                            <span class="car-label">Modelo</span>
                            <span class="car-value">{{ $car->model }}</span>
                        </div>
                    @endif

                    @if (!empty($car->year))
                        <div class="car-row">
                            <span class="car-label">Ano</span>
                            <span class="car-value">{{ $car->year }}</span>
                        </div>
                    @endif

                    @if (!empty($car->mileage))
                        <div class="car-row">
                            <span class="car-label">Quilómetros</span>
                            <span class="car-value">{{ $car->mileage }} Km</span>
                        </div>
                    @endif

                    @if (!empty($car->fuelType))
                        <div class="car-row">
                            <span class="car-label">Combustível</span>
                            <span class="car-value">{{ $car->fuelType }}</span>
                        </div>
                    @endif

                    @if (!empty($car->VIN))
                        <div class="car-row">
                            <span class="car-label">VIN</span>
                            <span class="car-value">{{ $car->VIN }}</span>
                        </div>
                    @endif

                    @if (!empty($car->matricula))
                        <div class="car-row">
                            <span class="car-label">Matricula</span>
                            <span class="car-value">{{ $car->matricula }}</span>
                        </div>
                    @endif

                    @if (!empty($car->color))
                        <div class="car-row">
                            <span class="car-label">Color</span>
                            <span class="car-value">{{ $car->color }}</span>
                        </div>
                    @endif

                    @if (!empty($car->capacity))
                        <div class="car-row">
                            <span class="car-label">Lotação/Capacidade</span>
                            <span class="car-value">{{ $car->capacity }} Lugares</span>
                        </div>
                    @endif

                    @if (!empty($car->numberDoors))
                        <div class="car-row">
                            <span class="car-label">Nº de Portas</span>
                            <span class="car-value">{{ $car->numberDoors }}</span>
                        </div>
                    @endif

                    @if (!empty($car->transmission) && $car->transmission != 'none')
                        <div class="car-row">
                            <span class="car-label">Transmissão</span>
                            <span class="car-value">{{ $car->transmission }}</span>
                        </div>
                    @endif

                    @if (!empty($car->engineCapacity))
                        <div class="car-row">
                            <span class="car-label">Cilindrada (cm3)</span>
                            <span class="car-value">{{ $car->engineCapacity }}</span>
                        </div>
                    @endif

                    @if (!empty($car->horsePower))
                        <div class="car-row">
                            <span class="car-label">Potência (Cv)</span>
                            <span class="car-value">{{ $car->horsePower }}</span>
                        </div>
                    @endif

                    @if (!empty($car->segmento))
                        <div class="car-row">
                            <span class="car-label">Segmento</span>
                            <span class="car-value">{{ $car->segmento }}</span>
                        </div>
                    @endif


                    @if (!empty($car->state))
                        <div class="car-row">
                            <span class="car-label">Estado</span>
                            <span class="car-value">{{ $car->state }}</span>
                        </div>
                    @endif

                    @if (!empty($car->warranty))
                        <div class="car-row">
                            <span class="car-label">Garantia</span>
                            <span class="car-value">{{ $car->warranty }}</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="car-price">{{ $car->price }}€</div>

        </div>
    </div>

    <!-- Additional Car Details -->
    <div class="additional-details">
        <div class="car-details-sections">

            <!-- Classification: Security and Performance -->
            <div class="car-details-section">
                <h3>Segurança e Performance</h3>
                @if (!empty($car->ABS))
                    @if ($car->ABS == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">ABS</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->AjudaAoParqueamento))
                    @if ($car->AjudaAoParqueamento == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Ajuda Ao Parqueamento</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->AlertaTransposicaoDeLinha))
                    @if ($car->AlertaTransposicaoDeLinha == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Alerta Transposicao De Linha</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->AvisoDeAnguloMorto))
                    @if ($car->AvisoDeAnguloMorto == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Aviso De Angulo Morto</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->AvisoSinaldeTransito))
                    @if ($car->AvisoSinaldeTransito == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Aviso Sinal de Transito</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->CruiseControl))
                    @if ($car->CruiseControl == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Cruise Control</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->EDSBloqueioEletronicoDoDiferencial))
                    @if ($car->EDSBloqueioEletronicoDoDiferencial == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">EDS Bloqueio Eletronico Do Diferencial</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->FechoAutomaticoPortasAndamento))
                    @if ($car->FechoAutomaticoPortasAndamento == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Fecho Automatico Portas Andamento</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->FechoCentralizadoComComandoDistancia))
                    @if ($car->FechoCentralizadoComComandoDistancia == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Fecho Centralizado Com Comando Distancia</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->ISOFIX))
                    @if ($car->ISOFIX == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">ISOFIX</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->SensoresChuva))
                    @if ($car->SensoresChuva == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Sensores Chuva</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->SistemaChaveIntelegente))
                    @if ($car->SistemaChaveIntelegente == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Sistema Chave Intelegente</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->TCSSistemaDeControloDeTracao))
                    @if ($car->TCSSistemaDeControloDeTracao == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">TCS Sistema De Controlo De Tracao</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->AirbagDeCondutor))
                    @if ($car->AirbagDeCondutor == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Airbag De Condutor</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->AlertaDeColisao))
                    @if ($car->AlertaDeColisao == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Alerta De Colisao</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->AssistenteFaixadeRodagem))
                    @if ($car->AssistenteFaixadeRodagem == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Assistente Faixa de Rodagem</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->AvisoDeVelocidade))
                    @if ($car->AvisoDeVelocidade == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Aviso De Velocidade</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->BotaoStart))
                    @if ($car->BotaoStart == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Botao Start</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->DirecaoAssistida))
                    @if ($car->DirecaoAssistida == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Direcao Assistida</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->ESP))
                    @if ($car->ESP == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">ESP</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->FechoCentral))
                    @if ($car->FechoCentral == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Fecho Central</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->Imobilizador))
                    @if ($car->Imobilizador == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Imobilizador</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->SensorDeEstacionamentoTraseiro))
                    @if ($car->SensorDeEstacionamentoTraseiro == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Sensor De Estacionamento Traseiro</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->SensoresDeLuzes))
                    @if ($car->SensoresDeLuzes == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Sensores De Luzes</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->SistemaDeControloPressaoDosPneus))
                    @if ($car->SistemaDeControloPressaoDosPneus == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Sistema De Controlo Pressao Dos Pneus</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->TravaoDeMaoEletrico))
                    @if ($car->TravaoDeMaoEletrico == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Travao De Mao Eletrico</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->TravaoDeMaoEletrico))
                    @if ($car->TravaoDeMaoEletrico == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Travao De Mao Eletrico</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->airbags))
                    <div class="car-row-details">
                        <div class="car-attributes">
                            <span class="car-value">Airbags</span>
                        </div>
                    </div>
                @endif
            </div>


            <!-- Classification: Interior Equipment -->
            <div class="car-details-section">
                <h3>Equipamento Interior</h3>
                @if (!empty($car->ApoioDeBraço))
                    @if ($car->ApoioDeBraço == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Apoio De Braço</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->BancosDianteirosComRegulacaoEletrica))
                    @if ($car->BancosDianteirosComRegulacaoEletrica == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Bancos Dianteiros Com Regulacao Eletrica</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->ControloPorVoz))
                    @if ($car->ControloPorVoz == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Controlo Por Voz</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->NaoFumador))
                    @if ($car->NaoFumador == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Nao Fumador</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->VolanteDesportivo))
                    @if ($car->VolanteDesportivo == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">VolanteDesportivo</span>
                            </div>
                        </div>
                    @endif
                @endif



                @if (!empty($car->EstofosEmPele))
                    @if ($car->EstofosEmPele == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Estofos Em Pele</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->VolanteRegulavelEmAlturaEProfundidade))
                    @if ($car->VolanteRegulavelEmAlturaEProfundidade == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Volante Regulavel Em Altura E Profundidade</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->BancosDianteirosAquecidos))
                    @if ($car->BancosDianteirosAquecidos == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Bancos Dianteiros Aquecidos</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->BancosRebativeis))
                    @if ($car->BancosRebativeis == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Bancos Rebativeis</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->EncostosDeCabeçaTraseiros))
                    @if ($car->EncostosDeCabeçaTraseiros == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Encostos De Cabeça Traseiros</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->VolanteComComandosDeRadio))
                    @if ($car->VolanteComComandosDeRadio == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Volante Com Comandos De Radio</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->VolanteMultifuncoes))
                    @if ($car->VolanteMultifuncoes == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Volante Multifuncoes</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->VolanteEmPele))
                    @if ($car->VolanteEmPele == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Volante Em Pele</span>
                            </div>
                        </div>
                    @endif
                @endif

            </div>



            <!-- Classification: Exterior Equipment -->
            <div class="car-details-section">
                <h3>Equipmento Exterior</h3>
                @if (!empty($car->BarrasDeTejadilho))
                    @if ($car->BarrasDeTejadilho == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Barras De Tejadilho</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->FaroisDirecionais))
                    @if ($car->FaroisDirecionais == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Farois Direcionais</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->FaroisDiurnosEmLed))
                    @if ($car->FaroisDiurnosEmLed == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Farois Diurnos Em Led</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->FuncaoLuzesComingAndLeavingHome))
                    @if ($car->FuncaoLuzesComingAndLeavingHome == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Funcao Luzes Coming And Leaving Home</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->LuzesTraseirasLED))
                    @if ($car->LuzesTraseirasLED == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Luzes Traseiras LED</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->RetrovisoresAquecidos))
                    @if ($car->RetrovisoresAquecidos == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Retrovisores Aquecidos</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->RetrovisoresAquecidos))
                    @if ($car->RetrovisoresAquecidos == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Retrovisores Aquecidos</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->RetrovisoresComRegulacaoEletrica))
                    @if ($car->RetrovisoresComRegulacaoEletrica == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Retrovisores Com Regulacao Eletrica</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->TecnologiaLED))
                    @if ($car->TecnologiaLED == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Tecnologia LED</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->VidrosEletricosDianteirosETraseiros))
                    @if ($car->VidrosEletricosDianteirosETraseiros == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Vidros Eletricos Dianteiros E Traseiros</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->FaroisDeNevoeiro))
                    @if ($car->FaroisDeNevoeiro == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Farois De Nevoeiro</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->FaroisDiurnos))
                    @if ($car->FaroisDiurnos == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Farois Diurnos</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->FaroisRegulaveisEmAltura))
                    @if ($car->FaroisRegulaveisEmAltura == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Farois Regulaveis Em Altura</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->TipoJantes))
                    @if ($car->TipoJantes == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Jantes de Aço</span>
                            </div>
                        </div>
                    @endif
                    @if ($car->TipoJantes == '2')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Jantes de Liga Leve</span>
                            </div>
                        </div>
                    @endif
                    @if ($car->TipoJantes == '3')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Jantes Cromadas</span>
                            </div>
                        </div>
                    @endif
                    @if ($car->TipoJantes == '4')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Jantes "spinners</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->RetrovisoresAntiEncadeamento))
                    @if ($car->RetrovisoresAntiEncadeamento == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Retrovisores AntiEncadeamento</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->RetrovidoresRebativeisEletricos))
                    @if ($car->RetrovidoresRebativeisEletricos == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Retrovidores Rebativeis Eletricos</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->JantesSize))
                    <div class="car-row-details">
                        <div class="car-attributes">
                            <span class="car-value">Jantes Nº{{ $car->JantesSize }}</span>
                        </div>
                    </div>
                @endif
            </div>



            <!-- Classification: Comfort and Multimedia -->
            <div class="car-details-section">
                <h3>Comforto e Multimedia</h3>

                @if (!empty($car->ACBancosTraseiros))
                    @if ($car->ACBancosTraseiros == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">AC Bancos Traseiros</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->AppleCarPlay))
                    @if ($car->AppleCarPlay == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Apple Car Play</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->ComputadorDeBordo))
                    @if ($car->ComputadorDeBordo == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Computador De Bordo</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->EcraTatilOuTouchScreen))
                    @if ($car->EcraTatilOuTouchScreen == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Ecra Tatil Ou Touch Screen</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->EntradaUSB))
                    @if ($car->EntradaUSB == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Entrada USB</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->SistemaDeEntradaSemChave))
                    @if ($car->SistemaDeEntradaSemChave == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Sistema De Entrada Sem Chave</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->{'Auto-Radio'}))
                    @if ($car->{'Auto-Radio'} == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Auto-Radio</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->AndroidAuto))
                    @if ($car->AndroidAuto == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Android Auto</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->Bluetooth))
                    @if ($car->Bluetooth == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Bluetooth</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->EasyOpenEasyClose))
                    @if ($car->EasyOpenEasyClose == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">EasyOpenEasyClose</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->EntradaAUX))
                    @if ($car->EntradaAUX == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Entrada AUX</span>
                            </div>
                        </div>
                    @endif
                @endif

                @if (!empty($car->GPS))
                    @if ($car->GPS == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">GPS</span>
                            </div>
                        </div>
                    @endif
                @endif


                @if (!empty($car->ArCondicionadoAutomatico))
                    @if ($car->ArCondicionadoAutomatico == '1')
                        <div class="car-row-details">
                            <div class="car-attributes">
                                <span class="car-value">Ar Condicionado Automatico</span>
                            </div>
                        </div>
                    @endif
                @endif

            </div>
        </div>
    </div>



    <script>
        function enlargeImage(element) {
            element.classList.toggle('enlarged');
            const controls1 = document.querySelector('#prev');
            const controls2 = document.querySelector('#next');
            controls1.style.display = 'none';
            controls2.style.display = 'none';
        }

        function changeImage(element) {
            const carousel = document.querySelector('#car-carousel');
            const thumbnailCarousel = document.querySelector('.thumbnail-carousel');
            const carouselItems = carousel.querySelectorAll('.carousel-item');
            const thumbnailItems = thumbnailCarousel.querySelectorAll('.thumbnail-item');
            const index = Array.from(thumbnailItems).indexOf(element.parentNode);
            const totalItems = thumbnailItems.length;

            const middleIndex = Math.floor(totalItems / 2);
            const scrollIndex = index - middleIndex;

            carouselItems.forEach(item => item.classList.remove('active'));
            thumbnailItems.forEach(item => item.classList.remove('active'));

            carouselItems[(scrollIndex + middleIndex + totalItems) % totalItems].classList.add('active');
            thumbnailItems[index].classList.add('active');

            thumbnailItems[index].scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }



        document.addEventListener('click', function(event) {
            const enlargedImages = document.querySelectorAll('.car-image.enlarged');
            if (enlargedImages.length > 0) {
                enlargedImages.forEach(image => {
                    if (!image.contains(event.target)) {
                        image.classList.remove('enlarged');
                        const carousel = image.closest('.carousel');
                        const controls1 = carousel.querySelector('.carousel-control-prev');
                        const controls2 = carousel.querySelector('.carousel-control-next');
                        controls1.style.removeProperty('display');
                        controls2.style.removeProperty('display');
                    }
                });
            }
        });
    </script>
@endsection
