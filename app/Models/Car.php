<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year',
        'price',
        'mileage',
        'fuelType',
        'color',
        'numberDoors',
        'capacity',
        'transmission',
        'engineCapacity',
        'horsePower',
        'VIN',
        'matricula',
        'segmento',
        'state',
        'warranty',
        'ABS',
        'AjudaAoParqueamento',
        'AlertaTransposicaoDeLinha',
        'AvisoDeAnguloMorto',
        'AvisoSinaldeTransito',
        'CruiseControl',
        'EDSBloqueioEletronicoDoDiferencial',
        'FechoAutomaticoPortasAndamento',
        'FechoCentralizadoComComandoDistancia',
        'ISOFIX',
        'SensoresChuva',
        'SistemaChaveIntelegente',
        'TCSSistemaDeControloDeTracao',
        'airbags',
        'AirbagDeCondutor',
        'AlertaDeColisao-TravagemDeEmergencia',
        'AssistenteFaixadeRodagem',
        'AvisoDeVelocidade',
        'BotaoStart',
        'DirecaoAssistida',
        'ESP',
        'FechoCentral',
        'Imobilizador',
        'SensorDeEstacionamentoTraseiro',
        'SensoresDeLuzes',
        'SistemaDeControloPressaoDosPneus',
        'TravaoDeMaoEletrico',
        'ApoioDeBraço',
        'BancosDianteirosComRegulacaoEletrica',
        'ControloPorVoz',
        'NaoFumador',
        'VolanteDesportivo',
        'EstofosEmPele',
        'VolanteRegulavelEmAlturaEProfundidade',
        'BancosDianteirosAquecidos',
        'BancosRebativeis',
        'EncostosDeCabeçaTraseiros',
        'VolanteComComandosDeRadio',
        'VolanteMultifuncoes',
        'VolanteEmPele',
        'BarrasDeTejadilho',
        'FaroisDirecionais',
        'FaroisDiurnosEmLed',
        'FuncaoLuzesComingAndLeavingHome',
        'LuzesTraseirasLED',
        'RetrovisoresAquecidos',
        'RetrovisoresComRegulacaoEletrica',
        'TecnologiaLED',
        'VidrosEletricosDianteirosETraseiros',
        'FaroisDeNevoeiro',
        'FaroisDiurnos',
        'FaroisRegulaveisEmAltura',
        'TipoJantes',
        'RetrovisoresAntiEncadeamento',
        'RetrovidoresRebativeisEletricos',
        'JantesSize',
        'ACBancosTraseiros',
        'AppleCarPlay',
        'ComputadorDeBordo',
        'EcraTatilOuTouchScreen',
        'EntradaUSB',
        'SistemaDeEntradaSemChave',
        'Auto-Radio',
        'AndroidAuto',
        'Bluetooth',
        'EasyOpenEasyClose',
        'EntradaAUX',
        'GPS',
        'ArCondicionadoAutomatico',
    ];
    use HasFactory;

    public function photos()
    {
        return $this->hasMany(CarPhoto::class);
    }
}
