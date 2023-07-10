@extends('layouts.app')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('car.photos.upload', $car->id) }}" method="POST" enctype="multipart/form-data">
                                {{$car->id}}
                                @csrf
                                <div class="mb-3">
                                    <label for="photo" class="form-label">Car Photos</label>
                                    <input type="file" class="form-control" id="photo" name="photo[]" accept="image/*" multiple>
                                </div>
                                <button type="submit" class="btn btn-primary">Upload Photos</button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>


        @if($carPhotos)
        @if($carPhotos->isEmpty())

        @else
        <div class="container-photos">
          <div class="photo-container">
          @foreach($carPhotos as $index => $carPhoto)
            <div class="photo-item">
              <img src="{{ $carPhoto->photo_path }}" alt="Car Photo">
              <!-- Form for deleting the photo -->
              <form action="{{ route('car.photos.delete', ['carId' => $carPhoto->car_id, 'photoId' => $carPhoto->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button">Delete</button>
              </form>
            </div>
          @endforeach
        </div>
      </div>
        

        @endif
      @endif
      
      

<script>
    $(document).ready(function() {
        $('.delete-btn').click(function() {
            var photoId = $(this).data('photo-id');
            
            // Extract the car ID from the current URL
            var carId = window.location.pathname.split('/')[2];
    
            // Update the form action URL with the extracted car ID
            var formAction = $(this).closest('form').attr('action');
            formAction = formAction.replace('__CAR_ID__', carId);
            $(this).closest('form').attr('action', formAction);
        });
    });
    </script>

@endsection
