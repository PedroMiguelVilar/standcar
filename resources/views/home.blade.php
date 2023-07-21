@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <div class="wrapper">
        <div class="label">Pesquisa</div>
        <form action="{{ route('search') }}" method="GET" class="searchBar">
            <div class="input-group">
                <div class="search-input">
                    <input id="searchQueryInput" type="text" name="query" placeholder="Procurar" value=""
                        oninput="suggest()" />
                    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="#666666"
                                d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                        </svg>
                    </button>
                </div>
                <div id="suggestionsDropdown"></div>
            </div>

            <div id="filtersDrawer" class="filters">
                <div class="input-group">
                    <div class="range-input">
                        <input type="number" name="yearMin" placeholder="Ano Min" />
                        <input type="number" name="yearMax" placeholder="Ano Max" />
                    </div>
                    <div class="range-input">
                        <input type="number" name="mileageMin" placeholder="KM Min" />
                        <input type="number" name="mileageMax" placeholder="KM Max" />
                    </div>
                    <div class="range-input">
                        <input type="number" name="PriceMin" placeholder="Preço Min" />
                        <input type="number" name="PriceMax" placeholder="Preço Max" />
                    </div>
                </div>
            </div>
            <div class="expand-button-container">
                <div class="expand-button" onclick="toggleFilters()">
                    <img id="expandIcon" src="expandmenu.png" alt="Expand Filters" class="arrow-image">
                </div>
            </div>
        </form>
    </div>

    <div class="car-showcase">
        <div class="car-grid">
            @foreach ($cars as $car)
                <div class="car-card">
                    <a href="{{ route('car', ['id' => $car->id]) }}">
                        <div id="car-carousel-{{ $car->id }}" class="carousel slide" data-bs-slide="prev">
                            <div class="carousel-inner">
                                @php $firstPhoto = true; @endphp
                                @foreach ($car_photos as $car_photo)
                                    @if ($car_photo->car_id == $car->id)
                                        <div class="carousel-item{{ $firstPhoto ? ' active' : '' }}">
                                            <div class="image-container">
                                                <img src="{{ $car_photo->photo_path }}" alt="Car Photo" class="car-image">
                                            </div>
                                        </div>
                                        @php $firstPhoto = false; @endphp
                                    @endif
                                @endforeach
                            </div>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#car-carousel-{{ $car->id }}" data-bs-slide="next"></button>
                        </div>
                        <div class="car-details">
                            <h3 class="car-title">{{ $car->brand }}</h3>
                            <div class="car-info">
                                <div class="car-model">{{ $car->model }}</div>
                                <div class="car-extra">
                                    <span class="car-mileage">{{ number_format($car->mileage, 0, ',', '.') }}Km</span>
                                    <span class="car-extra-icon">●</span>
                                    <span class="car-publication">{{ $car->year }}</span>
                                    <span class="car-extra-icon">●</span>
                                    <span class="car-fuel">{{ $car->fuelType }}</span>
                                </div>
                            </div>
                            <div class="car-price">{{ $car->price }}€</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('.car-image').hover(
                function() {
                    var $carousel = $(this).closest('.carousel');
                    var $nextButton = $carousel.find('.carousel-control-next');
                    setTimeout(function() {
                        $nextButton.trigger('click');
                    }, 500);
                }
            );
        });

        // Attach an event listener to the input field
        function suggest() {
            const searchInput = document.querySelector('#searchQueryInput');
            const suggestionsDropdown = document.querySelector('#suggestionsDropdown');

            const query = searchInput.value.trim(); // Trim leading and trailing spaces

            // Send an AJAX request to fetch suggested terms
            fetch(`/search/suggest?query=${query}`)
                .then(response => response.json())
                .then(suggestedTerms => {
                    // Clear previous suggestions
                    suggestionsDropdown.innerHTML = '';

                    if (query !== "" && suggestedTerms.length > 0) {
                        // Loop through the suggested terms and create dropdown items
                        suggestedTerms.forEach(term => {
                            const suggestionItem = document.createElement('div');
                            suggestionItem.classList.add('dropdown-item');
                            suggestionItem.textContent = term;

                            // Add click event listener to suggestion item
                            suggestionItem.addEventListener('click', () => {
                                // Set the clicked suggestion as the search query
                                searchInput.value = term;

                                // Trigger the form submission
                                //document.querySelector('.searchBar').submit();
                            });

                            suggestionsDropdown.appendChild(suggestionItem);
                        });

                        // Show the suggestions dropdown
                        suggestionsDropdown.style.display = 'block';
                    } else {
                        // Hide the suggestions dropdown when there are no suggested terms or the input value is empty
                        suggestionsDropdown.style.display = 'none';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        // Hide suggestions dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const searchInput = document.querySelector('#searchQueryInput');
            const suggestionsDropdown = document.querySelector('#suggestionsDropdown');

            if (event.target !== searchInput && event.target !== suggestionsDropdown) {
                suggestionsDropdown.style.display = 'none';
            }
        });

        function toggleFilters() {
            var filtersDrawer = document.getElementById('filtersDrawer');
            var expandIcon = document.getElementById('expandIcon');

            if (filtersDrawer.classList.contains('show')) {
                // Remove the 'show' class without a delay for a faster response
                filtersDrawer.classList.remove('show');
                expandIcon.classList.remove('rotated');
            } else {
                filtersDrawer.classList.add('show');
                expandIcon.classList.add('rotated');
            }
        }
    </script>



    @include('layouts.footer')

@endsection
