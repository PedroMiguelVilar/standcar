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
