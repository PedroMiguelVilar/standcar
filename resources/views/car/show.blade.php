@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/car_show.css') }}">

    <div class="car-showcase">
        <div class="car-images">
            <div id="car-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($car->photos as $photo)
                        <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
                            <img src="{{ $photo->photo_path }}" alt="Car Photo" class="car-image" onclick="enlargeImage(this)">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#car-carousel" data-bs-slide="prev" id = "prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#car-carousel" data-bs-slide="next" id = "next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="car-details">
            <h1 class="car-title">{{ $car->brand }}</h1>
            <div class="car-info">
                <div class="car-model">{{ $car->model }}</div>
                <div class="car-extra">
                    <span class="car-extra-icon">&#128205;</span>
                    <span class="car-mileage">{{ number_format($car->mileage, 0, ',', '.') }}Km</span>
                    <span class="car-extra-icon">&#128197;</span>
                    <span class="car-publication">{{ $car->year }}</span>
                    <span class="car-extra-icon">&#128662;</span>
                    <span class="car-fuel">{{ $car->fuelType }}</span>
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