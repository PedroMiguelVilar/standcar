@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <div class="app_container">

        <nav>
            <h2>Anúncios</h2>
            <div class="button-group">

                <form action="{{ route('cars.bulkDelete') }}" method="POST" onsubmit="return confirmDelete();">
                    @csrf
                    <input type="hidden" name="selected_cars_delete" id="selected_cars_delete">
                    <button class="primary-btn" type="submit" name="action" value="delete">Apagar</button>
                </form>
            </div>
        </nav>

        <table>

            <thead>
                <tr>
                    <th class="first"></th>
                    <th class="second">Matrícula</th>
                    <th class="third">Marca</th>
                    <th class="fourth">Modelo</th>
                    <th class="fifth">Preço</th>
                    <th class="sixth"></th>
                </tr>
            </thead>

            <tbody class="noselect">
                @foreach ($cars as $car)
                    <tr onclick="toggleCheckbox(event, '{{ $car->id }}')">
                        <td class="first">
                            <input type="checkbox" name="selected_cars[]" value="{{ $car->id }}"
                                id="{{ $car->id }}" onclick="toggleCheckbox(event, '{{ $car->id }}')">
                        </td>
                        <td class="second">{{ $car->matricula }}</td>
                        <td class="third">{{ $car->brand }}</td>
                        <td class="fourth">{{ $car->model }}</td>
                        <td class="fifth">{{ $car->price }}</td>
                        <td class="sixth">
                            <span class="dropdown-wrapper">
                                <li class="nav-item dropdown custom-dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        ...
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('cars.edit', ['id' => $car->id]) }}">
                                            {{ __('Editar Anúncio') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('cars.editPhotos', ['id' => $car->id]) }}">
                                            {{ __('Editar Fotos') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('car', ['id' => $car->id]) }}"
                                            target="_blank">
                                            {{ __('Mais Informações') }}
                                        </a>
                                    </div>
                                </li>
                            </span>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>


    <script>
        var selectedCars = []; // Initialize the array

        var lastSelectedCheckbox = null;

        function toggleCheckbox(event, carId) {
            const checkbox = document.getElementById(carId);

            if (event.shiftKey && lastSelectedCheckbox !== null) {
                const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                const startIndex = Array.from(checkboxes).indexOf(lastSelectedCheckbox);
                const endIndex = Array.from(checkboxes).indexOf(checkbox);
                const [start, end] = [startIndex, endIndex].sort((a, b) => a - b);

                for (let i = start; i <= end; i++) {
                    const currentCheckbox = checkboxes[i];
                    currentCheckbox.checked = true;

                    const currentCarId = currentCheckbox.value;
                    if (!selectedCars.includes(currentCarId)) {
                        selectedCars.push(currentCarId);
                    }
                }
            } else {
                checkbox.checked = !checkbox.checked;

                if (checkbox.checked) {
                    if (!selectedCars.includes(carId)) {
                        selectedCars.push(carId);
                    }
                } else {
                    const index = selectedCars.indexOf(carId);
                    if (index !== -1) {
                        selectedCars.splice(index, 1);
                    }
                }
            }

            lastSelectedCheckbox = checkbox.checked ? checkbox : null;

            console.log(selectedCars);
        }


        function updateForm(action) {
            if (action === 'delete') {
                const inputField = document.getElementById('selected_cars_delete');
                inputField.value = selectedCars.join(',');
            }
        }

        function confirmDelete() {
            var confirmation = confirm("Pretende apagar os anúncios selecionados?");

            if (confirmation) {
                updateForm('delete'); // Update the form with selected car IDs for delete form
                document.getElementById('deleteForm').submit(); // Submit the form
            }
        }

    </script>
@endsection
