@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('cars.update', ['id' => $car->id]) }}">
                        @csrf
                        <input type="hidden" name="mergedParams" value="{{ $mergedParams }}">
                        <div style="text-align:center">Multimedia e Conforto</div>
                        <br>
                        <fieldset>
                            <div class="checkbox-grid">
                                <div>
                                    <input type="checkbox" id="ACBancosTraseiros" name="ACBancosTraseiros" {{ $car->ACBancosTraseiros ? 'checked' : '' }}>
                                    <label for="ACBancosTraseiros">AC Bancos Traseiros</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="AppleCarPlay" name="AppleCarPlay" {{ $car->AppleCarPlay ? 'checked' : '' }}>
                                    <label for="AppleCarPlay">Apple Car Play</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="ComputadorDeBordo" name="ComputadorDeBordo" {{ $car->ComputadorDeBordo ? 'checked' : '' }}>
                                    <label for="ComputadorDeBordo">Computador de Bordo</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="EcraTatilOuTouchScreen" name="EcraTatilOuTouchScreen" {{ $car->EcraTatilOuTouchScreen ? 'checked' : '' }}>
                                    <label for="EcraTatilOuTouchScreen">Ecra Tatil ou Touch Screen</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="EntradaUSB" name="EntradaUSB" {{ $car->EntradaUSB ? 'checked' : '' }}>
                                    <label for="EntradaUSB">Entrada USB</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="SistemaDeEntradaSemChave" name="SistemaDeEntradaSemChave" {{ $car->SistemaDeEntradaSemChave ? 'checked' : '' }}>
                                    <label for="SistemaDeEntradaSemChave">Sistema de Entrada Sem Chave</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="Auto-Radio" name="Auto-Radio" {{ $car->Auto_Radio ? 'checked' : '' }}>
                                    <label for="Auto-Radio">Auto-Radio</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="AndroidAuto" name="AndroidAuto" {{ $car->AndroidAuto ? 'checked' : '' }}>
                                    <label for="AndroidAuto">Android Auto</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="Bluetooth" name="Bluetooth" {{ $car->Bluetooth ? 'checked' : '' }}>
                                    <label for="Bluetooth">Bluetooth</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="EasyOpenEasyClose" name="EasyOpenEasyClose" {{ $car->EasyOpenEasyClose ? 'checked' : '' }}>
                                    <label for="EasyOpenEasyClose">EasyOpenEasyClose</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="EntradaAUX" name="EntradaAUX" {{ $car->EntradaAUX ? 'checked' : '' }}>
                                    <label for="EntradaAUX">Entrada AUX</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="GPS" name="GPS" {{ $car->GPS ? 'checked' : '' }}>
                                    <label for="GPS">GPS</label>
                                </div>
                                <div>
                                    <input type="checkbox" id="ArCondicionadoAutomatico" name="ArCondicionadoAutomatico" {{ $car->ArCondicionadoAutomatico ? 'checked' : '' }}>
                                    <label for="ArCondicionadoAutomatico">Ar Condicionado Automatico</label>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Update
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
