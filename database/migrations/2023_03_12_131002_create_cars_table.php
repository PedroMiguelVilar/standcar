<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->integer('year')->nullable();
            $table->integer('price')->nullable();
            $table->integer('mileage')->nullable();
            $table->string('fuelType')->nullable();
            $table->string('color')->nullable();
            $table->integer('numberDoors')->nullable();
            $table->integer('capacity')->nullable();
            $table->string('transmission')->nullable();
            $table->integer('engineCapacity')->nullable();
            $table->integer('horsePower')->nullable();
            $table->string('VIN')->nullable();
            $table->string('matricula')->nullable();
            $table->string('segmento')->nullable();
            $table->string('state')->nullable();
            $table->string('warranty')->nullable();
            $table->boolean('ABS')->nullable();
            $table->boolean('AjudaAoParqueamento')->nullable();
            $table->boolean('AlertaTransposicaoDeLinha')->nullable();
            $table->boolean('AvisoDeAnguloMorto')->nullable();
            $table->boolean('AvisoSinaldeTransito')->nullable();
            $table->boolean('CruiseControl')->nullable();
            $table->boolean('EDSBloqueioEletronicoDoDiferencial')->nullable();
            $table->boolean('FechoAutomaticoPortasAndamento')->nullable();
            $table->boolean('FechoCentralizadoComComandoDistancia')->nullable();
            $table->boolean('ISOFIX')->nullable();
            $table->boolean('SensoresChuva')->nullable();
            $table->boolean('SistemaChaveIntelegente')->nullable();
            $table->boolean('TCSSistemaDeControloDeTracao')->nullable();
            $table->integer('airbags')->nullable();
            $table->boolean('AirbagDeCondutor')->nullable();
            $table->boolean('AlertaDeColisao-TravagemDeEmergencia')->nullable();
            $table->boolean('AssistenteFaixadeRodagem')->nullable();
            $table->boolean('AvisoDeVelocidade')->nullable();
            $table->boolean('BotaoStart')->nullable();
            $table->boolean('DirecaoAssistida')->nullable();
            $table->boolean('ESP')->nullable();
            $table->boolean('FechoCentral')->nullable();
            $table->boolean('Imobilizador')->nullable();
            $table->boolean('SensorDeEstacionamentoTraseiro')->nullable();
            $table->boolean('SensoresDeLuzes')->nullable();
            $table->boolean('SistemaDeControloPressaoDosPneus')->nullable();
            $table->boolean('TravaoDeMaoEletrico')->nullable();

            $table->boolean('ApoioDeBraço')->nullable();
            $table->boolean('BancosDianteirosComRegulacaoEletrica')->nullable();
            $table->boolean('ControloPorVoz')->nullable();
            $table->boolean('NaoFumador')->nullable();
            $table->boolean('VolanteDesportivo')->nullable();
            $table->boolean('EstofosEmPele')->nullable();
            $table->boolean('VolanteRegulavelEmAlturaEProfundidade')->nullable();
            $table->boolean('BancosDianteirosAquecidos')->nullable();
            $table->boolean('BancosRebativeis')->nullable();
            $table->boolean('EncostosDeCabeçaTraseiros')->nullable();
            $table->boolean('VolanteComComandosDeRadio')->nullable();
            $table->boolean('VolanteMultifuncoes')->nullable();
            $table->boolean('VolanteEmPele')->nullable();

            $table->boolean('BarrasDeTejadilho')->nullable();
            $table->boolean('FaroisDirecionais')->nullable();
            $table->boolean('FaroisDiurnosEmLed')->nullable();
            $table->boolean('FuncaoLuzesComingAndLeavingHome')->nullable();
            $table->boolean('LuzesTraseirasLED')->nullable();
            $table->boolean('RetrovisoresAquecidos')->nullable();
            $table->boolean('RetrovisoresComRegulacaoEletrica')->nullable();
            $table->boolean('TecnologiaLED')->nullable();
            $table->boolean('VidrosEletricosDianteirosETraseiros')->nullable();
            $table->boolean('FaroisDeNevoeiro')->nullable();
            $table->boolean('FaroisDiurnos')->nullable();
            $table->boolean('FaroisRegulaveisEmAltura')->nullable();
            $table->string('TipoJantes')->nullable();
            $table->boolean('RetrovisoresAntiEncadeamento')->nullable();
            $table->boolean('RetrovidoresRebativeisEletricos')->nullable();
            $table->integer('JantesSize')->nullable();

            $table->boolean('ACBancosTraseiros')->nullable();
            $table->boolean('AppleCarPlay')->nullable();
            $table->boolean('ComputadorDeBordo')->nullable();
            $table->boolean('EcraTatilOuTouchScreen')->nullable();
            $table->boolean('EntradaUSB')->nullable();
            $table->boolean('SistemaDeEntradaSemChave')->nullable();
            $table->boolean('Auto-Radio')->nullable();
            $table->boolean('AndroidAuto')->nullable();
            $table->boolean('Bluetooth')->nullable();
            $table->boolean('EasyOpenEasyClose')->nullable();
            $table->boolean('EntradaAUX')->nullable();
            $table->boolean('GPS')->nullable();
            $table->boolean('ArCondicionadoAutomatico')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
