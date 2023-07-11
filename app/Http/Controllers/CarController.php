<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class CarController extends Controller
{
    public function ShowForm()
    {
        session()->forget('params'); // Reset the session params before starting a new form
        return view('admin.criaranuncio', [
            // Add other data for the results page as needed
        ]);
    }


    public function SecurityAndPerfomance(Request $request)
    {
        $mergedParams = $request->all();
        $mergedParams = serialize($mergedParams);


        return view('admin.criaranuncio2', [
            'mergedParams' => $mergedParams,
            // Add other data for the results page as needed
        ]);
    }


    public function InteriorEquipment(Request $request)
    {
        $mergedParams = $request->input('mergedParams');
        $mergedParams = unserialize($mergedParams);

        $param = $request->except('mergedParams');
        $param = array_merge($param, $mergedParams);
        $param = serialize($param);

        return view('admin.criaranuncio3', [
            'mergedParams' => $param,
            // Add other data for the results page as needed
        ]);
    }

    public function ExteriorEquipment(Request $request)
    {

        $mergedParams = $request->input('mergedParams');
        $mergedParams = unserialize($mergedParams);

        $param = $request->except('mergedParams');
        $param = array_merge($param, $mergedParams);
        $param = serialize($param);

        return view('admin.criaranuncio4', [
            'mergedParams' => $param,
            // Add other data for the results page as needed
        ]);
    }


    public function ConfortAndMultimedia(Request $request)
    {

        $mergedParams = $request->input('mergedParams');
        $mergedParams = unserialize($mergedParams);

        $param = $request->except('mergedParams');
        $param = array_merge($param, $mergedParams);
        $param = serialize($param);

        return view('admin.criaranuncio5', [
            'mergedParams' => $param,
            // Add other data for the results page as needed
        ]);
    }
    
    

    public function StoreCar(Request $request)     
    {


        $mergedParams = $request->input('mergedParams');
        $mergedParams = unserialize($mergedParams);

        $param = $request->except('mergedParams');
        $param = array_merge($param, $mergedParams);


        
        $car = Car::create([
            'brand' =>$param['brand'] ?? null,
            'model' =>$param['model'] ?? null,
            'year' =>$param['year'] ?? null,
            'price' =>$param['price'] ?? null,
            'mileage' =>$param['mileage'] ?? null,
            'fuelType' =>$param['fuelType'] ?? null,
            'color' =>$param['color'] ?? null,
            'numberDoors' =>$param['numberDoors'] ?? null,
            'capacity' =>$param['capacity'] ?? null,
            'transmission' =>$param['transmission'] ?? null,
            'engineCapacity' =>$param['engineCapacity'] ?? null,
            'horsePower' =>$param['horsePower'] ?? null,
            'VIN' =>$param['VIN'] ?? null,
            'matricula' =>$param['matricula'] ?? null,
            'segmento' =>$param['segmento'] ?? null,
            'state' =>$param['state'] ?? null,
            'warranty' =>$param['warranty'] ?? null,
            'ABS' =>$param['ABS'] ?? null,
            'AjudaAoParqueamento' =>$param['AjudaAoParqueamento'] ?? null,
            'AlertaTransposicaoDeLinha' =>$param['AlertaTransposicaoDeLinha'] ?? null,
            'AvisoDeAnguloMorto' =>$param['AvisoDeAnguloMorto'] ?? null,
            'AvisoSinaldeTransito' =>$param['AvisoSinaldeTransito'] ?? null,
            'CruiseControl' =>$param['CruiseControl'] ?? null,
            'EDSBloqueioEletronicoDoDiferencial' =>$param['EDSBloqueioEletronicoDoDiferencial'] ?? null,
            'FechoAutomaticoPortasAndamento' =>$param['FechoAutomaticoPortasAndamento'] ?? null,
            'FechoCentralizadoComComandoDistancia' =>$param['FechoCentralizadoComComandoDistancia'] ?? null,
            'ISOFIX' =>$param['ISOFIX'] ?? null,
            'SensoresChuva' =>$param['SensoresChuva'] ?? null,
            'SistemaChaveIntelegente' =>$param['SistemaChaveIntelegente'] ?? null,
            'TCSSistemaDeControloDeTracao' =>$param['TCSSistemaDeControloDeTracao'] ?? null,
            'airbags' =>$param['airbags'] ?? null,
            'AirbagDeCondutor' =>$param['AirbagDeCondutor'] ?? null,
            'AlertaDeColisao-TravagemDeEmergencia' =>$param['AlertaDeColisao-TravagemDeEmergencia'] ?? null,
            'AssistenteFaixadeRodagem' =>$param['AssistenteFaixadeRodagem'] ?? null,
            'AvisoDeVelocidade' =>$param['AvisoDeVelocidade'] ?? null,
            'BotaoStart' =>$param['BotaoStart'] ?? null,
            'DirecaoAssistida' =>$param['DirecaoAssistida'] ?? null,
            'ESP' =>$param['ESP'] ?? null,
            'FechoCentral' =>$param['FechoCentral'] ?? null,
            'Imobilizador' =>$param['Imobilizador'] ?? null,
            'SensorDeEstacionamentoTraseiro' =>$param['SensorDeEstacionamentoTraseiro'] ?? null,
            'SensoresDeLuzes' =>$param['SensoresDeLuzes'] ?? null,
            'SistemaDeControloPressaoDosPneus' =>$param['SistemaDeControloPressaoDosPneus'] ?? null,
            'TravaoDeMaoEletrico' =>$param['TravaoDeMaoEletrico'] ?? null,
            'ApoioDeBraço' =>$param['ApoioDeBraço'] ?? null,
            'BancosDianteirosComRegulacaoEletrica' =>$param['BancosDianteirosComRegulacaoEletrica'] ?? null,
            'ControloPorVoz' =>$param['ControloPorVoz'] ?? null,
            'NaoFumador' =>$param['NaoFumador'] ?? null,
            'VolanteDesportivo' =>$param['VolanteDesportivo'] ?? null,
            'EstofosEmPele' =>$param['EstofosEmPele'] ?? null,
            'VolanteRegulavelEmAlturaEProfundidade' =>$param['VolanteRegulavelEmAlturaEProfundidade'] ?? null,
            'BancosDianteirosAquecidos' =>$param['BancosDianteirosAquecidos'] ?? null,
            'BancosRebativeis' =>$param['BancosRebativeis'] ?? null,
            'EncostosDeCabeçaTraseiros' =>$param['EncostosDeCabeçaTraseiros'] ?? null,
            'VolanteComComandosDeRadio' =>$param['VolanteComComandosDeRadio'] ?? null,
            'VolanteMultifuncoes' =>$param['VolanteMultifuncoes'] ?? null,
            'VolanteEmPele' =>$param['VolanteEmPele'] ?? null,
            'BarrasDeTejadilho' =>$param['BarrasDeTejadilho'] ?? null,
            'FaroisDirecionais' =>$param['FaroisDirecionais'] ?? null,
            'FaroisDiurnosEmLed' =>$param['FaroisDiurnosEmLed'] ?? null,
            'FuncaoLuzesComingAndLeavingHome' =>$param['FuncaoLuzesComingAndLeavingHome'] ?? null,
            'LuzesTraseirasLED' =>$param['LuzesTraseirasLED'] ?? null,
            'RetrovisoresAquecidos' =>$param['RetrovisoresAquecidos'] ?? null,
            'RetrovisoresComRegulacaoEletrica' =>$param['RetrovisoresComRegulacaoEletrica'] ?? null,
            'TecnologiaLED' =>$param['TecnologiaLED'] ?? null,
            'VidrosEletricosDianteirosETraseiros' =>$param['VidrosEletricosDianteirosETraseiros'] ?? null,
            'FaroisDeNevoeiro' =>$param['FaroisDeNevoeiro'] ?? null,
            'FaroisDiurnos' =>$param['FaroisDiurnos'] ?? null,
            'FaroisRegulaveisEmAltura' =>$param['FaroisRegulaveisEmAltura'] ?? null,
            'TipoJantes' =>$param['TipoJantes'] ?? null,
            'RetrovisoresAntiEncadeamento' =>$param['RetrovisoresAntiEncadeamento'] ?? null,
            'RetrovidoresRebativeisEletricos' =>$param['RetrovidoresRebativeisEletricos'] ?? null,
            'JantesSize' =>$param['JantesSize'] ?? null,
            'ACBancosTraseiros' =>$param['ACBancosTraseiros'] ?? null,
            'AppleCarPlay' =>$param['AppleCarPlay'] ?? null,
            'ComputadorDeBordo' =>$param['ComputadorDeBordo'] ?? null,
            'EcraTatilOuTouchScreen' =>$param['EcraTatilOuTouchScreen'] ?? null,
            'EntradaUSB' =>$param['EntradaUSB'] ?? null,
            'SistemaDeEntradaSemChave' =>$param['SistemaDeEntradaSemChave'] ?? null,
            'Auto-Radio' =>$param['Auto-Radio'] ?? null,
            'AndroidAuto' =>$param['AndroidAuto'] ?? null,
            'Bluetooth' =>$param['Bluetooth'] ?? null,
            'EasyOpenEasyClose' =>$param['EasyOpenEasyClose'] ?? null,
            'EntradaAUX' =>$param['EntradaAUX'] ?? null,
            'GPS' =>$param['GPS'] ?? null,
            'ArCondicionadoAutomatico' =>$param['ArCondicionadoAutomatico'] ?? null
        ]);



        $car->save();


        return view('admin.criaranuncio6', [
            // Add other data for the results page as needed
            'car' => $car,
            'carPhotos' => null,
        ]);
        //return redirect()->route('car', ['id' => $car->id]);

    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        

        return view('car.show', [
            'car' => $car,
            // Add other data for the results page as needed
        ]);
    }
}
