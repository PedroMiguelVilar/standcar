@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('StoreCar') }}">
                                @csrf
                                <input type="hidden" name="mergedParams" value="{{ $mergedParams }}">
                                <div style="text-align:center">Mutimedia e Conforto</div>
                                <br>
                                <fieldset>
                                    <div class="checkbox-grid">
                                        <div>
                                            <input type="checkbox" id="ACBancosTraseiros" name="ACBancosTraseiros" unchecked>
                                            <label for="ACBancosTraseiros">AC Bancos Traseiros</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AppleCarPlay"
                                                name="AppleCarPlay" unchecked>
                                            <label for="AppleCarPlay">Apple Car Play</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="ComputadorDeBordo" name="ComputadorDeBordo" unchecked>
                                            <label for="ComputadorDeBordo">Computador de Bordo</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="EcraTatilOuTouchScreen" name="EcraTatilOuTouchScreen" unchecked>
                                            <label for="EcraTatilOuTouchScreen">Ecra Tatil ou Touch Screen</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="EntradaUSB" name="EntradaUSB"
                                                unchecked>
                                            <label for="EntradaUSB">Entrada USB</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="SistemaDeEntradaSemChave" name="SistemaDeEntradaSemChave" unchecked>
                                            <label for="SistemaDeEntradaSemChave">Sistema de Entrada Sem Chave</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Auto-Radio"
                                                name="Auto-Radio" unchecked>
                                            <label for="Auto-Radio">Auto-Radio</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="AndroidAuto"
                                                name="AndroidAuto" unchecked>
                                            <label for="AndroidAuto">Android Auto</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Bluetooth" name="Bluetooth" unchecked>
                                            <label for="Bluetooth">Bluetooth</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="EasyOpenEasyClose"
                                                name="EasyOpenEasyClose" unchecked>
                                            <label for="EasyOpenEasyClose">EasyOpenEasyClose</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="EntradaAUX"
                                                name="EntradaAUX" unchecked>
                                            <label for="EntradaAUX">Entrada AUX</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="GPS" name="GPS"
                                                unchecked>
                                            <label for="GPS">GPS</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="ArCondicionadoAutomatico" name="ArCondicionadoAutomatico" unchecked>
                                            <label for="ArCondicionadoAutomatico">Ar Condicionado Automatico</label>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Guardar
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
